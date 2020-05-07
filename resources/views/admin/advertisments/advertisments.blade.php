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
                    <button type="button" data-target="#add_and_edit_modal" data-toggle="modal" data-id="add" class="add_btn btn btn-info">
                            <i class="fa fa-plus-circle"></i> Create New
                        </button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="bgc-white bd bdrs-3 p-20 mB-20">
                        <h4 class="c-grey-900 mB-20"></h4>
                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Rate</th>
                                    <th>Position</th>
                                    <th>Time Range</th>
                                    <th>Created at</th>
                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @if(!empty($items[0])) @foreach($items as $serial_no => $item)
                                <tr class="bg-light">
                                    <td>{{$serial_no+1}}</td>
                                    <td><img src="{{Storage::url($item->add_image)}}" style="width: 50px;" alt=""></td>
                                    <td>{{$item->add_title}}</td>
                                    <td>{{$item->add_description}}</td>
                                    <td>{{$item->add_rate}}</td>
                                    <td>{{$item->add_position}}</td>
                                    <td>{{$item->ad_start.'-'.$item->ad_end}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td style="width: 100px; text-align: center;">
                                        <a href="#add_and_edit_modal" data-toggle="modal" data-id="{{Crypt::encrypt($item->id)}}" class="edit_btn" data-original-title="Close">
                                                    <i class="fa fa-edit text-info">&nbsp;&nbsp;</i>
                                                </a>
                                        <a data-toggle="modal" href="#delete_modal_{{$item->id}}" data-original-title="Delete">&nbsp;&nbsp;<i
                                                            class="fa fa-trash-o text-danger"></i>
                                                </a> 
                                        <div id="delete_modal_{{$item->id}}" class="modal fade in">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Confirmation</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×
                                                                </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this item? This action cannot be
                                                            undone and you will be unable to recover any data.
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>
                                                        <a data-id="{{Crypt::encrypt($item->id)}}" href="{{URL::to('/admin/advertisement/delete/'.$item->id)}}" class="btn btn-danger delete">Yes, delete it!</a>                                                        {{--
                                                        <a data-id="{{$item->id}}" href="#" data-dismiss="modal" --}} {{--class="btn btn-danger delete">Yes, delete it!</a>--}}
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
<div class="modal fade" id="add_and_edit_modal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg">
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
           <form action="{{url('/admin/advertisement/add')}}" method="POST" id="form_modal" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body" id="form_modal_body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">Title</label>
                                <input type="text" name="add_title" class="form-control" value="" id="add_title" autofocus required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="required">Description</label>
                                <textarea type="text" rows="7" name="add_description" class="form-control" value="" id="add_description" autofocus required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">Price Rate</label>
                                <input type="number" name="add_rate" class="form-control" value="" id="add_rate" autofocus required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">ADD Position</label>
                                <select type="text" name="add_position" class="form-control" value="" id="add_position" autofocus required>
                                    <option value="1">Fontpage</option>
                                    <option value="2">Sidebar</option>
                                    <option value="3">Top Banner</option>
                                    <option value="4">Backpage</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="required">Status</label>
                                <select name="status" class="form-control" value="" id="status" autofocus required>
                                    <option value="1">Pending</option>
                                    <option value="2">Active</option>
                                    <option value="3">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required">Image</label>
                                <input type="file" accept="image/*" name="add_image" class="form-control" value="" id="add_image" autofocus required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required">Active Range</label>
                                <div class="input-daterange input-group" id="datepicker">
                                    <input type="text" class="input-sm form-control" id="ad_start" name="start" />
                                    <span class="input-group-addon">to</span>
                                    <input type="text" class="input-sm form-control" id="ad_end" name="end" />
                                </div>
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
@section('script') @if(!empty(Session::get('message')))
<script>
    toastr.success('{{Session::get('message')}}');
</script>
@endif
<script>
    $(document.body).on('click', '.add_btn', function (e) {
        $('.modal-title').html('Add Adverisement');
        $('#form_modal_body').find('input').val('');
        $('#form_modal_body').find('select').val('');
    });
        $(document.body).on('click', '.edit_btn', function (e) {
            var edit_id = $(this).data('id');
            $('#loading').show();
            $('.modal-title').html('Edit Adverisement');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $('#form_modal').attr('action') + '?edit_id=' + edit_id,
                data: $('#form_modal').serialize(),
                dataType: 'json',
                success: function (data) {
                    $('#loading').hide();
                    console.log(data.item)
                    $('#add_title').val(data.item['add_title']);
                    $('#add_description').val(data.item['add_description']);
                    $('#add_rate').val(data.item['add_rate']);
                    $('#add_position').val(data.item['add_position']);
                    $('#status').val(data.item['status']);
                    $('#ad_start').val(data.item['ad_start']);
                    $('#ad_end').val(data.item['ad_end']);
                }
            });
        });
</script>
@stop