@extends('admin.master')
@section('title', 'Categories')
@section('style')
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">Category</h4>
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
                            <h4 class="c-grey-900 mB-20">Category List</h4>
                            <p>Create and manage your static pages.</p>
                             @if(!empty($items[0]))
                                @foreach($items as $index => $item)
                                    <div class="mB-10">
                                        <div class="layers bd bgc-white p-10">
                                            <div class="layer w-100">
                                                <img src="{{Storage::url($item->category_image)}}" style="width: 50px;flaot: left; margin-right: 5px;" alt="">
                                                {{$item->category_name}}
                                                
                                                <div style="float: right; display: inline-block">
                                                    <a href="#add_and_edit_modal" data-toggle="modal"
                                                        data-id="{{Crypt::encrypt($item->id)}}" class="edit_btn"
                                                        data-original-title="Close">
                                                        <i class="fa fa-edit text-info">&nbsp;&nbsp;</i>
                                                    </a>
                                                    <a data-toggle="modal" href="#delete_modal_{{$item->id}}"
                                                        data-original-title="Delete">&nbsp;&nbsp;
                                                        <i class="fa fa-trash-o text-danger"></i>
                                                    </a>
                                                    <div id="delete_modal_{{$item->id}}" class="modal fade in">
                                                        <div class="modal-dialog modal-confirm">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Confirmation</h4>
                                                                    <button type="button" class="close"
                                                                            data-dismiss="modal" aria-hidden="true">
                                                                        ×
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Are you sure you want to delete this item?
                                                                        This action cannot be
                                                                        undone and you will be unable to recover any
                                                                        data.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="#" class="btn btn-info"
                                                                        data-dismiss="modal">Cancel</a>
                                                                    <a href="{{route('cateoryDelete',['id'=>$item->id])}}"
                                                                        class="btn btn-danger">Yes, delete it!</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if(!empty($item->getChildCategory)) 
                                            @foreach($item->getChildCategory as $index_child => $item_child)
                                                <div class="layers bd bgc-white p-10" style="margin-left: 20px;">
                                                    <div class="layer w-100">
                                                        {{$item_child->category_name}}
                                                         <div style="float: right; display: inline-block">
                                                            <a href="#add_and_edit_modal" data-toggle="modal"
                                                                data-id="{{Crypt::encrypt($item_child->id)}}" class="edit_btn"
                                                                data-original-title="Close">
                                                                <i class="fa fa-edit text-info">&nbsp;&nbsp;</i>
                                                            </a>
                                                            <a data-toggle="modal" href="#delete_modal_{{$item_child->id}}"
                                                                data-original-title="Delete">&nbsp;&nbsp;
                                                                <i class="fa fa-trash-o text-danger"></i>
                                                            </a>
                                                            <div id="delete_modal_{{$item_child->id}}" class="modal fade in">
                                                                <div class="modal-dialog modal-confirm">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Confirmation</h4>
                                                                            <button type="button" class="close"
                                                                                    data-dismiss="modal" aria-hidden="true">
                                                                                ×
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure you want to delete this item?
                                                                                This action cannot be
                                                                                undone and you will be unable to recover any
                                                                                data.</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <a href="#" class="btn btn-info"
                                                                                data-dismiss="modal">Cancel</a>
                                                                            <a href="{{route('cateoryDelete',['id'=>$item_child->id])}}"
                                                                                class="btn btn-danger">Yes, delete it!</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                @endforeach
                            @endif
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                </div>
                <div class="text-center" id="loading">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                </div>
                <form action="{{route('categoryAdd')}}" method="POST" id="form_modal"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body" id="form_modal_body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="category_name" class="form-control" value=""
                                           id="category_name" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Slug</label>
                                    <input type="text" name="category_slug" class="form-control" value=""
                                           id="category_slug" required>
                                </div>
                            </div>

                            <div class="form-group col-sm-8">
                                <label>Parent Category</label>
                                <select name="category_parent_id" id="category_parent_id" class="form-control">
                                    <option value="">Select Parent Category</option>
                                    @if(isset($items[0])){
                                    @foreach ($items as $item){
                                    <option value="{{$item->id}}">{{$item->category_name}}</option>';
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Language</label>
                                <?php $langs = \App\Model\Language::where('status', \App\Http\Enum\AllEnum::STATUS_ACTIVE)->get(); ?>
                                <select name="category_lang" id="category_lang" class="form-control" autofocus required>
                                    <option value="">Select</option>
                                    @if(isset($langs[0]))
                                        @foreach($langs as $lang)
                                            <option value="{{$lang->language_short_name}}">{{$lang->language_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
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
@stop


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
                    $('#category_name').val(data.item['category_name']);
                    $('#category_slug').val(data.item['category_slug']);
                    $('#category_id').val(data.item['id']);
                    $('#category_parent_id').val(data.item["category_parent_id"]);
                    $('#category_lang').val(data.item["category_lang"]);
                }
            });
        });
    </script>
@stop