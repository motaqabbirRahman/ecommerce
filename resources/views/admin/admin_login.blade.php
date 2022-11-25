<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
     <div class="admin-login-form"> 
                <!-- Form -->
                
                <form action="{{url('/admin-dashboard')}}" method="post">
                    @csrf
                    <h2>Login To Continue</h2>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password"  placeholder="Password" requried>
                    @php
                        $message=Session::get('message');
                        if($message){
                            echo "$message";
                            Session::put('message', null);
                        }
                    @endphp
                    <input type="submit" value="Log In" class="btn">
                   
                </form>
            </div>
</body>
</html>