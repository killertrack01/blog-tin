<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Chi tiết bài viết')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2>Chi tiết bài viết</h2>
        </div>
        <form class="form-horizontal row-fluid" action="{{ url('admin/userpost/detail/'.$posts->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

            <div class="form-group">
                    <h4>Tiêu đề bài viết</h4> <h3>{{$posts->title}}</h3>
                </div>
                <hr>
                <div class="form-group">
                   <h4>Tác giả</h4> <h3>{{$posts->author}}</h3>
                <div class = "controls">
                    
                    </div><hr>
                </div>

                <div class="form-group">
                    <label for="image"><h4>Ảnh đại diện bài viết</h4></label>
                    <div class = "controls">
                        <img class="img-fluid" src="{{url('img/upload/ava-post/'.$posts->img)}}"/>
                    </div>
                    <hr>
                </div>

                <div class="form-group">
                    <label class="txt-category" for="basicinput">Thể loại</label>
                        <div class="controls">
                            <select tabindex="1" name="uCategory" data-placeholder="Chọn thể loại.." class="span8">
                                    <option value="{{$posts->category_id}}"
                                    @foreach($cate as $val)
                                        @if(isset($posts->category_id) && $val->id == $posts->category_id)
                                        >{{$val->name}}
                                        @endif
                                    @endforeach
                                    </option>
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <label><h4>Mô tả bài viết</h4></label>
                    <div class = "controls">
                        <input type="text" class="form-control" 
                        @if(isset($posts->summary))
                        value="{{$posts->summary}}"
                        @endif
                        name="uMota" placeholder="Nhập mô tả..." readonly>
                    </div>
                </div>

                <div class="control-group">
                    <label><h4>Nội dung bài viết</h4></label>
                        <div class="controls">
                            <textarea class="span8" id="editor-vip" name="uNoidung" rows="5" readonly>
                            @if(isset($posts->detail))
                            {{$posts->detail}}
                            @endif
                            </textarea>
                        </div>
                </div>

            </div>
            <div class="card-footer">
                <button class="btn btn-default" type="button">
                            <a href="{{ url('admin/userpost/list') }}"><b>Trở về</b></a>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

<script src="{{ asset('myeditor/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('myeditor/scripts/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('myeditor/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('myeditor/editor/ckfinder/ckfinder.js')}}"></script>
@section('script-section')
<script>
		$(document).ready(function() {
			config = {};
			config.entities_latin = false;
			config.uiColor = '#e6ffff';
			config.filebrowserBrowseUrl = '{{asset('myeditor/editor/ckfinder/ckfinder.html')}}' ;
			config.filebrowserImageBrowseUrl = '{{asset('myeditor/editor/ckfinder/ckfinder.html')}}' ;
            
            CKEDITOR.replace('editor-vip',config);
            $('.img-bnupload').click(function(){
                $('.img-upload').click();
            });
            $('.img-upload').change( function(event) {
                var tmppath = URL.createObjectURL(event.target.files[0]);
                    $(".img-bnupload").fadeIn("fast").attr('src',tmppath);       
                });
                } );
	</script>
@endsection