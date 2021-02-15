<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Instagram\Instagram;

class UserController extends Controller
{
       public function profile()
       {
           return view('clientDashboard');
       }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        //todo check the type is adverticer or influencer
        return view('asAnAdvertiser');
    }
    public function store(Request $request)
    {
        $user = new User();
        $valid=$request->validate(['name' => 'required|min:4|string', 'email' => 'required|email|unique:users', 'password' => 'required|min:6','phone'=>'numeric' ]);
        if ($valid->fails()) {
            return redirect()->back()
                ->withErrors($valid)
                ->withInput();
        }
            $user->fill($request->all());
            $user->password = Hash::make($request->password);
            $user->save();
            $redirect = redirect('/login');
        return $redirect->with(['message' => __('voyager::generic.successfully_updated') . " User", 'alert-type' => 'success', ]);
    }
    public function storeProfile(Request $request)
    {
        $user = User::where('id', Auth::user()->getId())
            ->first();
        $request->validate(['name' => 'required', 'email' => 'required|email', ]);
        $categories = $request->category;
        if($categories) {
            $categories = implode(',', $categories);
        }
        $request['category'] = $categories;
        $user->fill($request->all());
        $user->save();
            if($request->hasfile('photo'))
            {
                foreach($request->file('photo') as $image)
                {
                    $name=time().$image->getClientOriginalName();
                    $image->move(public_path().'/img/', $name);
                    $user->avatar_url = $name;
                    $user->save();
                }
            }
        echo '<script type="text/javascript">'
        , 'history.go(-1);'
        , '</script>';
    }
    public function signIn(Request $r)
    {
        $validateLogin = Validator::make($r->all() , ['email' => 'required | email', 'password' => 'required | min:6']);
        $user = User::where("email", $r->email)->first();
        $validateLogin->after(function ($validateLogin) use ($user, $r) {
            if (!$user) {
                $validateLogin->errors()
                    ->add('email', 'Wrong email information!');
            }
            elseif (!Hash::check($r->password, $user->password)) {
                $validateLogin->errors()
                    ->add('password', 'Wrong password!');
            }

        });

        if ($validateLogin->fails()) {
            return redirect()
                ->back()
                ->withErrors($validateLogin)->withInput();
        }
        else {
            Session::put('user_id', $user->id);
            auth()->login($user);
        }
        return view('clientDashboard', compact('user', $user));

    }

    public function logout(Request $r)
    {
        Session::forget('user_id');
        return Redirect::to('/login');
    }
    public function showChangePasswordForm()
    {
        return view('changePassword');
    }
    public function changePassword(Request $request){

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }
    public function contact(){
           return view('contact');
    }
    public function instagram(){
    $inst=new Instagram('2883480005030754','89f7a8b00e4622c8d00d7db316b05781','http://localhost:8000/callbackInstagram','basic','');
    dd($inst);
    }

//    public function makeApiCall( $endpoint, $type, $params ) {
//		$ch = curl_init();
//
//		if ( 'POST' == $type ) {
//			curl_setopt( $ch, CURLOPT_URL, $endpoint );
//			curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $params ) );
//			curl_setopt( $ch, CURLOPT_POST, 1 );
//		} elseif ( 'GET' == $type ) {
//			curl_setopt( $ch, CURLOPT_URL, $endpoint . '?' . http_build_query( $params ) );
//		}
//
//		curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false );
//		curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
//		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
//
//		$response = curl_exec( $ch );
//		curl_close( $ch );
//
//		return json_decode( $response, true );
//	}
//	public function getHashtags(){
//        define( 'FACEBOOK_APP_ID', 'YOUR-APP-ID' );
//        define( 'FACEBOOK_APP_SECRET', 'YOUR-APP-SECRED' );
//        define( 'FACEBOOK_REDIRECT_URI', 'YOUR-REDIRECT-URI' );
//        define( 'ENDPOINT_BASE', 'https://graph.facebook.com/v5.0/' );
//
//        // accessToken
//        $accessToken = 'YOUR-ACCESS-TOKEN-HERE';
//
//        // page id
//        $pageId = 'YOUR-PAGE-ID';
//
//        // instagram business account id
//        $instagramAccountId = 'YOUR-INSTAGRAM-ACCOUNT-ID';
//        $hashtag = 'coding';
//        $hashtagId = '17841563020115819';
//
//        // ENDPOINT_BASE = https://graph.facebook.com/v5.0/
//        $hashtagSearchEndpoingFormat = ENDPOINT_BASE . 'ig_hashtag_search?user_id={user-id}&q={hashtag-name}&fields=id,name';
//        $hashtagDataEndpointFormat = ENDPOINT_BASE . '{hashtag-id}?fields=id,name';
//        $hashtagTopMediaEndpointFormat = ENDPOINT_BASE . '{ig-hashtag-id}/top_media?user_id={user-id}&fields=id,caption,children,comments_count,like_count,media_type,media_url,permalink';
//        $hashtagRecentEndpointFormat = ENDPOINT_BASE . '{ig-hashtag-id}/recent_media?user_id={user-id}&fields=id,caption,children,comments_count,like_count,media_type,media_url,permalink';
//
//        // get hashtag by name
//        $hashtagSearchEndpoint = ENDPOINT_BASE . 'ig_hashtag_search';
//        $hashtagSearchParams = array(
//            'user_id' => $instagramAccountId,
//            'fields' => 'id,name',
//            'q' => $hashtag,
//            'access_token' => $accessToken
//        );
//        $hashtagSearch = makeApiCall( $hashtagSearchEndpoint, 'GET', $hashtagSearchParams );
//
//        // get hashtag by id
//        $hashtagDataEndpoint = ENDPOINT_BASE . $hashtagId;
//        $hashtagDataParams = array(
//            'fields' => 'id,name',
//            'access_token' => $accessToken
//        );
//        $hashtagData = makeApiCall( $hashtagDataEndpoint, 'GET', $hashtagDataParams );
//
//        // top media for hashtag
//        $hashtagTopMediaEndpoint = ENDPOINT_BASE . $hashtagId . '/top_media';
//        $hashtagTopMediaParams = array(
//            'user_id' => $instagramAccountId,
//            'fields' => 'id,caption,children,comments_count,like_count,media_type,media_url,permalink',
//            'access_token' => $accessToken
//        );
//        $hashtagTopMedia = makeApiCall( $hashtagTopMediaEndpoint, 'GET', $hashtagTopMediaParams );
//        $topPost = $hashtagTopMedia['data'][0];
//
//        // recent media
//        $hashtagRecentEndpoint = ENDPOINT_BASE . $hashtagId . '/recent_media';
//        $hashtagRecentParams = array(
//            'user_id' => $instagramAccountId,
//            'fields' => 'id,caption,children,comments_count,like_count,media_type,media_url,permalink',
//            'access_token' => $accessToken
//        );
//        $hashtagRecent = makeApiCall( $hashtagRecentEndpoint, 'GET', $hashtagRecentParams );
//        $recentPost = $hashtagRecent['data'][0];
//    }


    //    public function passwordForget(Request $r)
    //    {
    //        dd($r);
    //        $user = User::where('email', $r->email)->first();
    //
    //    }
    //            public function changePassword(Request $r){
    //            $user = User::where('id',Session::get('user_id'))->first();
    //            if (!(Hash::check($r->input('current-password'), $user->password))) {
    //                // The passwords matches
    //                return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    //            }
    //
    //            if(strcmp($r->get('current-password'), $r->get('new-password')) == 0){
    //                //Current password and new password are same
    //                return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    //            }
    //
    //            $validatedData = $r->validate([
    //                'current-password' => 'required',
    //                'new-password' => 'required|string|min:6|confirmed',
    //            ]);
    //
    //            $user = User::where('id',Session::get('user_id'))->first();
    //            $user->password = bcrypt($r->get('new-password'));
    //            $user->save();
    //
    //            return redirect()->back()->with("success","Password changed successfully !");
    //
    //        }
    //            public function forgetPassword (){
    //                return view('forgot');
    //            }



}

