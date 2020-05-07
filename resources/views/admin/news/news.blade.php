@extends('admin.master')
@section('title', 'News')
@section('style')
    <style>
        .card-body {
            margin-top: 0px !important;
        }

        .page-titles {
            margin-top: 0px !important;
        }
    </style>
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-5 ">
                        <h4 class="c-grey-900 mT-10 mB-30">News</h4>
                    </div>
                    <div class="col-md-7 text-right">
                        <a href="{{url('/admin/news/add/')}}" type="button" data-target="#add_and_edit_modal"
                                data-toggle="" data-id="add"
                                class="add_btn btn btn-info">
                            <i class="fa fa-plus-circle"></i> Create New
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="bgc-white bd bdrs-3 p-20 mB-20">
                            <h4 class="c-grey-900 mB-20">All News</h4>
                            <h6 class="c-grey-900 mB-20">You can manage your news post</h6>
                            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0"
                                   width="100%">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Language</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Source</th>
                                    <th>Views</th>
                                    <th>Published</th>
                                    <th>Status</th>
                                    <th style="width: 60px; text-align: center;">Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Language</th>
                                    <th>Category</th>
                                    <th>Type</th>
                                    <th>Source</th>
                                    <th>Views</th>
                                    <th>Published</th>
                                    <th>Status</th>
                                    <th style="width: 60px; text-align: center;">Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($news_list[0])) 
                                    @foreach($news_list as $index=>$news)
                                    <tr role="row" class="even">
                                        <td class="sorting_1">{{$index+1}}</td>
                                        <td>
                                            @if($news->is_rss == 1)
                                                <img 
                                                @if(!empty($news->rss_media)) src="{{$news->rss_media}}" 
                                                @else src="{{asset('default.jpeg')}}"  @endif
                                                    width="100" alt="image">    
                                            @else
                                                <img src="{{$news->news_medias}}" alt="image">
                                            @endif
                                        </td>
                                        <td>{{$news->news_title}}</td>
                                        <td>{{$news->news_lang}}</td>
                                        <td>@if(isset($news->categories)) {{$news->categories->category_name}} @endif</td>
                                        {{--                                        <td>@if($news->categories){{$news->categories->category_name}}@endif</td>--}}
                                        <td>
                                            @if($news->is_rss == 1)
                                                News Feed
                                            @else
                                                Local Staff
                                            @endif
                                        </td>
                                        <td>{{$news->news_provider}}</td>
                                        <td>{{$news->viewed}}</td>
                                        <td>{{date('d/m/Y',strtotime($news->created_at))}}</td>
                                        {{--<td>{{$news->news_posted_by}}</td>--}}
                                        <td><span class="label label-table label-warning">
                                                @if(\App\Http\Enum\AllEnum::STATUS_PENDING==$news->status)
                                                    Pending
                                                @elseif(\App\Http\Enum\AllEnum::STATUS_ACTIVE==$news->status)
                                                    Published
                                                @elseif(\App\Http\Enum\AllEnum::STATUS_INACTIVE==$news->status)
                                                    Draft
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <a href="{{url('/admin/news/edit/'.$news->id)}}" data-toggle="tooltip"
                                               data-original-title="Edit" aria-describedby="tooltip98153">
                                                <i class="fa fa-edit text-info"></i>
                                            </a>

                                            {{--<a href="#sa-warning" data-toggle="tooltip" data-original-title="Close"--}}
                                               {{--class="sa-warning" value="{{$news->id}}">--}}
                                                {{--<i class="fa fa-close text-danger"></i>--}}
                                            {{--</a>--}}

                                            <a data-toggle="modal" href="#delete_modal_{{$news->id}}"
                                               data-original-title="Delete">&nbsp;&nbsp;<i
                                                        class="fa fa-trash-o text-danger"></i>
                                            </a>

                                            <div id="delete_modal_{{$news->id}}" class="modal fade in">
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
                                                            <a data-id="{{Crypt::encrypt($news->id)}}"
                                                               href="{{URL::to('/admin/news/delete/'.$news->id)}}"
                                                               class="btn btn-danger delete">Yes, delete it!</a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif




                                {{--  @if(!empty($items[0])) @foreach($items as $item)
                                <tr class="bg-light">
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->tag_title}}</td>
                                    <td>computer-science</td>
                                    <td>122</td>
                                    <td>12</td>
                                    <td>{{$item->created_at}}</td>
                                    <td style="width: 100px; text-align: center;">
                                        <a href="#add_and_edit_modal" data-toggle="modal" data-id="{{Crypt::encrypt($item->id)}}" class="edit_btn" data-original-title="Close">
                                        <i class="fa fa-edit text-info">&nbsp;&nbsp;</i>
                                </a>
                                        <a data-toggle="modal" href="#delete_modal_{{$item->id}}" data-original-title="Delete">&nbsp;&nbsp;<i class="fa fa-trash-o text-danger"></i>
                                </a>
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
                                        <div id="delete_modal_{{$item->id}}" class="modal fade in">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Confirmation</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you sure you want to delete this item? This action cannot
                                                            be undone and you will be unable to recover any data.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="#" class="btn btn-info" data-dismiss="modal">Cancel</a>
                                                        <a href="{{URL::to('/admin/news/source/delete/'.$item->id)}}" class="btn btn-danger">Yes, delete it!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach @endif  --}}
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
    <script>
        //delete product and remove it from list
        $(document).on('click', '.confirm', function () {
            var news_id = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            })
            $.ajax({
                type: "GET",
                url: url + '/admin/news/delete/' + news_id,
                success: function (data) {
                    console.log(data);
                    $("#sa-warning" + news_id).remove();
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>

@stop
