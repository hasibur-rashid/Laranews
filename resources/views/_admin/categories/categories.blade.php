@extends('admin.master')
@section('title', 'Categories')
@section('style')
@stop
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Category</h3>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <button type="button" data-target="#modal_div" data-toggle="modal" data-id="add"
                    class="add_btn btn btn-info"><i class="fa fa-plus-circle"></i> Create New
            </button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive ">
                        <table class="table tabel-color-bordered-table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Parent</th>
                                <th>News</th>
                                <th>Created at</th>
                                <th style="width: 100px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($categories[0]))
                                @foreach($categories as $category)
                                    <tr class="bg-light">
                                        <td>{{$category->id}}</td>
                                        <td><a href="" >{{$category->category_name}}</a></td>
                                        <td></td>
                                        <td></td>
                                        <td>233</td>
                                        <td>{{$category->created_at}}</td>
                                        <td>
                                            <a href="#modal_div" data-toggle="modal"
                                               data-id="{{Crypt::encrypt($category->id)}}" class="edit_btn"
                                               data-toggle="tooltip" data-original-title="Close">
                                                <i class="fa fa-edit text-danger"></i>
                                            </a>
                                            <button type="button"
                                                    class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn sa-warning"
                                                    data-toggle="tooltip" data-original-title="Delete"><i
                                                        class="ti-close" value="{{$category->id}}"
                                                        aria-hidden="true"></i>
                                            </button>

                                        </td>
                                    </tr>
                                    <?php $child_categories = $category->getChildCategory; ?>
                                    @if(isset($child_categories[0]))
                                        @foreach($child_categories as $child_category)
                                            <tr>
                                                <td style="padding-left: 30px;">{{$child_category->category_name}}</td>
                                                <td>@if(!empty($child_category->getParentCategory)){{$child_category->getParentCategory->category_name}}@else
                                                        No Parent @endif</td>
                                                <td>
                                                    <a href="#modal_div" data-toggle="modal"
                                                       data-id="{{Crypt::encrypt($child_category->id)}}"
                                                       class="edit_btn">
                                                        <i data-toggle="tooltip" data-original-title="Close"
                                                           class="fa fa-edit text-danger"></i>
                                                    </a>
                                                    <button type="button"
                                                            class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn "
                                                            data-toggle="tooltip" data-original-title="Delete"><i
                                                                class="ti-close"
                                                                aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="modal fade" id="modal_div" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="text-center" id="loading">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                </div>
                <form action="{{url('/admin/category/save')}}" method="POST" id="form_modal"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body" id="form_modal_body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="category_name" class="form-control" value=""
                                           id="category_name" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select name="category_parent_id" id="category_parent_id" class="form-control">
                                        <option value="">Select Parent Category</option>
                                        @if(isset($categories[0])){
                                        @foreach ($categories as $c){
                                        <option value="{{$c->id}}">{{$c->category_name}}</option>';
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Category Image</label>
                                    <input type="file" name="category_image" id="category_image" class="form-control"
                                           value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <input type="hidden" name="id" id="category_id">
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
            $('#form_modal_body').find('input').val('');
            $('#form_modal_body').find('select').val('');
            $('.modal-title').text('Add Category');
        });
        $(document.body).on('click', '.edit_btn', function (e) {
            var edit_id = $(this).data('id');
            $('#loading').show();
            $('.modal-title').text('Edit Category');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $('#form_modal').attr('action') + '?edit_id=' + edit_id,
                data: $('#form_modal').serialize(),
                dataType: 'json',
                success: function (data) {
                    $('#loading').hide();

                    $('#category_name').val(data.category['category_name']);
                    $('#category_id').val(data.category['id']);
                    $('#category_parent_id').val(data.category["category_parent_id"]);
                }
            });
        });
    </script>
@stop
