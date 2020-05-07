@extends('admin.master')
@section('title', 'Users')
@section('style')
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Admin User Management</h4>
                    <h6 class="card-subtitle">You can manage your application user from here.</h6>
                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                           data-page-size="7">
                        <thead>
                        <tr>
                            <th data-sort-initial="true" data-toggle="true">#</th>
                            <th data-sort-initial="true" data-toggle="true">Image</th>
                            <th>Name</th>
                            <th data-hide="phone, tablet">Email</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th data-hide="phone, tablet">Created at</th>
                            <th data-hide="phone, tablet">Last Seen</th>
                            <th data-sort-ignore="true" class="min-width">Action</th>
                        </tr>
                        </thead>
                        <div class="m-t-40">
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <div class="form-group">
                                        <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i
                                                    class="icon wb-plus"
                                                    aria-hidden="true"></i>Add
                                            New Row
                                        </button>
                                        <small></small>
                                    </div>
                                </div>
                                <div class="ml-auto">
                                    <div class="form-group">
                                        <input id="demo-input-search2" type="text" placeholder="Search"
                                               autocomplete="off">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt@gmail.com</td>
                            <td><span class="label label-table label-success">Active</span></td>
                            <td>3 Oct 2017</td>
                            <td>3 Oct 2017</td>
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
                            <td>2</td>
                            <td></td>
                            <td>Shohana</td>
                            <td>Woldt@gmail.com</td>
                            <td><span class="label label-table label-success">Active</span></td>
                            <td>3 Nov 2017</td>
                            <td>3 Dec 2017</td>
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
                            <td colspan="12">
                                <div class="text-right">
                                    <ul class="pagination">
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
@stop