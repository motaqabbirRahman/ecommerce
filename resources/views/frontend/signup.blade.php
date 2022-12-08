@extends('frontend.master')

@section('signup')
      <body>
             <div class="signup-form">
                <!-- Form -->
                 <div class="form">
                    <h2>Create Account</h2>><br>
                    <form action="{{url('/customer-registration')}}" method="post">
                    @csrf
                        <input type="email" name="email" placeholder="Email" required><br>-
                        <input type="password" name="password" placeholder="Password" requried>-
                        <input type="submit" value="Sign Up" class="btn">
                    </form>
                     <!-- google sign-up -->
                     <div class="google-btn">
                     <div class="google-icon-wrapper">
                      <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                     </div>
                     <!-- <input type="submit" value="Sign in with google" class="btn-text"> -->
                     <a href="{{url('googlelogin')}}" class="gbtn-text" type="submit"><b>Sign in with google</b></a>
                    </div>
            </div>
       </body>
@endsection