<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\SocialAccountService;
use Socialite;

class SocialAuthController extends Controller
{
  // public function redirect()
  // {
  //     return Socialite::driver('facebook')->redirect();
  // }

  // public function callback(SocialAccountService $service)
  //    {
  //        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
  //
  //        auth()->login($user);
  //
  //        return redirect()->to('/home');
  //    }
  //
  //
  public function redirect($provider)
{
    return Socialite::driver($provider)->redirect();
}

     public function callback(SocialAccountService $service, $provider)
{
    // Important change from previous post is that I'm now passing
    // whole driver, not only the user. So no more ->user() part
    $user = $service->createOrGetUser(Socialite::driver($provider));

    auth()->login($user);

    return redirect()->to('/home');
}
    //  public function redirectg()
    //  {
    //      return Socialite::driver('google')->redirect();
    //  }
     //
    //  public function callbackg(SocialAccountService $service)
    //     {
    //         $user = $service->createOrGetUser(Socialite::driver('google')->user());
     //
    //         auth()->login($user);
     //
    //         return redirect()->to('/home');
    //     }
}
