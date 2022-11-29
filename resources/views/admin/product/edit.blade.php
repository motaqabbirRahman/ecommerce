@extends('admin.admin_master')

@section('dashboard')
<div class="container">
  
  <section class="panel panel-default">
<div class="panel-heading"> 
<h3 class="panel-title">Edit Product</h3> 
</div> 
<div class="panel-body">
  
<form action="{{url('/products/'.$product->id)}}" method="post" enctype="multipart/form-data">
 <!-- form-group // -->
   @csrf
   @method('PUT')
    <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">Name</label>
    <div class="col-sm-3">
   <input type="text" class="form-control" name="name" value="{{$product->name}}">
    </div>
  </div> 
  <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">Price</label>
    <div class="col-sm-3">
   <input type="text" class="form-control" name="price" value="{{$product->price}}">
    </div>
  </div> 
  
  <!-- form-group // -->
  <div class="form-group">
    <label class="col-sm-3 control-label">Description</label>
    <div class="col-sm-9">
    <input type="text" class="form-control" name="description" value="{{$product->description}}">
    </div>
  </div> 
	<div class="col-sm-3">
      <label class="control-label small" >image</label>  
      <input type="file" name="image" multiple required>
    </div>
  </div> <!-- form-group // -->
  <div class="form-group">
    <label for="tech" class="col-sm-3 control-label">Category</label>
    <div class="col-sm-3">
   <select class="form-control" name="category" value="{{$product->category}}">
    @foreach($categories as $category)
    <option value="{{$category->id}}"> {{$category->name}}
    @endforeach
   </select>
    </div>
  </div> <!-- form-group // -->
  <hr>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div> <!-- form-group // -->
</form>
  
</div><!-- panel-body // -->
</section><!-- panel// -->

  
</div> <!-- container// -->
@endsection