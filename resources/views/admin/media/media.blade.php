@extends('admin.master')
@section('title', 'Media')
@section('style')
    <style media="screen">
        .media-body {
            width: 100%;
            height: 420px;
            overflow-x: hidden;
        }

        .media-body .col-sm-2 {
            padding: 0 5px;
        }

        .media_file {
            height: 100px;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: cover;
        }

        .thumbnail {
            border: 1px solid #000;
            padding: 5px;
            margin-top: 10px;
        }

        .delete_media {
            position: absolute;
            top: 5px;
            right: 5px;
            color: #ff0000;
        }

        #progress-wrp {
            display: none;
            border-radius: 4px;
            margin: 10px;
            text-align: left;
            background: #fff;
            box-shadow: inset 1px 3px 6px rgba(0, 0, 0, 0.12);
        }

        #progress-wrp .progress-bar {
            color: #fff;
            height: 20px;
            border-radius: 3px;
            background-color: #32CD32;
            width: 0;
            box-shadow: inset 1px 1px 10px rgba(0, 0, 0, 0.11);
        }

        .media_list {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .media_list li {
            width: 16.666667%;
            float: left;
            padding: 0 3px;
        }

        @media (min-width: 992px) {
            .media_list li {
                width: 16.666667%;
                float: left;
            }
        }

        @media (min-width: 768px) {
            .media_list li {
                width: 20%;
                float: left;
            }
        }

        @media (max-width: 767px) {
            .media_list li {
                width: 25%;
                float: left;
            }
        }
    </style>
@stop
@section('content')
    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Media
                                    <button class="btn btn-info btn-sm pull-right media_btn" type="button"
                                            data-target="#media_file_modal" data-toggle="modal">Upload Files
                                    </button>
                                </h4>
                                <div class="clearfix"></div>
                                <hr style="margin: 5px 0 2px;">

                                <div class="media-body" id="media-body">
                                    @if(isset($medias[0]))
                                        <ul class="media_list">
                                            @foreach($medias as $media)
                                                <li>

                                                    <div class="thumbnail" style="display: block; position: relative;">
                                                        <a class="delete_media" href='javascript:;'
                                                           onchange="deleteImage({{$media->id}})"></a>
                                                        <div style="background-image: url('{{asset(Storage::url($media->media_url))}}');"
                                                             class="media_file">
                                                        </div>
                                                        <div class="caption">
                                                            <span>{{$media->media_title}}</span>
                                                        </div>
                                                        <div class="clearfix">

                                                        </div>
                                                    </div>
                                                    <input type="checkbox" name="media"
                                                           value="{{Crypt::encrypt($media->id)}}">
                                                </li>
                                            @endforeach
                                        </ul>
                                    @else
                                        No Media Exists
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="media_file_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">File Upload</h4>
                </div>
                <div class="modal-body">
                    <form action="{{url('/admin/media/save')}}" class="" id="media_form" enctype="multipart/form-data"
                          method="post">
                        <input type="hidden" name="_token" id="token_input" value="{{ csrf_token() }}">
                        <div id="media_form_html">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document.body).on('click', 'thumbnail', function () {
            var media = $(this).data('id');
            var checked = '';

        });
        $(document.body).on('click', '.media_btn', function functionName() {
            $('#media_form_html').empty();
            $('#media_form_html').html('<div class="form-group">'
                + '<input type="file" name="media_file[]" class="form-control" id="file" multiple /></div>'
                + '<div class="form-group"><button type="submit" class="btn btn-info btn-block">Upload</button></div><div class="clearfix"></div>' +
                '<div id="progress-wrp"><div class="progress-bar"><span class="status">0%</span></div></div><div id="output"></div>');
        })
    </script>
    <script type="text/javascript">
        //configuration
        var max_file_size = 10048576; //allowed file size. (1 MB = 1048576)
        var allowed_file_types = ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg', 'video/wav', 'video/mp4']; //allowed file types
        var result_output = '#output'; //ID of an element for response output
        var my_form_id = '#upload_form'; //ID of an element for response output
        var total_files_allowed = 10; //Number files allowed to upload
        var progress_bar_id = '#progress-wrp'; //ID of an element for response output

        //on form submit
        $(document.body).on("submit", '#media_form', function (event) {
            event.preventDefault();
            var proceed = true; //set proceed flag
            var error = [];	//errors
            var total_files_size = 0;

            if (!window.File && window.FileReader && window.FileList && window.Blob) { //if browser doesn't supports File API
                error.push("Your browser does not support new File API! Please upgrade."); //push error text
            } else {
                var total_selected_files = this.elements['media_file[]'].files.length; //number of files

                //limit number of files allowed
                if (total_selected_files > total_files_allowed) {
                    error.push("You have selected " + total_selected_files + " file(s), " + total_files_allowed + " is maximum!"); //push error text
                    proceed = false; //set proceed flag to false
                }
                //iterate files in file input field
                $(this.elements['media_file[]'].files).each(function (i, ifile) {
                    if (ifile.value !== "") { //continue only if file(s) are selected
                        if (allowed_file_types.indexOf(ifile.type) === -1) { //check unsupported file
                            error.push("<b>" + ifile.name + "</b> is unsupported file type!"); //push error text
                            proceed = false; //set proceed flag to false
                        }

                        total_files_size = total_files_size + ifile.size; //add file size to total size
                    }
                });

                //if total file size is greater than max file size
                if (total_files_size > max_file_size) {
                    error.push("You have " + total_selected_files + " file(s) with total size " + bytesToSize(total_files_size) + ", Allowed size is " + bytesToSize(max_file_size) + ", Try smaller file!"); //push error text
                    proceed = false; //set proceed flag to false
                }

                var submit_btn = $(this).find("input[type=submit]"); //form submit button

                //if everything looks good, proceed with jQuery Ajax
                if (proceed) {
                    submit_btn.val("Please Wait...").prop("disabled", true); //disable submit button
                    var form_data = new FormData(this); //Creates new FormData object
                    var post_url = $(this).attr("action"); //get action URL of form

                    //jQuery Ajax to Post form data
                    $.ajax({
                        url: post_url,
                        type: "POST",
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        xhr: function () {
                            //upload Progress
                            var xhr = $.ajaxSettings.xhr();
                            if (xhr.upload) {
                                xhr.upload.addEventListener('progress', function (event) {
                                    var percent = 0;
                                    var position = event.loaded || event.position;
                                    var total = event.total;
                                    if (event.lengthComputable) {
                                        percent = Math.ceil(position / total * 100);
                                    }
                                    //update progressbar
                                    $(progress_bar_id).show();
                                    $(progress_bar_id + " .progress-bar").css("width", +percent + "%");
                                    $(progress_bar_id + " .status").text(percent + "%");
                                }, true);
                            }
                            return xhr;
                        },

                        mimeType: "multipart/form-data"
                    }).done(function (res) { //
                        $('#media_form')[0].reset(); //reset form
                        $('#media_file_modal').modal('hide')
                        $('#media-body').empty();
                        $('#media-body').html(JSON.parse(res)); //output response from server
                        submit_btn.val("Upload").prop("disabled", false); //enable submit button once ajax is done
                    });
                }
            }

            $(result_output).html(""); //reset output
            $(error).each(function (i) { //output any error to output element
                $(result_output).append('<div class="error">' + error[i] + "</div>");
            });

//function to format bites bit.ly/19yoIPO
            function bytesToSize(bytes) {
                var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                if (bytes == 0) return '0 Bytes';
                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                return Math.round(bytes / Math.pow(1024, i), 2) + ' ' + sizes[i];
            }
        });
    </script>
@stop
