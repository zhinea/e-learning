<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthWithSocialite extends Controller
{
    

    public function redirect(Request $request){

        if(!$request->input('client')){
            return route('login');
        }

        return Socialite::driver($request->input('client', NULL) ?? 'google')->redirect();
    }


    public function handleCallback($client){

        $userSocialite = Socialite::driver($client)->user();

        $user = $this->_findOrCreate($userSocialite, $client);

        Auth::login($user, true);
    
        return redirect()->to('/redirect?type=login');
    }


    private function _findOrCreate($userSocialite, $client){

        $user = User::query()
                    ->where('email', $userSocialite->getEmail())
                    ->where('provider_name', $client)
                    ->first();

        if(!$user){
            $user = User::create([
                'email' => $userSocialite->getEmail(),
                'name' => $userSocialite->getName(),
                'photo_profile' => $userSocialite->getAvatar(),
                'provider_name' => $client,
                'provider_id' => $userSocialite->getId()
            ]);

            $user->roles()->sync(1);

        }

        return $user;
    }
}
