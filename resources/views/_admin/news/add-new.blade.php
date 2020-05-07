@extends('admin.master')
@section('title', 'Add New Post')
@section('style')
<link rel="stylesheet" href="{{asset('/admin/chosen/bootstrap-chosen.css')}}">
<link rel="stylesheet" href="{{asset('/admin/assets/node_modules/summernote/dist/summernote.css')}}">
<style media="screen">
.check { border-color: red !important; opacity: .8; }
.media_file {
    height: 100px;
    background-repeat: no-repeat; background-position: top center; background-size: cover; }
.thumbnail { border: 1px solid #000; padding: 5px; margin-top: 10px; }
.media_list { margin: 0; padding: 0; list-style-type: none; }
.media_list li { width: 16.666667%; float: left; padding: 0 5px; }
.media_list li { width: 16.666667%; float: left; padding: 0 5px; }
.chosen-container { width: 100% !important; }
@media (min-width: 992px) {
    .media_list li { width: 16.666667%; float: left; }
}
@media (min-width: 768px) {
    .media_list li { width: 20%; float: left; }
}
@media (max-width: 767px) {
    .media_list li { width: 25%; float: left; }
}
</style>
@stop
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url('/admin/news/save')}}" method="POST">
                 {{csrf_field()}}
                     <div class="form-group">
                        <label>News Title</label>
                        <input type="" class="form-control" name="news_title" value="{{$news->news_title}}">
                    </div>
                    <div class="form-group">
                        <label>News Description</label>
                        <textarea name="news_description" class="summernote">{!!$news->news_description!!}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>News Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="">Select Categroy</option>
                                    @if(isset($categories[0]))
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label>Provier</label>
                                <input type="text" class="form-control" name="news_provider" value="{{$news->news_provider}}">
                            </div>
                            <div class="col-sm-4">
                                <label>Language</label>
                                <select class="form-control" name="news_lang">
                                    <option @if($news->news_lang == 'bn') selected @endif value="bn">Bangla</option>
                                    <option @if($news->news_lang == 'en') selected @endif value="en">English</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label>Posted By</label>
                                <input type="text" class="form-control" name="news_posted_by" value="{{$news->news_title}}">
                            </div>
                            <div class="col-sm-4">
                                <?php $news_tags = explode('|',$news->tag_id); ?>
                                <label>Tag</label>
                                <select data-placeholder="Select Tags" class="chosen-select" multiple name="tag_id[]">
                                    @if(isset($tags[0]))
                                        @foreach($tags as $tag)
                                            <option @if(!empty($news_tags[0]) && in_array($tag,$news_tags)) selected @endif value="{{$tag->id}}">{{$tag->tag_title}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <label>Featured</label>
                                <div class="">
                                    <input type="checkbox" name="is_featured" id="checkbox_featured" @if($news->is_featured == 1) checked @endif class="filled-in chk-col-light-blue" />
                                    <label for="checkbox_featured"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" data-toggle="modal" data-target="#media_modal" class="btn btn-info" id="select_media">Select Media</button>
                        <div id="all_media">
                            <?php $medias = explode('|',$news->news_medias) ?>
                            @if(isset($medias[0]))
                                @foreach($medias as $media)
                                <span class="media-label" style="width: 16.66667%; float: left;" id="media_label_'+media_id+'">
                                                <div style="background-image: url('+media_file+'); margin: 0 2%;" class="media_file"></div>
                                                <input type="hidden" name="medias[]" value="{{$media}}" >
                                                <span onclick="remove_file($media)">&#10005;</span></span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-success pull-right">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="media_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" style="max-width: 90% !important;" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Choose Media</h4>
      </div>
      <div class="modal-body">
          <div class="text-center hidden" id="loading"><img src="{{asset('admin/loading.gif')}}" style="width: 100px;margin-top: 5%;"></div>
          <div id='file_path'></div>
          <div class="clearfix"></div>
          <div id="media_form_html" style="height: 250px;overflow-x: scroll;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="chose_media">Choose</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<form action="{{url('/admin/news/get-media-ajax')}}" id="media_form" method="post">
{{csrf_field()}}
</form>
@endsection
@section('script')
<script src="{{asset('/admin/chosen/chosen.jquery.js')}}"></script>
<script>
  $(function() {
    $('.chosen-select').chosen();
    $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
  });
</script>
<script src="{{asset('/admin/assets/node_modules/summernote/dist/summernote.min.js')}}"></script>
<script>
$('.summernote').summernote({
    height: 300, // set editor height
    minHeight: null, // set minimum height of editor
    maxHeight: null, // set maximum height of editor
    focus: false // set focus to editable area after initializing summernote
});
</script>
<script>
$(document.body).on('click','#select_media',function(e) {
    // $('#media_form').submit();
    $('#loading').show();
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url: $('#media_form').attr('action'),
        data: $('#form_modal').serialize(),
        dataType: 'json',
        success: function (data) {
            $('#loading').hide();
            var medias = data.medias;
            $('#media_form_html').empty();
            $('#media_form_html').html(medias);
        }
    });
})

function remove_file(id) {
    $('#media_label_'+id).empty();
    $('#media_file_'+id).removeClass('check');
}



$(document.body).on('click','#chose_media',function(){
    $('#media_modal').modal('hide')
    var all_files = $('#file_path').html();
    $('#all_media').html(all_files);
});

$(document.body).on('click','.img-check',function(){
    var media_id = $(this).data('id');
    var media_file = $(this).data('url');
    $(this).addClass('check');

    var make_html = '<span class="media-label" style="width: 16.66667%; float: left;" id="media_label_'+media_id+'">'+
                    '<div style="background-image: url('+media_file+'); margin: 0 2%;" class="media_file"></div>'+
                    '<input type="hidden" name="medias[]" value="'+media_id+'" >' +
                    '<span onclick="remove_file('+media_id+')">&#10005;</span></span>';

    var div = $('#file_path').html();
    $('#file_path').html( div + make_html +' ');

 });
</script>
@stop
