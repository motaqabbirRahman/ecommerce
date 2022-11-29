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
}
