@extends('frontend.master')
@section('title','Home page')
@section('stylesheet')
@endsection
@section('content')
    <div class="row">

        <div class="col-md-8">

            <!-- HOME SECTION 1 -->
            <div class="padding-top-60">
                <h3 class="margin-bottom-15"><b>World</b></h3>

                <div class="row">
                    <div class="col-md-6">
                        <article class="article-home style-alt">
                            <a href="../17_post_01.html">
                                <div class="article-thumb">
                                    <img src="{{asset('/frontend')}}/img/home/01/1.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                            <div class="post-excerpt">
                                <div class="small-title cat">Travel</div>
                                <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                <div class="meta">
                                    <span>by <a href="#" class="link">Kevin K.</a></span>
                                    <span>on Sep 23, 2016</span>
                                    <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                                </div>
                                <p>After months of courtship, German drug and farm chemical maker Bayer AG has finally
                                    reached an</p>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-6">
                        <div class="mini-posts">
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="{{asset('/frontend')}}/img/home/01/2.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">What You Missed While Not Watching the
                                                    Debate</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="{{asset('/frontend')}}/img/home/01/3.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All
                                                    Over Again</a></h5>
                                            <div class="meta">
                                                <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="{{asset('/frontend')}}/img/home/01/4.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="{{asset('/frontend')}}/img/home/01/5.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">The Funeral of Shimon Peres to Be Held on
                                                    Friday</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // HOME SECTION 1 -->

            <!-- HOME SECTION 2 -->
            <h4 class="margin-bottom-15"><b>Trending Now</b></h4>

            <div class="row padding-bottom-30">
                <div>
                    <div class="col-md-4 col-sm-4">
                        <article class="style2 style-alt">
                            <div class="margin-bottom-15">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/home/01/6.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div>
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <article class="style2 style-alt">
                            <div class="margin-bottom-15">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/home/01/7.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div>
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <article class="style2 style-alt">
                            <div class="margin-bottom-15">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/home/01/8.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div>
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- // HOME SECTION 2 -->

            <!-- HOME SECTION 3 -->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Business</b></h4>

                    <article class="article-home style-alt margin-bottom-10">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/9.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent reports
                                that Salesforce and Google</p>
                        </div>
                    </article>

                    <div class="mini-posts">
                        <article class="style2 style-alt">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="{{asset('/frontend')}}/img/home/01/10.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">What You Missed While Not Watching the
                                                Debate</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="style2 style-alt">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="{{asset('/frontend')}}/img/home/01/11.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over
                                                Again</a></h5>
                                        <div class="meta">
                                            <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Lifestyle</b></h4>

                    <article class="article-home style-alt margin-bottom-10">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/12.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers continues to grow. In addition to recent reports
                                that Salesforce and Google</p>
                        </div>
                    </article>

                    <div class="mini-posts">
                        <article class="style2 style-alt">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="{{asset('/frontend')}}/img/home/01/13.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">What You Missed While Not Watching the
                                                Debate</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="style2 style-alt">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="{{asset('/frontend')}}/img/home/01/14.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over
                                                Again</a></h5>
                                        <div class="meta">
                                            <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- // HOME SECTION 3 -->

        </div>

        @include('frontend.sidebar',['something'])

    </div>

    <div class="row padding-top-40">
        <div class="col-md-8">

            <h3 class="margin-bottom-15"><b>Top Stories</b></h3>
            <article class="style3 style-alt">
                <a href="../17_post_01.html">
                    <div class="overlay overlay-02"></div>
                    <div class="post-thumb">
                        <div class="small-title cat">Travel</div>
                        <div class="post-excerpt">
                            <div class="meta">
                                <span class="date">Sep 22,2016</span>
                            </div>
                            <h3 class="h1 text-white">Uber Launches Self-Driving Vehicles in Pittsburgh</h3>
                            <div class="meta">
                                <span class="author"><img src="{{asset('/frontend')}}/img/avatar/1.jpg" class="img-circle"
                                                          alt=""> by Babs C.</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 5</span>
                                <span class="views"><i class="fa fa-eye"></i> 682 views</span>
                            </div>
                        </div>
                        <img src="{{asset('/frontend')}}/img/home/01/15.jpg" class="img-responsive" alt="">
                    </div>
                </a>
            </article>

            <article class="style2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/16.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h3><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h3>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers addition to recent reports that Salesforce and
                                Google are interested in possibly buying the real-time news</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="style2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/17.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h3><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h3>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers addition to recent reports that Salesforce and
                                Google are interested in possibly buying the real-time news</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="style2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/18.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h3><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h3>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers addition to recent reports that Salesforce and
                                Google are interested in possibly buying the real-time news</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="style2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/19.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h3><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h3>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers addition to recent reports that Salesforce and
                                Google are interested in possibly buying the real-time news</p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="style2 style-alt">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/20.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h3><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h3>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                            <p>The list of potential Twitter acquirers addition to recent reports that Salesforce and
                                Google are interested in possibly buying the real-time news</p>
                        </div>
                    </div>
                </div>
            </article>

        </div>
        <div class="col-sm-4">
            <div class="side-widget">
                <h4>Most Shared</h4>

                <div class="mini-posts">
                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/1.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5>
                                        <a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/2.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5>
                                        <a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over
                                            Again</a>
                                    </h5>
                                    <div class="meta">
                                    <span class="comment">
                                        <i class="fa fa-comment-o"></i> 18</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/3.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5>
                                        <a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/4.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5>
                                        <a href="./17_post_01.html">The Funeral of Shimon Peres to Be Held on Friday</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/1.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5>
                                        <a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="side-widget">
                <h4>Trending</h4>

                <ul class="trending-rating margin-top-20 margin-bottom-20">
                    <li>
                        <em>9.4</em>
                        <p>
                            <a href="#">Yahoo Hack Could Still Have Wide-Reaching Consequences</a>
                        </p>
                    </li>
                    <li>
                        <em>9.0</em>
                        <p>
                            <a href="#">Googles New App Wants to Be Your Personal Travel Guide</a>
                        </p>
                    </li>
                    <li>
                        <em>8.8</em>
                        <p>
                            <a href="#">What You Missed While Not Watching the Debate</a>
                        </p>
                    </li>
                    <li>
                        <em>8.2</em>
                        <p>
                            <a href="#">New Doodle Celebrates Google Turning 18 All Over Again</a>
                        </p>
                    </li>
                    <li>
                        <em>7.9</em>
                        <p>
                            <a href="#">We Must Move Forward on Clean Power Plan</a>
                        </p>
                    </li>

                </ul>

            </div>

            <div class="side-widget">
                <h4>Tags</h4>
                <div class="tags">
                    <a href="#">Fashion</a>
                    <a href="#">Shoes</a>
                    <a href="#">Entertainment</a>
                    <a href="#">Finance</a>
                    <a href="#">Mobile</a>

                    <a href="#">Relationship</a>
                    <a href="#">Football</a>
                    <a href="#">Health</a>
                    <a href="#">Inspiration</a>

                    <a href="#">Fitness</a>
                    <a href="#">Parenting</a>
                    <a href="#">Food</a>
                    <a href="#">Restaurants</a>
                    <a href="#">Beauty</a>

                    <a href="#">Interiors</a>
                    <a href="#">People</a>
                </div>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8 padding-bottom-40">

            <div class="row padding-top-30">
                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Politics</b></h4>

                    <article class="article-home style-alt margin-bottom-5">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/23.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                        </div>
                    </article>

                    <div class="list-posts">
                        <a href="#">The Funeral of Shimon Peres to Be Held on Friday</a>
                        <a href="#">What Boomers Have Learned About Retirement Saving</a>
                        <a href="#">Best Affordable All-Inclusive Resorts for Vacation</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Sports</b></h4>

                    <article class="article-home style-alt margin-bottom-5">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/24.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                        </div>
                    </article>

                    <div class="list-posts">
                        <a href="#">The Funeral of Shimon Peres to Be Held on Friday</a>
                        <a href="#">What Boomers Have Learned About Retirement Saving</a>
                        <a href="#">Best Affordable All-Inclusive Resorts for Vacation</a>
                    </div>
                </div>
            </div>

            <div class="row padding-top-50">
                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Politics</b></h4>

                    <article class="article-home style-alt margin-bottom-5">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/25.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                        </div>
                    </article>

                    <div class="list-posts">
                        <a href="#">The Funeral of Shimon Peres to Be Held on Friday</a>
                        <a href="#">What Boomers Have Learned About Retirement Saving</a>
                        <a href="#">Best Affordable All-Inclusive Resorts for Vacation</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Sports</b></h4>

                    <article class="article-home style-alt margin-bottom-5">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/26.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                        </div>
                    </article>

                    <div class="list-posts">
                        <a href="#">The Funeral of Shimon Peres to Be Held on Friday</a>
                        <a href="#">What Boomers Have Learned About Retirement Saving</a>
                        <a href="#">Best Affordable All-Inclusive Resorts for Vacation</a>
                    </div>
                </div>
            </div>

            <div class="row padding-top-50">
                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Politics</b></h4>

                    <article class="article-home style-alt margin-bottom-5">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/27.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                        </div>
                    </article>

                    <div class="list-posts">
                        <a href="#">The Funeral of Shimon Peres to Be Held on Friday</a>
                        <a href="#">What Boomers Have Learned About Retirement Saving</a>
                        <a href="#">Best Affordable All-Inclusive Resorts for Vacation</a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <h4 class="margin-bottom-15"><b>Sports</b></h4>

                    <article class="article-home style-alt margin-bottom-5">
                        <a href="../17_post_01.html">
                            <div class="article-thumb">
                                <img src="{{asset('/frontend')}}/img/home/01/28.jpg" class="img-responsive" alt="">
                            </div>
                        </a>
                        <div class="post-excerpt">
                            <div class="small-title cat">Travel</div>
                            <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                            <div class="meta">
                                <span>by <a href="#" class="link">Kevin K.</a></span>
                                <span>on Sep 23, 2016</span>
                                <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                            </div>
                        </div>
                    </article>

                    <div class="list-posts">
                        <a href="#">The Funeral of Shimon Peres to Be Held on Friday</a>
                        <a href="#">What Boomers Have Learned About Retirement Saving</a>
                        <a href="#">Best Affordable All-Inclusive Resorts for Vacation</a>
                    </div>
                </div>
            </div>

        </div>

        <aside class="col-md-4 padding-top-40">

            <div class="side-widget">
                <h4>Most Shared</h4>

                <div class="mini-posts">
                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/1.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/2.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over
                                            Again</a></h5>
                                    <div class="meta">
                                        <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/3.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a></h5>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/4.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">The Funeral of Shimon Peres to Be Held on Friday</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="style2">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="{{asset('/frontend')}}/img/side/01/1.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <div class="post-excerpt no-padding">
                                    <div class="meta">
                                        <span>Sep 19, 2016</span>
                                    </div>
                                    <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            <div class="side-widget">
                <h4>Trending</h4>

                <ul class="trending-rating margin-top-20 margin-bottom-20">
                    <li>
                        <em>9.4</em>
                        <p><a href="#">Yahoo Hack Could Still Have Wide-Reaching Consequences</a></p>
                    </li>
                    <li>
                        <em>9.0</em>
                        <p><a href="#">Googles New App Wants to Be Your Personal Travel Guide</a></p>
                    </li>
                    <li>
                        <em>8.8</em>
                        <p><a href="#">What You Missed While Not Watching the Debate</a></p>
                    </li>
                    <li>
                        <em>8.2</em>
                        <p><a href="#">New Doodle Celebrates Google Turning 18 All Over Again</a></p>
                    </li>
                    <li>
                        <em>7.9</em>
                        <p><a href="#">We Must Move Forward on Clean Power Plan</a></p>
                    </li>

                </ul>

            </div>

            <div class="side-widget">
                <h4>Tags</h4>
                <div class="tags">
                    <a href="#">Fashion</a>
                    <a href="#">Shoes</a>
                    <a href="#">Entertainment</a>
                    <a href="#">Finance</a>
                    <a href="#">Mobile</a>

                    <a href="#">Relationship</a>
                    <a href="#">Football</a>
                    <a href="#">Health</a>
                    <a href="#">Inspiration</a>

                    <a href="#">Fitness</a>
                    <a href="#">Parenting</a>
                    <a href="#">Food</a>
                    <a href="#">Restaurants</a>
                    <a href="#">Beauty</a>

                    <a href="#">Interiors</a>
                    <a href="#">People</a>
                </div>


            </div>
        </aside>

    </div>
@endsection

@section('scripts')
@endsection
