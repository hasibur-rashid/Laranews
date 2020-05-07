@extends('admin.master')
@section('title', '')
@section('style')
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <h4 class="d-inline">Themes<a href="#code1" data-toggle="collapse"><i class="fa fa-code"
                                                                                  data-toggle="tooltip" title=""
                                                                                  data-original-title="Get code"></i></a>
            </h4>
            <p class="text-muted m-t-0">Choose your appropriate public site theme.</p>
            <div id="code1" class="collapse">
                <div class="highlight">
                                <pre>    <code><span class="nt">&lt;div</span> <span class="na">class=</span><span
                                                class="s">"card"</span> <span class="na">style=</span><span class="s">"width: 20rem;"</span><span
                                                class="nt">&gt;</span>
      <span class="nt">&lt;img</span> <span class="na">class=</span><span class="s">"card-img-top"</span> <span
                                                class="na">src=</span><span class="s">"..."</span> <span
                                                class="na">alt=</span><span class="s">"Card image cap"</span><span
                                                class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"card-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;h4</span> <span class="na">class=</span><span class="s">"card-title"</span><span
                                                class="nt">&gt;</span>Card title<span class="nt">&lt;/h4&gt;</span>
        <span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"card-text"</span><span class="nt">&gt;</span>Some quick example text to build on the card title and make up the bulk of the card's content.<span
                                                class="nt">&lt;/p&gt;</span>
        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span
                                                class="na">class=</span><span class="s">"btn btn-primary"</span><span
                                                class="nt">&gt;</span>Go somewhere<span class="nt">&lt;/a&gt;</span>
      <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span></code>
</pre>
                </div>
            </div>
            <!-- Row -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{asset('/admin/assets/images/big/img1.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- column -->
                <!-- column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{asset('/admin/assets/images/big/img2.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- column -->
                <!-- column -->
                <div class="col-lg-3 col-md-6">
                    <!-- Card -->
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{asset('/admin/assets/images/big/img3.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- column -->
                <!-- column -->
                <div class="col-lg-3 col-md-6 img-responsive">
                    <!-- Card -->
                    <div class="card">
                        <img class="card-img-top img-responsive" src="{{asset('/admin/assets/images/big/img4.jpg')}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <!-- column -->
            </div>
            <!-- Row -->
        </div>
    </div>
@endsection
@section('script')
@stop

                