<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Shipping;
use Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('frontend.pages.checkout');
    }
    public function login_check(){
        return view('frontend.pages.login');
    }

    public function save_shipping_address(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['mobile']=$request->mobile;
        $data['street']=$request->address;
        $data['city']=$request->city;
        $data['state']=$request->state;
        $data['zip']=$request->zip;
        $s_id=Shipping::insertGetId($data);
        Session::put('id',$s_id);
        return Redirect::to('/payment');

    }

    public function payment(){
        return view('frontend.pages.payment');
    }
}
