<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
     public function google_redirect(Request $request){

        return Socialite::driver('google')->redirect();

    }
    public function google_callback(Request $request){
        

        $userdata = Socialite::driver('google')->user();

        $user = User::where('email', $userdata->email)->where('auth_type', 'google')->first();
        
        if($user){
            //do login
            Auth::login($user);
            Session::put('id',$user->id);
            return redirect('/checkout');  
        }
        else{
            $uuid = Str::uuid()->toString();

            $user = New User();
            $user->name = $userdata->name;
            $user->email = $userdata->email;
            $user->password = Hash::make($uuid.now());
            $user->auth_type='google';
            $user->save();
            Auth::login($user);
            return redirect('/dashboard');

        }
      

    }
}
