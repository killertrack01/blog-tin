@extends('layouts.app')
@section('title','Đăng Bài')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2>Tạo bài viết mới</h2>
        </div>
        <form class="form-horizontal row-fluid" action="{{route('postCreate')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label><h4>Tiêu đề bài viết</h4></label>
                    <input type="text" class="form-control" id="title" name="uTitle" placeholder="Nhập tiêu đề">
                </div>

                <div class="form-group">
                    <label for="txt-author"><h4>Tác giả</h4></label>
                    <input type="text" class="form-control" id="uAuthor" name="uAuthor" placeholder="Nhập tên tác giả">
                </div>

                <div class="form-group">
                    <label for="image"><h4>Ảnh đại diện bài viết</h4></label>
                    <hr>
                        <input type="file" class="form-control-label" id="uImage" name="uImage" >
                    <hr>
                </div>

                <div class="form-group">
                    <label class="txt-category" for="basicinput">Thể loại</label>
                        <div class="controls">
                            <select tabindex="1" name="uCategory" data-placeholder="Chọn thể loại.." class="span8">
                            <option>Chọn thể loại..</option>
                                @foreach($cate as $val)
                                    <option value="{{$val->id}}">{{$val->name}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <label><h4>Mô tả bài viết</h4></label>
                    <input type="text" class="form-control" rows="3" name="uMota" placeholder="Enter ..."></textarea>
                </div>

                <div class="control-group">
                    <label><h4>Nội dung bài viết</h4></label>
                        <div class="controls">
                            <textarea class="span8" id="editor-vip" name="uNoidung" rows="5"></textarea>
                        </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Gửi bài</button>
            </div>
        </form>
    </div>
</div>
@endsection

<script src="{{ asset('myeditor/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('myeditor/scripts/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('myeditor/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('myeditor/editor/ckfinder/ckfinder.js')}}"></script>
@section('script')
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