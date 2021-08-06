<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Card;
use App\Models\Network;
use App\Models\Tag_category;
use App\Models\User;
use Facebook\Facebook;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Rules\MatchOldPassword;
use Instagram\Instagram;

class UserController extends Controller
{
    public function profile()
    {
        $tag_categories = Tag_category::all();
        return view('account', compact('tag_categories'));
    }

    public function inf_profile()
    {
        return view('influencer-profile');
    }

    public function influencer_register()
    {
        return view('signup');
    }

    public function influencer_login()
    {
        return view('login');
    }

    public function removeCard(Request $request)
    {
        Card::where("id", $request->id)->delete();

        return response()->json('Card was deleted successfully');
    }

    public function store(Request $request)
    {
        $user = new User();
        $valid = $request->validate(['name' => 'required|min:4|string', 'company_name' => 'required|min:4|string', 'email' => 'required|email|unique:users', 'password' => 'required|min:6', 'phone' => 'numeric']);
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        $user->type = 'influencer';
        $user->save();
        $redirect = redirect('/login-influencer');
        return $redirect->with(['message' => __('voyager::generic.successfully_updated') . " User", 'alert-type' => 'success',]);
    }

    public function signIn(Request $r)
    {
        $validateLogin = Validator::make($r->all(), ['email' => 'required | email', 'password' => 'required | min:6']);
        $user = User::where("email", $r->email)->first();
        $validateLogin->after(function ($validateLogin) use ($user, $r) {
            if (!$user) {
                $validateLogin->errors()
                    ->add('email', 'Wrong email information!');
            } elseif ($r->password !== $user->password) {
                $validateLogin->errors()
                    ->add('password', 'Wrong password!');
            }

        });

        if ($validateLogin->fails()) {
            return redirect()
                ->back()
                ->withErrors($validateLogin)->withInput();
        } else {
            Session::put('user_id', $user->id);
            auth()->login($user);
        }
        $campaigns = Campaign::all();
        return view('influence-dashboard', compact('user', $user, 'campaigns'));

    }

    public function storeProfile(Request $request)
    {
        $user = User::where('id', Auth::id())->first();
        $request->validate(['name' => 'required', 'email' => 'required|email',]);
        $categories = $request->category;
        if ($categories) {
            $categories = implode(',', $categories);
        }
        $request['category'] = $categories;
        $user->fill($request->all());
        $user->save();
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path() . '/img/', $name);
                $user->avatar_url = $name;
                $user->save();
            }
        }
        echo '<script type="text/javascript">'
        , 'history.go(-1);'
        , '</script>';
    }

    public function showChangePasswordForm()
    {
        return view('changePassword');
    }

    public function changePassword(Request $request)
    {

        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);
        echo '<script type="text/javascript">'
        , 'history.go(-2);'
        , '</script>';
    }

    public function contact()
    {
        return view('contact');
    }

//    public function instagram()
//    {
//        $inst = new Instagram('2883480005030754', '89f7a8b00e4622c8d00d7db316b05781', 'http://localhost:8000/callbackInstagram', 'basic', '');
//    }

    public function influencer()
    {
        $campaigns = Campaign::all();
        //todo check the type is adverticer or influencer
        return view('influencers-search', compact('campaigns'));
    }

    public function acceptCampaign(Request $request)
    {
        $campaign = Campaign::where('id', $request->id)->first();
        $campaign->details = "accepted";
        $campaign->save();
        return response()->json('Campaign has been accepted');

    }

    public function declineCampaign(Request $request)
    {
        $campaign = Campaign::where('id', $request->id)->first();
        $campaign->details = "declined";
        $campaign->save();
        return response()->json('Campaign has been declined');

    }

    public function search()
    {
        $categories = Tag_category::all();
        return view('search-influencer', compact('categories'));

    }


    public function storeInfProfile(Request $request)
    {
        $user = User::where('id', Auth::user()->getId())->first();
        $request->validate(['name' => 'required', 'email' => 'required|email',]);
        $categories = $request->category;
        if ($categories) {
            $categories = implode(',', $categories);
        }
        $request['category'] = $categories;
        $user->fill($request->all());
        $user->save();
        if ($request->hasfile('photo')) {
            foreach ($request->file('photo') as $image) {
                $name = time() . $image->getClientOriginalName();
                $image->move(public_path() . '/img/', $name);
                $user->avatar_url = $name;
                $user->save();
            }
        }
        echo '<script type="text/javascript">'
        , 'history.go(-1);'
        , '</script>';
    }

    public function registerInf(Request $request)
    {
        $user = new User();
        $request->validate(['name' => 'required', 'email' => 'required|email',]);
        $user->fill($request->all());
        $user->type = "influencer";
        $user->save();
        return Redirect('/login-influencer');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function updateInfo(Request $request)
    {
        $user = Auth::user();
        $user->billing_email = $request->email;
        $user->update();
        return response()->json($user->email);
    }

    public function updateInfoBilling(Request $request)
    {
        $user = Auth::user();
        $user->payment_info= $request->info;
        $user->update();
        return response()->json($user->category);
    }


    public function redirectToInstagramProvider()
    {
        $appId = config('services.instagram.client_id');
        $redirectUri = urlencode(config('services.instagram.redirect'));
        return redirect()->to("https://api.instagram.com/oauth/authorize?app_id={$appId}&redirect_uri={$redirectUri}&scope=user_profile,user_media&response_type=code");
    }

    public function instagramProviderCallback(Request $request)
    {
        $code = $request->code;
        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');

        $appId = config('services.instagram.client_id');
        $secret = config('services.instagram.client_secret');
        $redirectUri = config('services.instagram.redirect');

        $curl = curl_init();
        curl_setopt_array($curl, array(   CURLOPT_URL => "https://api.instagram.com/oauth/access_token",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(     "app_id:$appId",
                "client_secret:$secret",
                "grant_type: authorization_code",
                "redirect_uri: $redirectUri",
                "code: $code"
            ), ));
    }
    public function network(Request $request){
        Auth::user()->networks=$request->website;
    }
}


