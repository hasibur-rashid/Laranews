@extends('admin.master')
@section('title', 'Breaking News')
@section('style')
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">News Sources</h4>
                    </div>
                    <div class="col-md-7 text-right">
                        <button type="button" data-target="#add_and_edit_modal" data-toggle="modal" data-id="add"
                                class="add_btn btn btn-info">
                            <i class="fa fa-plus-circle"></i> Create New
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h6 class="c-grey-900 mB-20">You can manage your news provicder source list.</h6>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Priority</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Source Type</th>
                                    <th>URL</th>
                                    <th>Auto Grabing</th>
                                    <th>Language</th>
                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Priority</th>
                                    <th>Category</th>
                                    <th>Slug</th>
                                    <th>Source Type</th>
                                    <th>URL</th>
                                    <th>Auto Grabing</th>
                                    <th>Language</th>
                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(!empty($items[0])) @foreach($items as $item)
                                    <tr class="bg-light">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->tag_title}}</td>
                                        <td>computer-science</td>
                                        <td>122</td>
                                        <td>12</td>
                                        <td>{{$item->created_at}}</td>
                                        <td style="width: 100px; text-align: center;">
                                            <a href="#add_and_edit_modal" data-toggle="modal"
                                               data-id="{{Crypt::encrypt($item->id)}}" class="edit_btn"
                                               data-original-title="Close">
                                                <i class="fa fa-edit text-info">&nbsp;&nbsp;</i>
                                            </a>
                                            <a data-toggle="modal" href="#delete_modal_{{$item->id}}"
                                               data-original-title="Delete">&nbsp;&nbsp;<i
                                                        class="fa fa-trash-o text-danger"></i>
                                            </a>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
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

                                            <div id="delete_modal_{{$item->id}}" class="modal fade in">
                                                <div class="modal-dialog modal-confirm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Confirmation</h4>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this item? This action
                                                                cannot
                                                                be undone and you will be unable to recover any
                                                                data.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#" class="btn btn-info"
                                                               data-dismiss="modal">Cancel</a>
                                                            <a href="{{URL::to('/admin/news/source/delete/'.$item->id)}}"
                                                               class="btn btn-danger">Yes, delete it!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- /.row -->
    <div class="modal fade" id="add_and_edit_modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="text-center" id="loading">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                </div>
                <form action="{{url('/admin/news/source/add')}}" method="POST" id="form_modal"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body" id="form_modal_body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Name</label>
                                    <input type="text" name="tag_title" class="form-control" value="" id="tag_title"
                                           autofocus required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Slug</label>
                                    <input type="text" name="tag_slug" class="form-control" value="" id="tag_slug"
                                           autofocus required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <input type="hidden" name="id" id="id">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @if(!empty(Session::get('message')))
        <script>
            toastr.success('{{Session::get('message')}}');
        </script>
    @endif
    <script>
        $(document.body).on('click', '.add_btn', function (e) {
            $('.modal-title').text('Add Tag');
            $('#form_modal_body').find('input').val('');
            $('#form_modal_body').find('select').val('');
        });

        $(document.body).on('click', '.edit_btn', function (e) {
            var edit_id = $(this).data('id');
            console(edit_id);
            $('#loading').show();
            $('.modal-title').text('Edit Tag');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $('#form_modal').attr('action') + '?edit_id=' + edit_id,
                data: $('#form_modal').serialize(),
                dataType: 'json',
                success: function (data) {
                    $('#loading').hide();
                    $('#tag_title').val(data.item['tag_title']);
                    $('#tag_slug').val(data.item['tag_slug']);
                    $('#id').val(data.item['id']);
                }
            });
        });
    </script>
@stop

                