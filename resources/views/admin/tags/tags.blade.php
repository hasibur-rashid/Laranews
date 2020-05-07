@extends('admin.master')
@section('title', 'Tags')
@section('style')
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">Tags</h4>
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
                            <h4 class="c-grey-900 mB-20"></h4>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Language</th>
                                    <th>View</th>
                                    <th>Total Posts</th>
                                    <th>Created at</th>
                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Language</th>
                                    <th>View</th>
                                    <th>Total Posts</th>
                                    <th>Created at</th>
                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(!empty($items[0]))
                                    @foreach($items as $serial_no => $item)
                                        <tr class="bg-light">
                                            <td>{{$serial_no+1}}</td>
                                            <td>{{$item->tag_title}}</td>
                                            <td>{{$item->tag_slug}}</td>
                                            <td>{{$item->tag_lang}}</td>
                                            <td></td>
                                            <td></td>
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
                                                {{-- Delete Modal Design:: 1 --}}
                                                {{--
                                                    <div id="myModal" class="modal fade in">
                                                        <div class="modal-dialog modal-confirm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div class="icon-box">
                                                                        <i class="material-icons"></i>
                                                                    </div>
                                                                    <h4 class="modal-title">Are you sure?</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Do you really want to delete these records? This process cannot be
                                                                        undone.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                                                                    <button type="button" class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> --}} {{-- Delete Modal Design:: 2 --}} {{--
                                        <div id="deleteEmployeeModal" class="modal fade in">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <form>
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Employee</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete these Records?</p>
                                                            <p class="text-warning">
                                                                <small>This action cannot be undone.</small>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                            <input type="submit" class="btn btn-danger" value="Delete">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div> --}}
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
                                                                <p>Are you sure you want to delete this item? This
                                                                    action
                                                                    cannot
                                                                    be undone and you will be unable to recover any
                                                                    data.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a href="#" class="btn btn-info"
                                                                   data-dismiss="modal">Cancel</a>
                                                                <a data-id="{{Crypt::encrypt($item->id)}}"
                                                                   href="{{URL::to('/admin/tag/delete/'.$item->id)}}"
                                                                   class="btn btn-danger delete">Yes, delete it!</a>

                                                                {{--<a data-id="{{$item->id}}" href="#" data-dismiss="modal"--}}
                                                                {{--class="btn btn-danger delete">Yes, delete it!</a>--}}

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
                <form action="{{url('/admin/tag/add')}}" method="POST" id="form_modal" enctype="multipart/form-data">
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

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Language</label>
                                    <?php $langs = \App\Model\Language::where('status', \App\Http\Enum\AllEnum::STATUS_ACTIVE)->get(); ?>
                                    <select name="tag_lang" id="tag_lang" class="form-control" autofocus required>
                                        <option value="">Select</option>
                                        @if(isset($langs[0]))
                                            @foreach($langs as $lang)
                                                <option value="{{$lang->language_short_name}}">{{$lang->language_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
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
@stop
@section('script')
    @if(!empty(Session::get('message')))
        <script>
            toastr.success('{{Session::get('message')}}');
        </script>
    @endif
    <script>
        $(document.body).on('click', '.add_btn', function (e) {
            $('.modal-title').html('Add Tag');
            $('#form_modal_body').find('input').val('');
            $('#form_modal_body').find('select').val('');
        });

        $(document.body).on('click', '.edit_btn', function (e) {
            var edit_id = $(this).data('id');

            $('#loading').show();
            $('.modal-title').html('Edit Tag');
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
                    $('#tag_lang').val(data.item['tag_lang']);
                    $('#id').val(data.item['id']);
                }
            });
        });

        {{--$('.modal-footer').on('click', '.delete', function () {--}}
        {{--var csrf_token = $('meta[name="csrf-token"]').attr('content');--}}
        {{--var delete_id = $(this).data('id');--}}
        {{--$('.modal-title').html('Delete Tag');--}}
        {{--$.ajax({--}}
        {{--type: 'POST',--}}
        {{--url: '{{ url('/admin/tag/delete')}}' + '/' + delete_id,--}}
        {{--data: {--}}
        {{--'_token': csrf_token,--}}
        {{--},--}}
        {{--success: function (data) {--}}

        {{--$("#dataTable").load("{{url('/admin/tag/list')}} #dataTable");--}}

        {{--toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});--}}
        {{--}--}}
        {{--});--}}
        {{--});--}}
    </script>
@stop