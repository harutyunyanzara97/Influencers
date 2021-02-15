<?php
namespace App\Services;
use App\Models\SocialInstagramAccount;
use App\Models\User;
use Laravel\Socialite\Contracts\User as ProviderUser;
class SocialInstagramAccountService {
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialInstagramAccount::whereProvider('instagram')
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($account) {
            return $account->user;
        } else {
            $account = new SocialInstagramAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'instagram'
            ]);
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'password' => md5(rand(1, 10000)),
                    'avatar_url' => $providerUser->getAvatar(),
                ]);
            }
            $account->user()->associate($user);
            $account->save();
            return $user;
        }
    }
}
