@extends('admin.master')
@section('title', 'Users')
@section('style')
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">Admin User Management</h4>
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
                            <h4 class="c-grey-900 mB-20">User List</h4>
                            <p>You can manage your application user from here.</p>
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Last Seen</th>
                                    <th scope="col">Status</th>
                                    <th style="width: 100px; text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($items[0])) @foreach($items as $item)
                                    <tr class="bg-light">
                                        <td></td>
                                        <td>{{$item->user_image}}</td>
                                        <td>{{$item->user_name}}</td>
                                        <td>{{$item->user_email}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>{{$item->user_status}}</td>
                                        <td style="width: 100px; text-align: center;">
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
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-hidden="true">×
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this item? This action
                                                                cannot be undone and
                                                                you will be unable to recover any data.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="#" class="btn btn-info"
                                                               data-dismiss="modal">Cancel</a>
                                                            <a href="{{URL::to('/admin/users/admin-user/delete/'.$item->id)}}"
                                                               class="btn btn-danger">Yes, delete it!</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="add_and_edit_modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
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
                <form action="{{url('/admin/users/admin-user/add')}}" method="POST" id="form_modal"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body" id="form_modal_body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Name</label>
                                    <input type="text" name="user_name" class="form-control" value="" id="user_name"
                                           autofocus required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="required">Email</label>
                                    <input type="email" name="user_email" class="form-control" value="" id="user_email"
                                           autofocus required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="required">Mobile</label>
                                    <input type="number" name="user_mobile" class="form-control" value=""
                                           id="user_mobile" autofocus required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="required">Password</label>
                                    <input type="password" name="user_password" class="form-control" value=""
                                           id="user_password" autofocus required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="required">Confirm Password</label>
                                    <input type="password" name="confirm_user_password" class="form-control" value=""
                                           id="confirm_user_password" autofocus required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="required">Status</label>
                                    <select name="user_status" class="form-control" value="" id="user_status" autofocus
                                            required>
                                        <option value="1">Pending</option>
                                        <option value="2">Active</option>
                                        <option value="3">Deactive</option>
                                        <option value="4">None</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="required">Image</label>
                                    <input type="file" accept="image/*" name="user_image" class="form-control" value=""
                                           id="user_image" autofocus >
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
                    $('#user_image').val(data.item['user_image']);
                    $('#user_name').val(data.item['user_name']);
                    $('#user_email').val(data.item['user_email']);
                    $('#user_mobile').val(data.item['user_mobile']);
                    $('#user_status').val(data.item['user_status']);
                    $('#id').val(data.item['id']);
                }
            });
        });
    </script>
@stop