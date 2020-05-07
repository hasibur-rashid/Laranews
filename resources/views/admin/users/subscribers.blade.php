@extends('admin.master')
@section('title', 'Users')
@section('style')
    <style>
        .img-circle {
            border-radius: 50%;
        }

    </style>
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Subscriber</h4>
                                <h6>Manage your news application subscriber</h6>
                                <div class="row m-t-40">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-info text-center">
                                                <h1 class="font-light text-white">2,064</h1>
                                                <h6 class="text-white">Total User</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-primary text-center">
                                                <h1 class="font-light text-white">1,738</h1>
                                                <h6 class="text-white">Subscribers</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-success text-center">
                                                <h1 class="font-light text-white">1100</h1>
                                                <h6 class="text-white">Last Active</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card">
                                            <div class="box bg-dark text-center">
                                                <h1 class="font-light text-white">964</h1>
                                                <h6 class="text-white">Pending</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <br>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table table-bordered table-striped"
                                           data-page-size="10">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Last Seen</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1011</td>
                                            <td>
                                                <a href="javascript:void(0)"><img style="" width="50px;"
                                                                                  src="{{asset('/admin')}}/assets/images/users/1.jpg"
                                                                                  alt="user"
                                                                                  class="img-circle"/></a>
                                            </td>
                                            <td>Hasib</td>
                                            <td>genelia@gmail.com</td>
                                            <td><span class="label label-warning">New</span></td>
                                            <td>14-10-2017</td>
                                            <td>14-10-2017</td>
                                            <td>
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"
                                                   aria-describedby="tooltip98153">
                                                    <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close">
                                                    <i class="fa fa-close text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1224</td>
                                            <td>
                                                <a href="javascript:void(0)"><img style="" width="50px;"
                                                                                  src="{{asset('/admin')}}/assets/images/users/2.jpg"
                                                                                  alt="user"
                                                                                  class="img-circle"/></a>
                                            </td>
                                            <td>Ritesh Deshmukh</td>
                                            <td>ritesh@gmail.com</td>
                                            <td><span class="label label-success">Complete</span></td>
                                            <td>13-10-2017</td>
                                            <td>13-10-2017</td>
                                            <td>
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"
                                                   aria-describedby="tooltip98153">
                                                    <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close">
                                                    <i class="fa fa-close text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1024</td>
                                            <td>
                                                <a href="javascript:void(0)"><img style="" width="50px;"
                                                                                  src="{{asset('/admin')}}/assets/images/users/3.jpg"
                                                                                  alt="user"
                                                                                  class="img-circle"/></a>
                                            </td>
                                            <td>Govinda Mauli</td>
                                            <td>govinda@gmail.com</td>
                                            <td><span class="label label-info">Complete</span></td>
                                            <td>13-10-2017</td>
                                            <td>13-10-2017</td>
                                            <td>
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"
                                                   aria-describedby="tooltip98153">
                                                    <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close">
                                                    <i class="fa fa-close text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="2">
                                                <button type="button" class="btn btn-info btn-rounded"
                                                        data-toggle="modal"
                                                        data-target="#add-contact">Add New Contact
                                                </button>
                                            </td>
                                            <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel">Add New
                                                                Contact</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <from class="form-horizontal form-material">
                                                                <div class="form-group">
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Type name"></div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Email">
                                                                    </div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Phone">
                                                                    </div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Designation"></div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Age">
                                                                    </div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Date of joining"></div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <input type="text" class="form-control"
                                                                               placeholder="Salary"></div>
                                                                    <div class="col-md-12 m-b-20">
                                                                        <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light">
                                                                            <span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                            <input type="file" class="upload"></div>
                                                                    </div>
                                                                </div>
                                                            </from>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info waves-effect"
                                                                    data-dismiss="modal">Save
                                                            </button>
                                                            <button type="button" class="btn btn-default waves-effect"
                                                                    data-dismiss="modal">Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <td colspan="6">
                                                <div class="text-right">
                                                    <ul class="pagination"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@section('script')
@stop