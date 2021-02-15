<?php

namespace App\Http\Controllers;
use App\Services\SocialInstagramAccountService;
use Illuminate\Http\Request;
use Socialite;

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
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialInstagramAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('instagram')->stateless()->user());
        auth()->login($user);
        return view('clientDashboard', compact('user', $user));
    }

}
