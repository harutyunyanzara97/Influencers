<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Socialite;
use App\Models\User;
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
        Auth::login($user,true);
        return view('client-dashboard', compact('user', $user));
    }

}
