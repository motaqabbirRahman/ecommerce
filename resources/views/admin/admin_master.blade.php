<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--link to css-->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('admin_style/styles.css')}}">  
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
          <h1><span class="las la-book"></span>Solaris</h1>
        </div>
        <!--Side Bar -->
        <div class="sidebar-menu">
           <ul>
            <li>
                <a href="{{url('/dashboard')}}" class="active"><span class="las la-igloo">
                    <span>Dashboard</span>
                </a>   
            </li>
             <li>
                <a href="" class="las la-users">
                    <span>Customers</span>
                </a>   
            </li>
             <li>
                <a href="" class="las la-shipping-fast">
                    <span>Orders</span>
                </a>   
            </li>
             <li>
                <a href="" class="las la-receipt">
                    <span>Inventory</span>
                </a>   
            </li>
             <li>
                <a href="" class="las la-user-circle">
                    <span>Accountes</span>
                </a>  
            </li>
             <li>
                <a href="{{url('/categories/create')}}" class="las la-user-circle">
                    <span>Add Category</span>
                </a>  
            </li>
            <li>
                <a href="{{url('/categories')}}" class="las la-user-circle">
                    <span>All Category</span>
                </a>  
            </li>
            <li>
                <a href="{{url('/products/create')}}" class="las la-user-circle">
                    <span>Add Product</span>
                </a>  
            </li>
            <li>
                <a href="{{url('/products')}}" class="las la-user-circle">
                    <span>All Product</span>
                </a>  
            </li>
           </ul>
        </div>
    </div>
    <!--  -->
    <div class="main-content">
        <header>
            <div class="user-wrapper">
               <img src="../img/admin.jpg" width="30px" height="30px" alt="">
                <div>
                    <small>
                        {{Session::get('admin_name')}}
                    </small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <h1>3</h1>
                    <span>Customers</span>
                </div>
            </div>
        </main>
    </div>

   @yield('dashboard')

</body>
</html>