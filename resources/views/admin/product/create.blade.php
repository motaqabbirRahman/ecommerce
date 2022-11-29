@extends('admin.admin_master')

@section('dashboard')
<div class="container">
   <section class="panel panel-default">
    <div class="panel-heading"> 
       <h3 class="panel-title">Add Product</h3> 
    </div> 
    <div class="panel-body">
      <form action="{{url('/products/')}}" method="post" enctype="multipart/form-data">
          @csrf
          <!-- form-group // -->
          <div class="form-group">
            <label class="col-sm-3 control-label">Name</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="name">
            </div>
          </div> 
          <!-- form-group // -->
          <div class="form-group">
            <label class="col-sm-3 control-label">Price</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" name="price">
            </div>
          </div>  
          <!-- form-group // -->
          <div class="form-group">
            <label class="col-sm-3 control-label">Description</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="description"></textarea>
            </div>
          </div> 
          <!-- form-group // -->
          <div class="col-sm-3">
              <label class="control-label small" >image</label>  
              <input type="file" name="image" multiple required>
          </div>
          <!-- form-group // -->
          <div class="form-group">
            <label for="tech" class="col-sm-3 control-label">Category</label>
            <div class="col-sm-3">
              <select class="form-control" name="category">
               <option value="">Cagtegory</option>
                @foreach($categories as $category)
                 <option value="{{$category->id}}"> {{$category->name}}
                 @endforeach
              </select>
            </div>
          </div> 
          <!-- form-group // -->
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
              <button type="submit" class="btn btn-dark">Add Product</button>
            </div>
          </div> 
          <!-- form-group // -->
          <p class="alert-success">
              <?php
                  $message = Session::get('message');
                  if($message)
                  {
                      echo $message;
                      Session::put('message',null);
                  }
              ?>
            </p>
      </form>
   </div><!-- panel-body // -->
</section><!-- panel// -->
</div> <!-- container// -->
@endsection