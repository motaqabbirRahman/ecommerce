@extends('frontend.master')
@section('content')
  <!--Cart -->
            @php    
                $cart_array = cartArray();
            @endphp
            <div class="cart">
              <div class="cart-content">
                <!--Box 1 -->
                @foreach($cart_array as $display_cart)
                <div class="cart-box">
                    <div class="cart-text">
                        <h3>{{$display_cart['name']}}</h3>
                        <span>{{$display_cart['price']}}/-</span>
                        <spna>{{$display_cart['quantity']}}</spna>
                    </div>
                    <a href="{{'/delete-cart/'.$display_cart['id']}}" class="bx bx-trash"></a>
                </div>
                @endforeach

                <div class="total">
                    <h3><?=count($cart_array)?></h3>
                    <span>Total: {{Cart::getTotal()}}/-</span>
                </div>
                
                @php
                 $customer_id=Session::get('id');
                @endphp
                @if($customer_id!=null)
                <a href="{{url('/checkout')}}" class="btn">Checkout</a>
                @else
                <a href="{{url('/login-check')}}" class="btn">Checkout</a>
                @endif
            <div>

 @endsection