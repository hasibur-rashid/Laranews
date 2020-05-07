@extends('admin.master')
@section('title', 'Rss')
@section('style')
<style>
    .dont-break-out { /* These are technically the same, but use both */ overflow-wrap: break-word; word-wrap: break-word; -ms-word-break:
    break-all; /* This is the dangerous one in WebKit, as it breaks things wherever */ word-break: break-all; /* Instead
    use this non-standard one: */ word-break: break-word; /* Adds a hyphen where the word breaks, if supported (No Blink)
    */ -ms-hyphens: auto; -moz-hyphens: auto; -webkit-hyphens: auto; hyphens: auto; }
</style>
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">Rss</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20"></h4>
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                    width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Provider</th>
                                        <th>Link</th>
                                        <th>Description</th>
                                        <th>Created at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($items[0]))
                                        @foreach($items as $serial_no => $item)
                                            <tr class="bg-light">
                                                <td>{{$serial_no+1}}</td>                                            
                                                <td><img src="{{$item['media']}}" width="50" alt=""></td>
                                                <td>{{$item['title']}}</td>
                                                <td>{{$item['provider']}}</td>
                                                <td class="dont-break-out"><a href="{{$item['link']}}" target="_blank">{{$item['link']}}</a></td>
                                                <td>{!!$item['description']!!}</td>
                                                <td>{{$item['created_at']}}</td>
                                            </tr>
                                        @endforeach @endif

                                    </tbody>
                                </table>
                            </div>
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
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Link</label>
                                    <input type="text" name="rss_link" class="form-control" value="" id="rss_link"
                                           autofocus required>
                                </div>
                                <div class="form-group">
                                    <label class="required">Provider</label>
                                    <input type="text" name="rss_provider" class="form-control" value="" id="rss_provider"
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

                    $('#rss_link').val(data.item['rss_link']);
                    $('#rss_provider').val(data.item['rss_provider']);
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