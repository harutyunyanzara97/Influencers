<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\Services\SocialFacebookAccountService;
use function Symfony\Component\Translation\t;

class SocialAuthFacebookController extends Controller
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
        return Socialite::driver('facebook')->redirect();

    }


    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->stateless()->user());
//        $fb = new \Facebook\Facebook([
//            'app_id' => '1522624067942900',
//            'app_secret' => 'd964790080176580274538dc800ed633',
//            'default_graph_version' => 'v2.10',
//        ]);
//        try {
//            $response = $fb->get('/me?fields=id,name,email','EAAVo0YqyOfQBADnAO9fvRpZBIyjAyi5qPDTfrdprDManeOrF7ZC3PO92nGpZAGzdn6ZAlEIOlqJc1vHEjsgeLdxKFGHCrIIUZBfRZBiXYk7HBwnWgAD2vqKNL1IiDus1eMru9ZCb10UlsqT82ZBkgmfJlv5tXt3X98rsn1nXj3XJvzL5QL126JA0ANKMDDBYkVeSjyFjnb77RMS4kmzRFgLi');
//        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
//            dd('Graph returned an error: ' . $e->getMessage());
//            die();
//        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
//            dd('Facebook SDK returned an error: ' . $e->getMessage());
//        }
//        $me = $response->getGraphUser();
        Auth::login($user,true);
        return view('clientDashboard', compact('user', $user));
    }

}
