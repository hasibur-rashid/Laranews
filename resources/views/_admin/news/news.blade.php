@extends('admin.master')
@section('title', 'News')
@section('style')
@stop
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">News</h3>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <a href="{{url('/admin/news/add')}}" class="add_btn btn btn-info"><i class="fa fa-plus-circle"></i> Create
                News</a>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All News</h4>
                    <h6 class="card-subtitle">You can manage your news post</h6>
                    <div class="dt-buttons">
                        <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#">
                            <span>Copy</span>
                        </a>
                        <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#">
                            <span>CSV</span>
                        </a>
                        <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23"
                           href="#">
                            <span>Excel</span>
                        </a>
                        <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#">
                            <span>PDF</span>
                        </a>
                        <a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#">
                            <span>Print</span>
                        </a>
                    </div>
                    <div class="table-responsive m-t-40">
                        <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
                            <div class="dataTables_length" id="myTable_length">
                                <label>Show
                                    <select name="myTable_length" aria-controls="myTable" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label>
                            </div>

                            <div id="myTable_filter" class="dataTables_filter">
                                <label>Search:
                                    <input type="search" class="" placeholder="" aria-controls="myTable">
                                </label>
                            </div>
                            <table id="myTable" class="table table-bordered table-striped dataTable no-footer"
                                   role="grid"
                                   aria-describedby="myTable_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                        style="">ID
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="">Image
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending"
                                        style="">Title
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending"
                                        style="">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending"
                                        style="">News Type
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending"
                                        style="">Source
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="">Views
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="">Published On
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="">Posted by
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="">Status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending"
                                        style="">Action
                                    </th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">ID</th>
                                    <th rowspan="1" colspan="1">Image</th>
                                    <th rowspan="1" colspan="1">Title</th>
                                    <th rowspan="1" colspan="1">Category</th>
                                    <th rowspan="1" colspan="1">News Type</th>
                                    <th rowspan="1" colspan="1">Source</th>
                                    <th rowspan="1" colspan="1">Views</th>
                                    <th rowspan="1" colspan="1">Published On</th>
                                    <th rowspan="1" colspan="1">Posted by</th>
                                    <th rowspan="1" colspan="1">Status</th>
                                    <th rowspan="1" colspan="1">Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if(isset($news_list[0]))
                                    @foreach($news_list as $news)
                                        <tr role="row" class="even">
                                            <td class="sorting_1">{{$news->id}}</td>
                                            <td>{{$news->news_medias}}</td>
                                            <td>{{$news->news_title}}</td>
                                            <td>@if($news->categories){{$news->categories->category_name}}@endif</td>
                                            <td></td>
                                            <td>{{$news->news_provider}}</td>
                                            <td>{{$news->viewed}}</td>
                                            <td>{{date('d/m/Y',strtotime($news->created_at))}}</td>
                                            <td>{{$news->news_posted_by}}</td>
                                            <td><span class="label label-table label-warning">Awaiting Approval</span>
                                            </td>
                                            <td>
                                                <a href="{{url('/admin/news/edit/'.$news->id)}}" data-toggle="tooltip"
                                                   data-original-title="Edit"
                                                   aria-describedby="tooltip98153">
                                                    <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                </a>
                                                <a href="#sa-warning" data-toggle="tooltip" data-original-title="Close"
                                                   class="sa-warning" value="{{$news->id}}">
                                                    <i class="fa fa-close text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="myTable_info" role="status" aria-live="polite">Showing 1 to
                                10
                                of 57 entries
                            </div>
                            <div class="dataTables_paginate paging_simple_numbers" id="myTable_paginate">
                                <a class="paginate_button previous disabled" aria-controls="myTable" data-dt-idx="0"
                                   tabindex="0" id="myTable_previous">Previous</a>
                                <span>
                                                <a class="paginate_button current" aria-controls="myTable"
                                                   data-dt-idx="1" tabindex="0">1</a>
                                                <a class="paginate_button " aria-controls="myTable" data-dt-idx="2"
                                                   tabindex="0">2</a>
                                                <a class="paginate_button " aria-controls="myTable" data-dt-idx="3"
                                                   tabindex="0">3</a>
                                                <a class="paginate_button " aria-controls="myTable" data-dt-idx="4"
                                                   tabindex="0">4</a>
                                                <a class="paginate_button " aria-controls="myTable" data-dt-idx="5"
                                                   tabindex="0">5</a>
                                                <a class="paginate_button " aria-controls="myTable" data-dt-idx="6"
                                                   tabindex="0">6</a>
                                            </span>
                                <a class="paginate_button next" aria-controls="myTable" data-dt-idx="7" tabindex="0"
                                   id="myTable_next">Next</a>
                            </div>
                        </div>
                    </div>
                </div>
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
                type: "POST",
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
