<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Tạo bài viết mới')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2>Tạo bài viết mới</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="#" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label><h4>Tiêu đề bài viết</h4></label>
                                    <input type="text" class="form-control" id="txt-title" name="title" placeholder="Nhập tiêu đề">
                                </div>
                                <div class="form-group">
                                    <label for="txt-author"><h4>Tác giả</h4></label>
                                    <input type="text" class="form-control" id="txt-author" name="name" placeholder="Nhập tên tác giả">
                                </div>
                                <div class="form-group">
                                    <label for="image"><h4>Ảnh đại diện bài viết</h4></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Chọn ảnh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="txt-category" for="basicinput">Thể loại</label>
                                    <div class="controls">
                                        <select tabindex="1" name="txt-category" data-placeholder="Chọn thể loại.." class="span8">
                                            <option value="">Chọn ở đây..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="txt-status" for="basicinput">Trạng thái</label>
                                    <div class="controls">
                                        <select tabindex="1" name="txt-status" data-placeholder="Chọn thể loại.." class="span8">
                                            <option value="">Chọn ở đây..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><h4>Mô tả bài viết</h4></label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label><h4>Nội dung bài viết</h4></label>
                                    <textarea name="details" class="textarea" placeholder="Place some text here"
                                        style="width: 150px; height: 300px; font-size: 14px; line-height: 30px; border: 1px solid #dddddd; padding: 10px;">
                                    </textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script-section')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
