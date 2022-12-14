<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $categories=Category::all();
        $products=Product::where('status',1)->latest()->limit(8)->get();
        return view('frontend.welcome',compact('products','categories'));
    }

    public function view_details($id){
        $categories=Category::all();
        $product=Product::findOrFail($id);
        return view('frontend.pages.view_details',compact('categories','product'));
    }
    public function signup(){
        return view('frontend.signup');
    }
    public function view_cat_details($id){
        $products=Product::where('cat_id',$id)->latest()->limit(8)->get();
        return  view('frontend.pages.category_view', compact('products'));
    }
    public function search(Request $request){
        $products=Product::orderBy('id','desc')->where('name','LIKE','%'.$request->product.'%');
        $products= $products->get();
       return  view('frontend.pages.search', compact('products'));

    }
}
