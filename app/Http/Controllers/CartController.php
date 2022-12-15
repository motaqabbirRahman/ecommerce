<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    // public function add_to_cart(Request $request){
    // // dd($request->id);

    //     $quantity=$request->quantity;
    //     $id=$request->id;

    //     $products=Product::where('id',$id)->first();
    //     $data['quantity']=$quantity;
    //     $data['id']=$products->id;
    //     $data['name']=$products->name;
    //     $data['price']=$products->price;
    //     $data['attribute']=[$products->image];
        

    //     Cart::add($data);
    //     cartArray();
    //     return redirect()->back();
    // }


       public function add_to_cart($id){
    // dd($request->id);
        $products = Product::find($id);

        $quantity=1;
        $id=$products->id;

        $data['quantity']=$quantity;
        $data['id']=$products->id;
        $data['name']=$products->name;
        $data['price']=$products->price;
        $data['attribute']=[$products->image];
        

        Cart::add($data);
        cartArray();
        return redirect()->back();
    }

    public function delete($id){
        Cart::remove($id);
        return redirect()->back();
    }

    public function view_cart(){
          return  view('frontend.pages.cart'); 
    }
}
