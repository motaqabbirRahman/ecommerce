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
    @yield('product_content')
  
    <!-- Product Section Ends -->
    @yield('signup') 
    @yield('content')
    <!-- js -->
    <script>
              (function (window, document) {
                     var loader = function () {
                         var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                     script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7);
                         tag.parentNode.insertBefore(script, tag);
                 };

                     window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
                 })(window, document);
    </script>
   <script src="{{('js/main.js')}}"></script>
 </body>
<!-- @include('frontend.footer')  -->