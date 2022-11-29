<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $products=Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->cat_id = $request->category;
        $product->name = $request->name;
        $product->description = $request->description;
        // $product->code = $request->code;
        $product->price = $request->price;
        $product->image = $request->image->store('product');
        //  $images=array();
        //  if($files=$request->file('file')){
        //     $i=0;
        //     foreach($files as $file){
        //         $name=$file->getClientOriginalName();
        //         $fileNameExtract=explode('.',$name);
        //         $fileName=$fileNameExtract[0];
        //         $fileName.=time();
        //         $fileName.=$i;
        //         $fileName.='.';
        //         $fileName.=$fileNameExtract[1];
        //         $file->move('image',$fileName);
        //         $image[]=$fileName;
        //         $i++;
        //     }
        //     $product['image']=implode("|",$images);
            $product->save();
            return redirect()->back()->with('message','Product added successfully');

         }
        //  else{
        //     echo "error";
        //  }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
         $categories=Category::all();
         $products= Product::all();
        return view('admin.product.edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    
    {
       
        $update=$product->update([
            'name'=>$request->name,
            'cat_id'=>$request->category,
            'image' => $request->image->store('product'),
            'price'=>$request->price,
            'description'=>$request->description,

        ]);
        if($update)
         return redirect('/products')->with('message','Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $delete=$product->delete();
        if($delete)
           return redirect()->back()->with('message','Product deleted successfully');
    }
}
