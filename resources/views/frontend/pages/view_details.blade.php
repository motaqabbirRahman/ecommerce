@extends('frontend.master')

@section('product_content')
<div class="product-section">
    <div class="image"> 
      <img src= "{{asset('/storage/'.$product->image)}}" class="product-image" alt="">
    </div>

    <div class="product-detail">
        <h1 class="product-title">{{$product->name}}</h1>
        <p class="product-des">{{$product->description}}</p>
            <span></span>
            <span></span>
            <span></span>
        </p>
     
        <p class="price">{{$product->price.'/-'}}</p>
           <div class="rating">
            <div class="rating-star">
                <div class="inline-block">
                    <img src ="img/fill star.png">
                 </div>
                <div class="inline-block">
                    <img src ="img/fill star.png">
                 </div>
                <div class="inline-block">
                    <img src ="img/fill star.png">
                 </div>
                <div class="inline-block">
                    <img src ="img/fill star.png">
                 </div>
                <div class="inline-block">
                    <img src ="img/fill star.png">
                 </div>
                 <span>4,509 ratings</span>
            </div>   
        </div>

        <div class="btn-container">
            <button class="product-btn buy-btn">Buy Now</button>
            <button class="product-btn cart-btn">Add to Cart</button>
        </div>
    </div>

@endsection