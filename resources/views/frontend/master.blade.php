<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Newspaper @yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- ICON CSS -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/js/font-awesome/css/font-awesome.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('/frontend')}}/js/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/js/slick/slick.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('/frontend')}}/css/style.css">

    <!-- MODERNIZR -->
    <script src="{{asset('/frontend')}}/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>
<body>


<div class="wrapper">
    @include('frontend.widget.menu')
    
    <div class="container">

        @yield('content')

    </div>


    <footer class="margin-top-30">
        <div class="container">
            <div class="footer-head">
                <div class="row center-content">
                    <div class="col-md-2 col-sm-3">
                        <a href="./index.html">
                            <img src="{{asset('/frontend')}}/img/logo-lite.png" class="img-responsive" alt=""/>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse</p>
                    </div>
                    <div class="col-md-4 col-sm-5">
                        <form class="footer-search">
                            <input type="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="footer-content">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <h5 class="text-white">Life</h5>
                        <ul class="footer-links">
                            <li><a href="#">People</a></li>
                            <li><a href="#">Entertain This!</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Books</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h5 class="text-white">Money</h5>
                        <ul class="footer-links">
                            <li><a href="#">People</a></li>
                            <li><a href="#">Entertain This!</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Books</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h5 class="text-white">Tech</h5>
                        <ul class="footer-links">
                            <li><a href="#">People</a></li>
                            <li><a href="#">Entertain This!</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Books</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h5 class="text-white">Travel</h5>
                        <ul class="footer-links">
                            <li><a href="#">People</a></li>
                            <li><a href="#">Entertain This!</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Books</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h5 class="text-white">Sport</h5>
                        <ul class="footer-links">
                            <li><a href="#">People</a></li>
                            <li><a href="#">Entertain This!</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">TV</a></li>
                            <li><a href="#">Books</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <h5 class="text-white">Follow Us</h5>
                        <ul class="footer-social">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google +</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <p>&copy; 2016 Crucial.com. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        <ul class="list-inline">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Work With Us</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<!-- jQuery -->
<script src="{{asset('/frontend')}}/js/jquery.min.js"></script>
<script src="{{asset('/frontend')}}/js/bootstrap/bootstrap.min.js"></script>
<script src="{{asset('/frontend')}}/js/slick/slick.min.js"></script>
<script src="{{asset('/frontend')}}/js/theme.js"></script>

</body>
</html>
