<div class="nav container">
            <!-- Menu Icon -->
            <div class="menu-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <!-- Nav list -->
            <ul class="navbar">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>
                 <div class="dropdown">
                    <button class="dropbtn">Category</button>
                      <div class="dropdown-content">
                        @foreach($categories as $category)
                        <a class="dd-option" href="{{url('/view-cat-details'.$category->id)}}">{{$category->name}}</a>
                        @endforeach
                      </div>
                 </div>
                </li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <!--Logo -->
            <a href="{{url('/')}}"class="logo">
                Solaris<span>.</span>
            </a>
            <!--Nav Icons -->
            <div class="nav-icons">
                <form action="{{'/search'}}" method="GET">
                    <input class="search-box"  name="product" placeholder="search here" value="{{request('product')}}">
                </form>
                <i class='bx bx-cart-alt' id="cart-icon"></i>
                @php
                 $customer_id=Session::get('id');
                @endphp
                @if($customer_id!=Null)
                <a href="{{url('/customer-logout')}}" class='bx bx-log-out' id="logout-icon"></a>
                @else
                <a href="{{url('/login-check')}}" class='bx bx-user' id="user-icon"></a>
                @endif
            </div>
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
              </div> 
            </div>
