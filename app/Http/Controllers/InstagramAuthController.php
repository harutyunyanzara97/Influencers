<?php

namespace App\Http\Controllers;

use App\Services\SocialInstagramAccountService;
use Illuminate\Http\Request;
use Socialite;
use GuzzleHttp\Client;

class InstagramAuthController extends Controller
{

    /**
     * Initialize Facebook fields to override
     */


    /**
     * Create a redirect method to facebook api.
     *
     * @return void
     */


    public function redirect()
    {
        return Socialite::driver('instagram')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */

//    public function callback(Request $request)
//    {
//        $code = $request->code;
//        if (empty($code)) return redirect()->route('home')->with('error', 'Failed to login with Instagram.');
//
//        $appId = config('services.instagram.client_id');
//        $secret = config('services.instagram.client_secret');
//        $redirectUri = config('services.instagram.redirect');
//
//        $client = new Client();
//
//        // Get access token
//        $response = $client->request('POST', 'https://api.instagram.com/oauth/access_token', [
//            'form_params' => [
//                'app_id' => $appId,
//                'app_secret' => $secret,
//                'grant_type' => 'authorization_code',
//                'redirect_uri' => $redirectUri,
//                'code' => $code,
//            ]
//        ]);
//
//        if ($response->getStatusCode() != 200) {
//
//            return redirect()->route('home')->with('error', 'Unauthorized login to Instagram.');
//        }
//
//        $content = $response->getBody()->getContents();
//        $content = json_decode($content);
//
//        $accessToken = $content->access_token;
//        $userId = $content->user_id;
//
//        // Get user info
//        $response = $client->request('GET', "https://graph.instagram.com/me?fields=id,username,account_type&access_token={$accessToken}");
//
//        $content = $response->getBody()->getContents();
//        $oAuth = json_decode($content);
//
//        // Get instagram user name
//        $username = $oAuth->username;
//
//        // do your code here
//    }


}
