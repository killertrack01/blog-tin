@extends('layouts.app')
@section('title','Sửa bài viết')
@section('content')
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h2>Sửa bài viết</h2>
        </div>
        <form class="form-horizontal row-fluid" action="{{ url('/edit/'.$post->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">

                <div class="form-group">
                    <label><h4>Tiêu đề bài viết</h4></label>
                    <div class = "controls">
                        <input type="text" class="form-control" id="title" 
                        @if(isset($post->title))
                        value="{{$post->title}}"
                        @endif
                        name="uTitle" placeholder="Nhập tiêu đề...">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txt-author"><h4>Tác giả</h4></label>
                    <div class = "controls">
                        <input type="text" class="form-control" id="author" 
                        @if(isset($post->author))
                        value="{{$post->author}}"
                        @endif
                        name="uAuthor" placeholder="Nhập tên tác giả...">
                    </div>
                </div>

                <div class="form-group">
                    <label for="image"><h4>Ảnh đại diện bài viết</h4></label>
                    <hr>
                    <div class = "controls">
                        <input type="file" class="form-control-label" id="uImage" name="uImage" >
                        @if(isset($post->img))
                            {{$post->img}}
                        @endif
                    </div>
                    <hr>
                </div>

                <div class="form-group">
                    <label class="txt-category" for="basicinput">Thể loại</label>
                        <div class="controls">
                            <select tabindex="1" name="uCategory" data-placeholder="Chọn thể loại.." class="span8">
                                <option value="">Chọn ở đây..</option>
                                @foreach($cate as $val)
                                    <option
                                    @if(isset($post->category_id) && $val->	id == $post->category_id)
                                    <?php echo "selected"; ?>
                                    @endif
                                    >{{$val->id}}</option>>
                                @endforeach
                                
                            </select>
                        </div>
                </div>

                <div class="form-group">
                    <label><h4>Mô tả bài viết</h4></label>
                    <div class = "controls">
                        <input type="text" class="form-control" 
                        @if(isset($post->summary))
                        value="{{$post->summary}}"
                        @endif
                        name="uMota" placeholder="Nhập mô tả...">
                    </div>
                </div>

                <div class="control-group">
                    <label><h4>Nội dung bài viết</h4></label>
                        <div class="controls">
                            <textarea class="span8" id="editor-vip" name="uNoidung" rows="5">
                            @if(isset($post->detail))
                            {{$post->detail}}
                            @endif
                            </textarea>
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