@extends('admin.master')
@section('title', 'Pages')
@section('style')
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List of Menu</h4>
                <h6 class="card-subtitle">Create and manage your public site menu.
                </h6>
                <div class="table-responsive ">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="javascript:void(0)">About Us</a>
                            </td>
                            <td>about-us</td>
                            <td>
                                <div class="label label-table label-success">Active</div>
                            </td>
                            <td class="text-nowrap">
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
@stop

                