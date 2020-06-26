<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Tạo bài viết')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 text-center">
            <h3>Bài viết mới</h3>
        </div>
        <div class="col-xl-12">
            <form>
                <div class="form-row">
                    <!--Title-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label for="">Tiêu đề bài viết</label>
                        <input type="text" class="form-control" name="txt-title" placeholder="Tiêu đề của bài viết">
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--summary-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label for="">Sơ lược về bài viết</label>
                        <textarea class="form-control" name="" placeholder="sơ lược về bài viết"></textarea>
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--Img post-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label for="">Hình tượng chưng cho bài viết</label>
                        <button class="btn btn-secondary"><b>file ảnh</b></button>
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--img post-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label for="">Chi tiết bài viết</label>
                        <textarea name="edit1" id="edit1" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--authot-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label for="">Tác giả</label>
                        <input type="text" class="form-control" name="txt-author" placeholder="tên người viết">
                    </div>
                    <div class="form-group col-xl-4"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script-section')
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('edit1');
</script>
@endsection