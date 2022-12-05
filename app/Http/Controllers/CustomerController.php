<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\Redirect;
use Session;

class CustomerController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
     
        $result=Customer::where('email',$email)->where('password',$password)->first();

        if($result){
         Session::put('id',$result->id);
         return Redirect::to('/checkout');
        }
        else{
         return Redirect::to('/login-check');
        }
    } 

    public function logout(){
        Session::flush();
        return Redirect::to('/');
    }

    public function registration(Request $request){
        $data = array();
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $id = Customer::insertGetId($data);
        Session::put('id', $id);
        // Session::put('email', $email);
        return Redirect::to('/products');
    }

}