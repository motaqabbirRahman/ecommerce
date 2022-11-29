<div class="nav container">
            <!-- Menu Icon -->
            <div class="menu-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <!-- Nav list -->
            <ul class="navbar">
                <li><a href="#home">Home</a></li>
                <li>
                    <!-- <a href="#category">Category</a> -->
                    <div class="dropdown">
                    <button class="dropbtn">Category</button>
                      <div class="dropdown-content">
                        @foreach($categories as $category)
                        <a class="dd-option" href="#">{{$category->name}}</a>
                        @endforeach
                      </div>
                    </div>
                </li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="#about">About</a></li>
            </ul>
            <!--Logo -->
            <a href="#" class="logo">
                Solaris<span>.</span>
            </a>
            <!--Nav Icons -->
            <div class="nav-icons">
                <i class='bx bx-search' id="search-icon"></i>
                <i class='bx bx-cart-alt' id="cart-icon"></i>
                <i class='bx bx-user' id="user-icon"></i>
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
                <a href="#" class="btn">Proceed To Payment</a>
              </div> 
            </div>

            <!-- login-form -->
            <div class="login-form">
                <!-- Form -->
                <form action="">
                    <h2>Login To Continue</h2>
                    <input type="email" name="" id="" placeholder="Email" required>
                    <input type="password" name="" id="" placeholder="Password" requried>
                    <a href="#">Forget Passsword?</a>
                    <input type="submit" value="Log In" class="btn">
                    <!-- google sign-up -->
                    <div class="google-btn">
                     <div class="google-icon-wrapper">
                      <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                     </div>
                     <!-- <input type="submit" value="Sign in with google" class="btn-text"> -->
                     <a href="{{url('google-login')}}" class="btn-text" type="submit"><b>Sign in with google</b></a>
                    </div>
                    <a href="signup.html">Create Account</a>
                </form>
            </div>
        </div>
        <div class="search-box">
                <input type="search" placeholder="Search Here....">
        </div>