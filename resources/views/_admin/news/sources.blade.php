@extends('admin.master')
@section('title', 'Breaking News')
@section('style')
@stop
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">News Sources</h4>
                    <h6 class="card-subtitle">You can manage your news provicder source list.</h6>
                    <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle"
                           data-page-size="7">
                        <thead>
                        <tr>
                            <th data-sort-initial="true" data-toggle="true">#</th>
                            <th>Title</th>
                            <th>Priority</th>
                            <th data-hide="phone, tablet">Category</th>
                            <th data-hide="phone, tablet">Source Type</th>
                            <th data-hide="phone, tablet">URL</th>
                            <th data-hide="phone, tablet">Auto Grabing</th>
                            <th data-sort-ignore="false" class="min-width">Language</th>
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
                            <td>Prothome Alo</td>
                            <td>1</td>
                            <td>Bangladedesh</td>
                            <td>RSS</td>
                            <td>http://prothome-alo.com/international</td>
                            <td><span class="label label-table label-success">ON</span></td>
                            <td>EN</td>
                            <td>
                                <!-- Example single danger button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="9">
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

                