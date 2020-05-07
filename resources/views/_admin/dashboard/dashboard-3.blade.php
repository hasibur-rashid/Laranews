@extends('admin.master')
@section('title', 'Dashboard-3')
@section('style')
    <link href="{{asset('/admin/assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('/admin/assets/node_modules/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('/admin/assets/node_modules/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
    <!-- Vector CSS -->
    <link href="{{asset('/admin/assets/node_modules/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
    <link href="{{asset('/admin/css/pages/dashboard3.css')}}" rel="stylesheet">
@stop
@section('content')
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-success"><i class="ti-wallet"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">$18090</h3>
                            <h5 class="text-muted m-b-0">Income</h5></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-info"><i class="ti-user"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">2690</h3>
                            <h5 class="text-muted m-b-0">Users</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-primary"><i class="ti-calendar"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">20 march</h3>
                            <h5 class="text-muted m-b-0">My birthday</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round align-self-center round-danger"><i class="ti-settings"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0">6540</h3>
                            <h5 class="text-muted m-b-0">pending</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Campaign -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex m-b-30">
                        <h5 class="card-title m-b-0 align-self-center">Newsletter Campaign</h5>
                        <div class="ml-auto align-self-center">
                            <ul class="list-inline font-12">
                                <li><i class="fa fa-circle text-success"></i> Open Rate</li>
                                <li><i class="fa fa-circle text-info"></i> Payment</li>
                            </ul>
                        </div>
                    </div>
                    <div class="campaign ct-charts"></div>
                    <div class="row text-center">
                        <div class="col-lg-4 col-md-4 m-t-20"><h2 class="m-b-0 font-light">5098</h2>
                            <small>Total Sent</small>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20"><h2 class="m-b-0 font-light">4156</h2>
                            <small>Mail Open Rate</small>
                        </div>
                        <div class="col-lg-4 col-md-4 m-t-20"><h2 class="m-b-0 font-light">1369</h2>
                            <small>Click Rate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex m-b-30 no-block">
                        <h5 class="card-title m-b-0 align-self-center">Our Visitors</h5>
                        <div class="ml-auto">
                            <select class="custom-select b-0">
                                <option selected="">Today</option>
                                <option value="1">Tomorrow</option>
                            </select>
                        </div>
                    </div>
                    <div id="visitor" style="height:260px; width:100%;"></div>
                    <ul class="list-inline m-t-30 text-center font-12">
                        <li><i class="fa fa-circle text-purple"></i> Tablet</li>
                        <li><i class="fa fa-circle text-success"></i> Desktops</li>
                        <li><i class="fa fa-circle text-info"></i> Mobile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Campaign -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Info box -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Today's Schedule and sales overview -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Today's Schedule</h5>
                    <h6 class="card-subtitle">check out your daily schedule</h6>
                    <div class="steamline m-t-40">
                        <div class="sl-item">
                            <div class="sl-left bg-success"><i class="ti-user"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Meeting today <span class="sl-date"> 5pm</span></div>
                                <div class="desc">you can write anything</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fa fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-medium">Send documents to Clark</div>
                                <div class="desc">Lorem Ipsum is simply</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"><img class="img-circle" alt="user" src="{{asset('/admin')}}/assets/images/users/1.jpg">
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">John Doe <span class="sl-date"> 5pm</span></div>
                                <div class="desc">Call today with gohn doe</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"><img class="img-circle" alt="user" src="{{asset('/admin')}}/assets/images/users/2.jpg">
                            </div>
                            <div class="sl-right">
                                <div class="font-medium">Go to the Doctor <span class="sl-date">5 minutes ago</span>
                                </div>
                                <div class="desc">Contrary to popular belief</div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left"><img class="img-circle" alt="user" src="{{asset('/admin')}}/assets/images/users/3.jpg">
                            </div>
                            <div class="sl-right">
                                <div><a href="#">Tiger Sroff</a> <span class="sl-date">5 minutes ago</span></div>
                                <div class="desc">Approve meeting with tiger
                                    <br><a href="javascript:void(0)"
                                           class="btn m-t-10 m-r-5 btn-rounded btn-outline-success">Apporve</a> <a
                                            href="javascript:void(0)" class="btn m-t-10 btn-rounded btn-outline-danger">Refuse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex">
                        <div>
                            <h5 class="card-title">Sales Overview</h5>
                            <h6 class="card-subtitle">Check the monthly sales </h6>
                        </div>
                        <div class="ml-auto">
                            <select class="custom-select b-0">
                                <option selected="">January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-6">
                            <h2 class="m-b-0">March 2017</h2>
                            <h4 class="font-light m-t-0">Report for this month</h4></div>
                        <div class="col-6 align-self-center display-6 text-info text-right">$3,690</div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>NAME</th>
                            <th>STATUS</th>
                            <th>DATE</th>
                            <th>PRICE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="txt-oflo">Elite admin</td>
                            <td><span class="label label-success label-rouded">SALE</span></td>
                            <td class="txt-oflo">April 18, 2017</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td class="txt-oflo">Real Homes WP Theme</td>
                            <td><span class="label label-info label-rouded">EXTENDED</span></td>
                            <td class="txt-oflo">April 19, 2017</td>
                            <td><span class="text-info">$1250</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td class="txt-oflo">Ample Admin</td>
                            <td><span class="label label-info label-rouded">EXTENDED</span></td>
                            <td class="txt-oflo">April 19, 2017</td>
                            <td><span class="text-info">$1250</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td class="txt-oflo">Medical Pro WP Theme</td>
                            <td><span class="label label-danger label-rouded">TAX</span></td>
                            <td class="txt-oflo">April 20, 2017</td>
                            <td><span class="text-danger">-$24</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td class="txt-oflo">Hosting press html</td>
                            <td><span class="label label-warning label-rouded">SALE</span></td>
                            <td class="txt-oflo">April 21, 2017</td>
                            <td><span class="text-success">$24</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td class="txt-oflo">Digital Agency PSD</td>
                            <td><span class="label label-success label-rouded">SALE</span></td>
                            <td class="txt-oflo">April 23, 2017</td>
                            <td><span class="text-danger">-$14</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td class="txt-oflo">Helping Hands WP Theme</td>
                            <td><span class="label label-warning label-rouded">member</span></td>
                            <td class="txt-oflo">April 22, 2017</td>
                            <td><span class="text-success">$64</span></td>
                        </tr>
                        <tr>
                            <td class="text-center">8</td>
                            <td class="txt-oflo">Ample Admin</td>
                            <td><span class="label label-info label-rouded">EXTENDED</span></td>
                            <td class="txt-oflo">April 19, 2017</td>
                            <td><span class="text-info">$1250</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    <!-- ============================================================== -->
    <!-- Sales Chart and browser state-->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-6">
            <div class="card o-income">
                <div class="card-body">
                    <h5 class="card-title m-b-30">Income of the Year</h5>
                    <div id="income" style="height:260px; width:100%;"></div>
                    <ul class="list-inline m-t-30 text-center font-12">
                        <li><i class="fa fa-circle text-success"></i> Growth</li>
                        <li><i class="fa fa-circle text-info"></i> Net</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Orders of the Month</h5>
                    <div id="usa" style="height: 275px"></div>
                    <ul class="list-inline m-t-30 text-center font-12">
                        <li><i class="fa fa-circle text-success"></i> 268</li>
                        <li><i class="fa fa-circle text-info"></i> 198</li>
                        <li><i class="fa fa-circle text-warning"></i> 947</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Sales Chart -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Projects of the Month -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="card-title">Projects of the Month</h5>
                        </div>
                        <div class="ml-auto">
                            <select class="custom-select b-0">
                                <option selected="">January</option>
                                <option value="1">February</option>
                                <option value="2">March</option>
                                <option value="3">April</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead>
                            <tr>
                                <th colspan="2">Assigned</th>
                                <th>Name</th>
                                <th>Priority</th>
                                <th>Budget</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td style="width:50px;"><span class="round">S</span></td>
                                <td>
                                    <h6>Sunil Joshi</h6>
                                    <small class="text-muted">Web Designer</small>
                                </td>
                                <td>Elite Admin</td>
                                <td><span class="label label-success label-rounded">Low</span></td>
                                <td>$3.9K</td>
                            </tr>
                            <tr class="active">
                                <td><span class="round"><img src="{{asset('/admin')}}/assets/images/users/2.jpg" alt="user"
                                                             width="50"></span></td>
                                <td>
                                    <h6>Andrew</h6>
                                    <small class="text-muted">Project Manager</small>
                                </td>
                                <td>Real Homes</td>
                                <td><span class="label label-info label-rounded">Medium</span></td>
                                <td>$23.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-success">B</span></td>
                                <td>
                                    <h6>Bhavesh patel</h6>
                                    <small class="text-muted">Developer</small>
                                </td>
                                <td>MedicalPro Theme</td>
                                <td><span class="label label-primary label-rounded">High</span></td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-warning">M</span></td>
                                <td>
                                    <h6>Micheal Doe</h6>
                                    <small class="text-muted">Content Writer</small>
                                </td>
                                <td>Helping Hands</td>
                                <td><span class="label label-success label-rounded">High</span></td>
                                <td>$12.9K</td>
                            </tr>
                            <tr>
                                <td><span class="round round-danger">N</span></td>
                                <td>
                                    <h6>Johnathan</h6>
                                    <small class="text-muted">Graphic</small>
                                </td>
                                <td>Digital Agency</td>
                                <td><span class="label label-info label-rounded">High</span></td>
                                <td>$2.6K</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4">
            <div class="card">
                <div class="up-img" style="background-image:url(../assets/images/big/img1.jpg)"></div>
                <div class="card-body">
                    <h5 class=" card-title">Business development of rules</h5>
                    <span class="label label-info label-rounded">Technology</span>
                    <p class="m-b-0 m-t-20">Titudin venenatis ipsum aciat. Vestibu ullamer quam. nenatis ipsum ac
                        feugiat. Ibulum ullamcorper.</p>
                    <div class="d-flex m-t-20">
                        <a class="link" href="javascript:void(0)">Read more</a>
                        <div class="ml-auto align-self-center">
                            <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart-o"></i></a>
                            <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Projects of the Month -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Activity and To do list -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <h4 class="card-title">Activity</h4>
                        <!-- <span class="badge badge-success">9</span> -->
                        <div class="btn-group ml-auto m-t-10">
                            <a href="JavaScript:void(0)" class="sl-icon-options-vertical link" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="activity-box">
                    <div class="card-body">
                        <!-- Activity item-->
                        <div class="activity-item">
                            <div class="round m-r-20"><img src="{{asset('/admin')}}/assets/images/users/2.jpg" alt="user" width="50">
                            </div>
                            <div class="m-t-10">
                                <h5 class="m-b-0 font-medium">Mark Freeman <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span>
                                </h5>
                                <h6 class="text-muted">uploaded this file </h6>
                                <table class="table vm b-0 m-b-0">
                                    <tbody>
                                    <tr>
                                        <td class="m-r-10 b-0"><img src="{{asset('/admin')}}/assets/images/icon/zip.png" alt="user"></td>
                                        <td class="b-0">
                                            <h5 class="m-b-0 font-medium ">Homepage.zip</h5>
                                            <h6>54 MB</h6></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Activity item-->
                        <!-- Activity item-->
                        <div class="activity-item">
                            <div class="round m-r-20"><img src="{{asset('/admin')}}/assets/images/users/3.jpg" alt="user" width="50">
                            </div>
                            <div class="m-t-10">
                                <h5 class="m-b-5 font-medium">Emma Smith <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span>
                                </h5>
                                <h6 class="text-muted">joined projectname, and invited <a href="javascript:void(0)">@maxcage,
                                        @maxcage, @maxcage, @maxcage, @maxcage,+3</a></h6>
                                <span class="image-list m-t-20">
                                                <a href="javascript:void(0)"><img src="{{asset('/admin')}}/assets/images/users/1.jpg"
                                                                                  class="img-circle" alt="user"
                                                                                  width="50"></a>
                                                <a href="javascript:void(0)"><img src="{{asset('/admin')}}/assets/images/users/2.jpg"
                                                                                  class="img-circle" alt="user"
                                                                                  width="50"></a>
                                                <a href="javascript:void(0)"><span class="round round-warning">C</span></a>
                                            <a href="javascript:void(0)"><span class="round round-danger">D</span></a>
                                            <a href="javascript:void(0)">+3</a>
                                            </span>
                            </div>
                        </div>
                        <!-- Activity item-->
                        <!-- Activity item-->
                        <div class="activity-item">
                            <div class="round m-r-20"><img src="{{asset('/admin')}}/assets/images/users/4.jpg" alt="user" width="50">
                            </div>
                            <div class="m-t-10">
                                <h5 class="m-b-0 font-medium">David R. Jones <span class="text-muted font-14 m-l-10">| &nbsp; 9:30 PM, July 13th</span>
                                </h5>
                                <h6 class="text-muted">uploaded this file </h6>
                                <span>
                                                <a href="javascript:void(0)" class="m-r-10"><img
                                                            src="{{asset('/admin')}}/assets/images/big/img1.jpg" alt="user"
                                                            width="60"></a>
                                                <a href="javascript:void(0)" class="m-r-10"><img
                                                            src="{{asset('/admin')}}/assets/images/big/img2.jpg" alt="user"
                                                            width="60"></a>
                                            </span>
                            </div>
                        </div>
                        <!-- Activity item-->
                        <!-- Activity item-->
                        <div class="activity-item">
                            <div class="round m-r-20"><img src="{{asset('/admin')}}/assets/images/users/6.jpg" alt="user" width="50">
                            </div>
                            <div class="m-t-10">
                                <h5 class="m-b-5 font-medium">David R. Jones <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span>
                                </h5>
                                <h6 class="text-muted">Commented on<a href="javascript:void(0)">Test Project</a></h6>
                                <p class="m-b-0">It has survived not only five centuries, but also the leap into
                                    unchanged.</p>
                            </div>
                        </div>
                        <!-- Activity item-->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h4 class="card-title">To Do list</h4>
                        </div>
                        <div class="ml-auto">
                            <button class="pull-right btn btn-circle btn-success" data-toggle="modal"
                                    data-target="#myModal"><i class="ti-plus"></i></button>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- To do list widgets -->
                    <!-- ============================================================== -->
                    <div class="to-do-widget m-t-20">
                        <!-- .modal for add task -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Task</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label>Task name</label>
                                                <input type="text" class="form-control" placeholder="Enter Task Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Assign to</label>
                                                <select class="custom-select form-control pull-right">
                                                    <option selected="">Sachin</option>
                                                    <option value="1">Sehwag</option>
                                                    <option value="2">Pritam</option>
                                                    <option value="3">Alia</option>
                                                    <option value="4">Varun</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Submit
                                        </button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                            <li class="list-group-item" data-role="task">
                                <div class="checkbox checkbox-info m-b-10">
                                    <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                    <label for="inputSchedule" class=""> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span>
                                        <span class="label label-rounded label-danger pull-right">Today</span></label>
                                </div>
                                <ul class="assignedto">
                                    <li><img src="{{asset('/admin')}}/assets/images/users/1.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Steave"></li>
                                    <li><img src="{{asset('/admin')}}/assets/images/users/2.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Jessica"></li>
                                    <li><img src="{{asset('/admin')}}/assets/images/users/3.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li><img src="{{asset('/admin')}}/assets/images/users/4.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                            <li class="list-group-item" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                    <label for="inputBook" class=""> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span><span
                                                class="label label-primary label-rounded pull-right">1 week </span>
                                    </label>
                                </div>
                                <div class="item-date"> 26 jun 2017</div>
                            </li>
                            <li class="list-group-item" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                    <label for="inputCall" class=""> <span>Give Purchase report to</span> <span
                                                class="label label-info label-rounded pull-right">Yesterday</span>
                                    </label>
                                </div>
                                <ul class="assignedto">
                                    <li><img src="{{asset('/admin')}}/assets/images/users/3.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li><img src="{{asset('/admin')}}/assets/images/users/4.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                            <li class="list-group-item" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                    <label for="inputForward" class=""> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span>
                                        <span class="label label-warning label-rounded pull-right">2 weeks</span>
                                    </label>
                                </div>
                                <div class="item-date"> 26 jun 2017</div>
                            </li>
                            <li class="list-group-item" data-role="task">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" id="inputCall2" name="inputCheckboxesCall2">
                                    <label for="inputCall2" class=""> <span>Give Purchase report to</span> <span
                                                class="label label-info label-rounded pull-right">Yesterday</span>
                                    </label>
                                </div>
                                <ul class="assignedto">
                                    <li><img src="{{asset('/admin')}}/assets/images/users/3.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Priyanka"></li>
                                    <li><img src="{{asset('/admin')}}/assets/images/users/4.jpg" alt="user" data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Selina"></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Comment - chats -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
@endsection
@section('script')
@stop

                