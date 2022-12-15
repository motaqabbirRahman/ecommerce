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
                <!-- <i class='bx bx-cart-alt' id="cart-icon"></i> -->
                  <a href="{{url('/cart')}}" class='bx bx-cart-alt' id="cart-icon"></a>
                @php
                 $customer_id=Session::get('id');
                @endphp
                @if($customer_id!=Null)
                <a href="{{url('/customer-logout')}}" class='bx bx-log-out' id="logout-icon"></a>
                @else
                <a href="{{url('/login-check')}}" class='bx bx-user' id="user-icon"></a>
                @endif
            </div>
          
              </div> 
            </div>
