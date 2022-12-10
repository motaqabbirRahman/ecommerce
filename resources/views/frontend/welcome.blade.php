@extends('frontend.master')

@section('product_content')
<!-- Home Section stars -->
    <section class="home container" id="home">
        <div class="home-text">
        <h1><span>Classic Books</span> <br>For You</h1>
        <p>Committed to publishing great books, connecting readers and authors globally, and spreading the love of reading.</p>
        <a href="#" class="btn">Shop More</a>
    </div>
    <!-- Home Image -->
    <div class="home-img">
        <img src="img/home.jpg" alt="">
    </div>
    </section>
    
    <!-- Home Section ends -->

    <!--Popular Section Start -->
     <section class="popular container" id="popular">
        <div class="heading">
            <h2>Popular</h2>
            <a href="#">See All</a>
        </div>
        <!-- popular content -->
        <div class="popular-content">
            <!-- box1 -->
            @foreach($products as $product)
                <div class="box">
                    <img src="{{asset('/storage/'.$product->image)}}"  alt="">
                    <div class="box-text">
                        <div class="title-price">
                            <a href="{{url('/view-details'.$product->id)}}">{{$product->id}}</a><br>
                            <span>{{$product->price."/-"}}</span>
                        </div>
                        <form action="{{url('add-to-cart')}}" method="post"  enctype="multipart/form-data" id="9">
                            @csrf
                                <input type="hidden" name="quantity" value="1">
                                <button class="add-to-cart-btn">
                                    <!-- <i class='bx bx-cart-alt'>
                                       <a href="{{url('add-to-cart/'.$product->id)}}" ></a>
                                    </i>   -->
                                      <a href="{{url('add-to-cart/'.$product->id)}}" class='bx bx-cart-alt'></a>
                                </button>
                        </from>
                    </div>
                </div> 
             @endforeach
            
        </div>
     </section>
    <!-- Popular Section End -->
    <!-- Products section star -->
    <section class="product container" id="popular">
        <div class="heading">
            <h2>All Prouducts</h2>
            <a href="#">See All</a>
        </div>
        <!-- popular content -->
        <div class="product-content">
            <!-- box1 -->
            @foreach($products as $product)
                <div class="box">
                    <img src="{{asset('/storage/'.$product->image)}}"  alt="">
                    <div class="box-text">
                        <div class="title-price">
                            <a href="{{url('/view-details'.$product->id)}}">{{$product->id}}</a><br>
                            <span>{{$product->price."/-"}}</span>
                        </div>
                                    <a href="{{url('add-to-cart/'.$product->id)}}" class='bx bx-cart-alt'></a>
                       </div>
               </div>
           
               @endforeach
        </div>
     </section>
@endsection()