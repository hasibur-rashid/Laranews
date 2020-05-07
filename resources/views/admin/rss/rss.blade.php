@extends('admin.master')
@section('title', 'Rss')
@section('style')
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">Rss</h4>
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
                                    <th>Provider</th>
                                    <th>Link</th>
                                    <th>Category</th>
                                    <th>Country</th>
                                    <th>Language</th>
                                    <th>Priority</th>
                                    <th>Status</th>

                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($items[0]))
                                    @foreach($items as $serial_no => $item)
                                        <tr class="bg-light">
                                            <td>{{$serial_no+1}}</td>                                            
                                            <td>{{$item->rss_provider}}</td>
                                            <td><a href="{{$item->rss_link}}" target="_blank">{{$item->rss_link}}</a></td>
                                            <td>{{$item->rss_category}}</td>
                                            <td>{{$item->rss_country}}</td>
                                            <td>{{$item->rss_lang}}</td>
                                            <td>
                                                @if(\App\Http\Enum\AllEnum::PRIORITY_HIGH==$item->rss_priority)
                                                    High
                                                @elseif(\App\Http\Enum\AllEnum::PRIORITY_MEDIUM==$item->rss_priority)
                                                    Medium
                                                @elseif(\App\Http\Enum\AllEnum::PRIORITY_LOW==$item->rss_priority)
                                                    Low
                                                @endif

                                            </td>
                                            <td>
                                                @if(\App\Http\Enum\AllEnum::STATUS_PENDING==$item->status)
                                                    Pending
                                                @elseif(\App\Http\Enum\AllEnum::STATUS_ACTIVE==$item->status)
                                                    Active
                                                @elseif(\App\Http\Enum\AllEnum::STATUS_INACTIVE==$item->status)
                                                    Inactive
                                                @endif
                                            </td>

                                            <td style="width: 130px; text-align: center;">
                                                <a href="{{route('rssAddToNews',['id'=>$item->id])}}" title="Add to News">
                                                    <i class="fa fa-plus text-info">&nbsp;&nbsp;</i>
                                                </a>
                                                <a href="{{route('rssFire',['id'=>$item->id])}}" title="View">
                                                    <i class="fa fa-eye text-info">&nbsp;&nbsp;</i>
                                                </a>
                                                <a href="#add_and_edit_modal" data-toggle="modal"
                                                   data-id="{{Crypt::encrypt($item->id)}}" class="edit_btn"
                                                   data-original-title="Close" title="Edit">
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
                <form action="{{route('rssAdd')}}" method="POST" id="form_modal" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body" id="form_modal_body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="required">Country</label>
                                <?php $countries = \App\Model\Country::all(); ?>
                                <select name="rss_country" id="rss_country" class="form-control" autofocus required>
                                    <option value="">Select</option>
                                    @if(isset($countries[0]))
                                        @foreach($countries as $country)
                                            <option value="{{$country->code}}">{{$country->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="required">Language</label>
                                <?php $langs = \App\Model\Language::where('status', \App\Http\Enum\AllEnum::STATUS_ACTIVE)->get(); ?>
                                <select name="rss_language" id="rss_language" class="form-control" autofocus required>
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
                                    <label class="required">Category</label>
                                    <?php $categories = \App\Model\Category::orderBy('category_name')->get(); ?>
                                    <select name="rss_category" id="rss_category" class="form-control">
                                        <option value="">Select</option>
                                        @if(isset($categories[0]))
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Provider</label>
                                    <input type="text" name="rss_provider" class="form-control" value="" id="rss_provider"
                                           autofocus required>
                                </div>
                                <div class="form-group">
                                    <label class="required">Link</label>
                                    <input type="text" name="rss_link" class="form-control" value="" id="rss_link"
                                           autofocus required>
                                </div>
                            </div>
                            
                            <div class="form-group col-sm-6">
                                <label class="required">Priority</label>
                                <select  class="form-control" name="rss_priority" id="rss_priority" autofocus required>
                                    <option value="">Select</option>
                                    <option value="1">High</option>
                                    <option value="2">Mideum</option>
                                    <option value="3">Low</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="required">Status</label>
                                <select  class="form-control" name="status" id="status" autofocus required>
                                    <option value="">Select</option>
                                    <option value="1">Pending</option>
                                    <option value="2">Active</option>
                                    <option value="3">Inactive</option>
                                </select>
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
            $('.modal-title').html('Add RSS Link');
            $('#form_modal_body').find('input').val('');
            $('#form_modal_body').find('select').val('');
        });

        $(document.body).on('change','#rss_language',function(e){
            var value = $(this).val();
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $('#form_modal').attr('action') + '?lang=' + value,
                data: $('#form_modal').serialize(),
                dataType: 'json',
                success: function (data) {
                    var categories = data.categories;

                    var categories_html = '<option value="" selected>Select</option>';
                    for(var i = 0; i < categories.length; i++){
                        categories_html += '<option value="'+categories[i]['id']+'">'+categories[i]['category_name']+'</option>';
                    }

                    $('#rss_category').empty();
                    $('#rss_category').append(categories_html);
                }
            });
        });

        $(document.body).on('click', '.edit_btn', function (e) {
            var edit_id = $(this).data('id');

            $('#loading').show();
            $('.modal-title').html('Edit RSS Link');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $('#form_modal').attr('action') + '?edit_id=' + edit_id,
                data: $('#form_modal').serialize(),
                dataType: 'json',
                success: function (data) {
                    $('#loading').hide();

                    var categories = data.categories;

                    var categories_html = '<option value="" selected>Select</option>';

                    for(var i = 0; i < categories.length; i++){
                        categories_html += '<option value="'+categories[i]['id']+'">'+categories[i]['category_name']+'</option>';
                    }

                    $('#rss_link').val(data.item['rss_link']);
                    $('#rss_provider').val(data.item['rss_provider']);
                    $('#rss_category').empty();
                    $('#rss_category').append(categories_html);
                    $('#rss_category').val(data.item['rss_category']);
                    $('#rss_country').val(data.item['rss_country']);
                    $('#rss_language').val(data.item['rss_lang']);
                    $('#rss_priority').val(data.item['rss_priority']);
                    $('#status').val(data.item['status']);
                    $('#id').val(data.item['id']);
                }
            });
        });
    </script>
@stop