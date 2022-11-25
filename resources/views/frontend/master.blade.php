<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solaris</title>
    <!--link to css-->
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!--Search Icon-->
    
    <!--Fav Icon-->
    <link rel="shortcut icon" href="img/books.png" type="image/x-icon">
 
</head>
<body>
    <!-- Header Starts -->
 <header>
    @include('frontend.header')
 </header>
    <!-- Header Ends -->
    <!-- Product Section Starts -->
    @yield('product')
    <!-- Product Section Ends -->
    
    <!-- js -->
   <script src="{{('js/main.js')}}"></script>
 </body>
 