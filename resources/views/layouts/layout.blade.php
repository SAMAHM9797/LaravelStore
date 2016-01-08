<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bargain Basement</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="{{asset('js/html5shiv.js')}}"></script>
        <script src="{{asset('js/respond.min.js')}}"></script>
        <![endif]-->       

    </head><!--/head-->

    <body>

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> {{Auth::check() ? Auth::user()->name : 'Account'}} </a></li>
                                <li><a href="#"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> Cart </a></li>
                                <li><a href="{{Auth::check() ? url('/logout') : url('auth/login')}}"><i class="fa fa-lock"></i> {{Auth::check() ? 'Logout' : 'Login'}}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->




        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('products')}}">Products</a></li>
                                <li><a href="{{url('blog')}}" >Blog</a></li>
                                <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div><!--/header-bottom-->

        
    </header><!--/header-->

    @yield('content')




    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('js/price-range.js')}}"></script>
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
