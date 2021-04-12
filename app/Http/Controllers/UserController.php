<?php

namespace App\Http\Controllers;

use App\Models\Tag_category;
use App\Models\User;
use Facebook\Facebook;
use Illuminate\Support\Facades\Config;
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
        $tag_categories=Tag_category::all();
        return view('account',compact('tag_categories'));
    }

    public function storeProfile(Request $request)
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

    public function instagram()
    {
        $inst = new Instagram('2883480005030754', '89f7a8b00e4622c8d00d7db316b05781', 'http://localhost:8000/callbackInstagram', 'basic', '');
    }

    public function influencer()
    {
        //todo check the type is adverticer or influencer
        return view('influence-dashboard');
    }

    public function search()
    {
        $categories = Tag_category::all();
        return view('search-influencer',compact('categories'));

//        $provider = new \League\OAuth2\Client\Provider\Instagram([
//            'clientId' => '2883480005030754',
//            'clientSecret' => '89f7a8b00e4622c8d00d7db316b05781',
//            'redirectUri' => 'http://localhost:8000/callbackInstagram',
//            'host' => 'https://api.instagram.com',  // Optional, defaults to https://api.instagram.com
//            'graphHost' => 'https://graph.instagram.com' // Optional, defaults to https://graph.instagram.com
//        ]);
//
//
//        if (!isset($_GET['code'])) {
//
//            // If we don't have an authorization code then get one
//            $authUrl = $provider->getAuthorizationUrl();
//            $_SESSION['oauth2state'] = $provider->getState();
//            header('Location: ' . $authUrl);
//            exit;
//
//// Check given state against previously stored one to mitigate CSRF attack
//        } elseif (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
//
//            unset($_SESSION['oauth2state']);
//            exit('Invalid state');
//
//        } else {
//
//            // Try to get an access token (using the authorization code grant)
//            $token = $provider->getAccessToken('authorization_code', [
//                'code' => $_GET['code']
//            ]);
//
//            // Optional: Now you have a token you can look up a users profile data
//            try {
//
//                // We got an access token, let's now get the user's details
//                $user = $provider->getResourceOwner($token);
//
//                // Use these details to create a new profile
//                printf('Hello %s!', $user->getNickname());
//
//            } catch (Exception $e) {
//
//                // Failed to get user details
//                exit('Oh dear...');
//            }
//
//            // Use this to interact with an API on the users behalf
//            dd($token->getToken());
//        }
    }
//        $inst=new Instagram('2883480005030754');
//        Session::put(Config::get('instagram::session_name'),$inst->get_long_lived_token());
//        dd($inst->get_long_lived_token());
//        Redirect::to('/');
//        $user = Instagram::getCurrentUser();

//        $users = $user->getMedia();
//
//        foreach($users as $media)
//        {
//            var_dump($media->images);
//            dd($media->getTags());
//        }
//        $instagram = new Instagram(env('INSTAGRAM_KEY'));
//
//        // Set keyword for #hashtag
//        $tag = 'fashion';
//
//        // Get latest photos according to #hashtag keyword
//        $media = $instagram->get_authorize_url();
//        dd($media);
//        $tag=$instagram->get_user_media('2883480005030754');
////        dd($tag);
//        $categories = Tag_category::all();
//        return view('search-influencer',compact('categories'));


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


}

