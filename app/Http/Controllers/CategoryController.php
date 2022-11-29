<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //   dd($request->all(),$request->has('image'));
      $category = new Category;
      $category->id = $request->category;
      $category->name = $request->name;
      $category->description = $request->description;
      $category->image = $request->image->store('category');
      
    //   if($request->has('image')){
    //         // dd($request->image);
    //         $file = $request->image;
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$extension;
    //         $file->move('category',$filename);
    //         $category->image = $filename; 
    //   }
      $category->save();
      return redirect()->back()->with('message','Successfully Created');
    //   dd($category->image);
    //   $category->image= $image->storeAs('category', 'image.jpg'); // it return the path at which the file is now saved
    //   dd(cagegory->image);
      
    //   dd($request->image);
    //   if ($request->hasFile('image')){
    //     // $file = $request->file('image');
    //     // $extension = $file->getClientOriginalExtension();
    //     // $filename = time().'.'.$extension;
    //     // $file->move('category',$filename);
    //     // // $category->image = $filename;
    //     // $category->image = $request->image
    //   }
      
    //   return rediret()->back()->with('message','category successfully created');


      
    }


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
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $update=$category->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$request->file('image')->store('category')
        ]);
        if($update)
         return redirect('/categories')->with('message','category updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}






