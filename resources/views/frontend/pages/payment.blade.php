@extends('frontend.master')
@section('content')

<div class="payment">
            @php
                $cart_array = cartArray();
            @endphp
                <!--Box 1 -->
                @foreach($cart_array as $display_cart)
                <div class="cart-box">
                    <div class="cart-text">
                        <h3>{{$display_cart['name']}}</h3>
                        <span>{{$display_cart['price']}}/-</span>
                        <span>{{$display_cart['quantity']}}</span>
                    </div>
                </div>
                    
                @endforeach
                  <span>delivery: free</span>
                <div class="total">
                    <span style="margin-top=4px;">Total: {{Cart::getTotal()}}/-</span>
                </div><br>
                   <h3>payment option</h3>
                   <div>
                    <input type="radio" id="cash on delivery" name="payement" value="cash">
                    <label for="cash">Cash on Delivery</label>
                    </div>
                     <div>
                    <input type="radio" id="bkash" name="payement" value="bkash">
                    <label for="bkash">bkash</label>
                   </div>
    
                
                
                @php
                 $customer_id=Session::get('id');
                @endphp
                @if($customer_id!=null)
                <a href="{{url('/checkout')}}" class="btn">payment</a>
                @else
                <a href="{{url('/login-check')}}" class="btn">Checkout</a>
                @endif
  </div>
@endsection     