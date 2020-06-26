<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Sửa bài viết')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <form>
                <div class="form-row">
                    <!--Title-->
                    <div class="form-group col-xl-3">
                        <h4>Tiêu đề bài post</h4>
                    </div>
                    <div class="form-group col-xl-9">
                        <input type="text" name="txt-title" >
                    </div>
                    <!--summary-->
                    <div class="form-group col-xl-3">
                        <h4>Sơ lược bài viết</h4>
                    </div>
                    <div class="form-group col-xl-9">
                        <input type="text" name="" id="">
                    </div>
                    <!--detail post-->
                    <div class="form-group col-xl-3">
                        <h4>Chi tiết của bài viết</h4>
                    </div>
                    <div class="form-group col-xl-9">
                        <input type="text" name="" id="">
                    </div>
                    <!--img post-->
                    <div class="form-group col-xl-3">
                        <h4>Ảnh đại diện của bài</h4>
                    </div>
                    <div class="form-group col-xl-9">
                        <input type="text" name="" id="">
                    </div>
                    <!--authot-->
                    <div class="form-group col-xl-3">
                        <h4>Tác giả của bài đăng</h4>
                    </div>
                    <div class="form-group col-xl-9">
                        <input type="text" name="" id="">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection