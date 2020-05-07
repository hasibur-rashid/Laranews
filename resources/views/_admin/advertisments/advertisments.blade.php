@extends('admin.master')
@section('title','Advertisments')
@section('style')
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Manage Advertisement</h4>
                    <h6 class="card-subtitle">You can add or remove your advertisment</h6>
                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                           data-page-size="7">
                        <thead>
                        <tr>
                            <th data-sort-initial="true" data-toggle="true">Image</th>
                            <th>Title</th>
                            <th data-hide="phone, tablet">Active Range</th>
                            <th data-hide="phone, tablet">Position</th>
                            <th data-hide="phone, tablet">Status</th>
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
                            <td></td>
                            <td>Bata</td>
                            <td>28/12/2017 - 28/1/2018</td>
                            <td>Home Page</td>
                            <td><span class="label label-table label-success">Active</span></td>
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
                            <td></td>
                            <td>Goodlow</td>
                            <td>28/12/17 to 28/1/18</td>
                            <td>Tech Page</td>
                            <td><span class="label label-table label-danger">Suspended</span></td>
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
                            <td></td>
                            <td>Boudreaux</td>
                            <td>April 18, 2017 to May 18, 2017</td>
                            <td>International</td>
                            <td><span class="label label-table label-success">Active</span></td>
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
                            <td></td>
                            <td>Michael</td>
                            <td>28/12/17-28/1/18</td>
                            <td>Sports</td>
                            <td><span class="label label-table label-danger">Inactive</span></td>
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
                            <td colspan="6">
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
    <!-------------------------------------------------MODAL CONTENT--------------------------------------------------->

    <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Content is Responsive</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="control-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@stop
