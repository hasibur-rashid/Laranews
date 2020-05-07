@php
$categories = App\Model\Category::orderBy('category_name')->where('category_parent_id',null)->get();
@endphp

<header class="header header-megamenu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="search-bar">
                <input type="search" placeholder="Type search text here...">
                <div class="search-close"><i class="fa fa-times"></i></div>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="./index.html"><img src="{{asset('/frontend')}}/img/logo.png" class="img-responsive" alt=""/></a>
            </div>
            <div class="search-trigger pull-right"></div>
            <div class="login pull-right"></div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-v1">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="dropdown dropdown-v1">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span
                                        class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            @if(!empty($categories))
                                @foreach($categories as $category)
                                    <li><a href="{{route('categoryNews',['id'=>$category->id,'category_slug' => $category->category_slug])}}">{{$category->category_name}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    {{--  <li class="dropdown dropdown-v1">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Posts <span
                                        class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./17_post_01.html">Post style - 01</a></li>
                            <li><a href="./18_post_02.html">Post Style - 02</a></li>
                            <li><a href="./19_post_03.html">Post Style - 03</a></li>
                            <li><a href="./20_post_04.html">Post Style - 04</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-v1">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span
                                        class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="./22_headers.html">Headers</a></li>
                            <li><a href="./23_home_sidemenu.html">Header - Sidemenu</a></li>
                            <li><a href="./21_footers.html">Footer</a></li>
                        </ul>
                    </li>  --}}

                    {{--  <li class="dropdown megamenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lifestyle <span
                                        class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h5>Celebrity Life</h5>
                                        <a href="#">Celebrities Gone Bad</a>
                                        <a href="#">Hook Ups & Break Ups</a>
                                        <a href="#">Celebrity Selfies</a>
                                        <a href="#">Celebrity Kids</a>
                                        <a href="#">Royals</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>TV & Radio</h5>
                                        <a href="#">TV Shows</a>
                                        <a href="#">Reality TV</a>
                                        <a href="#">TV Ratings</a>
                                        <a href="#">Radio</a>
                                        <a href="#">Morning Shows</a>
                                        <a href="#">Current Affairs</a>
                                        <a href="#">Flashbacks</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Movies</h5>
                                        <a href="#">New Movies</a>
                                        <a href="#">Movie Trailers</a>
                                        <a href="#">Upcoming Movies</a>
                                        <a href="#">Box Office</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Music</h5>
                                        <a href="#">Music Videos</a>
                                        <a href="#">Music Festivals</a>
                                        <a href="#" class="last">Tours</a>
                                        <h5>Awards</h5>
                                        <a href="#">Oscars</a>
                                        <a href="#">MTV</a>
                                        <a href="#">Emmys</a>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Books</h5>
                                        <a href="#">Books</a>
                                        <a href="#">Magazines</a>
                                        <h5>Celebrity Style</h5>
                                        <a href="#">Red Carpet</a>
                                        <a href="#">Wardrobe Malfunction</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>  --}}
                    <li class="dropdown megamenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <span
                                        class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="header-post">
                                            <a href="#">
                                                <div class="hp-thumb">
                                                    <img src="{{asset('/frontend')}}/img/header/1.jpg" class="img-full" alt="" />
                                                </div>
                                            </a>
                                            <date>Sep 25, 2016</date>
                                            <h4><a href="#">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent
                                                reports that Salesforce and</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="header-post">
                                            <a href="#">
                                                <div class="hp-thumb">
                                                    <div class="hp-overlay">
                                                        <img src="{{asset('/frontend')}}/img/header/gallery.png" alt="" />
                                                        <span>12 Photos</span>
                                                    </div>
                                                    <img src="{{asset('/frontend')}}/img/header/2.jpg" class="img-full" alt="" />
                                                </div>
                                            </a>
                                            <date>Sep 25, 2016</date>
                                            <h4><a href="#">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent
                                                reports that Salesforce and</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="header-post">
                                            <a href="#">
                                                <div class="hp-thumb">
                                                    <img src="{{asset('/frontend')}}/img/header/3.jpg" class="img-full" alt="" />
                                                </div>
                                            </a>
                                            <date>Sep 25, 2016</date>
                                            <h4><a href="#">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent
                                                reports that Salesforce and</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="header-post">
                                            <a href="#">
                                                <div class="hp-thumb">
                                                    <img src="{{asset('/frontend')}}/img/header/4.jpg" class="img-full" alt="" />
                                                </div>
                                            </a>
                                            <date>Sep 25, 2016</date>
                                            <h4><a href="#">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent
                                                reports that Salesforce and</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="header-post">
                                            <a href="#">
                                                <div class="hp-thumb">
                                                    <div class="hp-overlay">
                                                        <img src="{{asset('/frontend')}}/img/header/play.png" alt="" />
                                                        <span>15:30</span>
                                                    </div>
                                                    <img src="{{asset('/frontend')}}/img/header/5.jpg" class="img-full" alt="" />
                                                </div>
                                            </a>
                                            <date>Sep 25, 2016</date>
                                            <h4><a href="#">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent
                                                reports that Salesforce and</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    {{--  <li class="dropdown megamenu menu-tabs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Travel <span
                                        class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-3 no-padding">
                                        <ul class="tabs-menu">
                                            <li class="current"><a href="#tab-1">New Movies</a></li>
                                            <li><a href="#tab-2">Movie Trailers</a></li>
                                            <li><a href="#tab-3">Upcoming Movies</a></li>
                                            <li><a href="#tab-4">Box Office</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="tab">
                                            <div id="tab-1" class="tab-contents">
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/gallery.png" alt="" />
                                                                    <span>12 Photos</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/2.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/3.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/4.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/play.png" alt="" />
                                                                    <span>15:30</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/5.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-2" class="tab-contents">
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/gallery.png" alt="" />
                                                                    <span>12 Photos</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/2.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/3.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/4.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/play.png" alt="" />
                                                                    <span>15:30</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/5.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-3" class="tab-contents">
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/gallery.png" alt="" />
                                                                    <span>12 Photos</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/2.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/3.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/4.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/play.png" alt="" />
                                                                    <span>15:30</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/5.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-4" class="tab-contents">
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/gallery.png" alt="" />
                                                                    <span>12 Photos</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/2.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/3.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <img src="{{asset('/frontend')}}/img/header/4.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="header-post">
                                                        <a href="#">
                                                            <div class="hp-thumb">
                                                                <div class="hp-overlay">
                                                                    <img src="{{asset('/frontend')}}/img/header/play.png" alt="" />
                                                                    <span>15:30</span>
                                                                </div>
                                                                <img src="{{asset('/frontend')}}/img/header/5.jpg" class="img-full" alt="" />
                                                            </div>
                                                        </a>
                                                        <date>Sep 25, 2016</date>
                                                        <h4><a href="#">Twitter Stock Surges On Disney Takeover
                                                                    Rumor</a></h4>
                                                        <p>The list of potential Twitter acquirers continues to grow. In addition
                                                            to recent reports that Salesforce and
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>  --}}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</header>