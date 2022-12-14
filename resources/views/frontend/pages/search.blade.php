@extends('frontend.master')
@section('content')

<section class="product container" id="popular">
        <div class="heading">
            <h2>Searched Item</h2>
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
                            <a href="{{url('/view-details'.$product->id)}}">{{$product->name}}</a><br>
                            <span>{{$product->price."/-"}}</span>
                        </div>
                                    <a href="{{url('add-to-cart/'.$product->id)}}" class='bx bx-cart-alt'></a>
                       </div>
               </div>
           
               @endforeach
        </div>
     </section>


@endsection