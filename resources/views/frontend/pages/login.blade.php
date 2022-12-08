@extends('frontend.master')
@section('content')
            <!-- login-form -->
            <div class="login-form">
                <!-- Form -->
            <!-- <form action=""> -->
                <div class = "form" > 
                    <h2>Login To Continue</h2>
                    <form action="{{url('/customer-login')}}" method="post">
                     @csrf
                        <input type="email" name="email" placeholder="Email" required><br>...
                        <input type="password" name="password" placeholder="Password" requried><br>...
                        <input type="submit" value="Log In" class="btn">
                   </form> 
                   <a href="#">Forget Passsword?</a>
                    <!-- google sign-up -->
                    <div class="google-btn">
                     <div class="google-icon-wrapper">
                      <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                     </div>
                     <!-- <input type="submit" value="Sign in with google" class="btn-text"> -->
                     <a href="{{url('/auth/google/redirect')}}" class="gbtn-text" type="submit"><b>Sign in with google</b></a>
                    </div>
                    <a href="{{url('signup')}}">Register Account</a>
                    </div>
                  </div>
                <!-- </form> -->

@endsection