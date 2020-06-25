<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Sửa bài viết')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2>Sửa bài viết</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="#" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="txt-title-edit"><h4>Tiêu đề bài viết</h4></label>
                                    <input type="text" class="form-control" id="txt-title-edit" name="title-control-edit" placeholder="Nhập tiêu đề">
                                </div>
                                <div class="form-group">
                                    <label for="txt-author-edit"><h4>Tác giả</h4></label>
                                    <input type="text" class="form-control" id="txt-author-edit" name="name" placeholder="Nhập tên tác giả">
                                </div>
                                <div class="form-group">
                                    <label for="image-edit">Ảnh đại diện bài viết</label>
                                    <img class="img-fluid" />
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image-edit" name="image-edit">
                                            <label class="custom-file-label" for="image-edit">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="txt-category-edit" for="basicinput">Thể loại</label>
                                    <div class="controls">
                                        <select tabindex="1" name="txt-category-edit" data-placeholder="Chọn thể loại.." class="span8">
                                            <option value="">Chọn ở đây..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="txt-status-edit" for="basicinput">Trạng thái</label>
                                    <div class="controls">
                                        <select tabindex="1" name="txt-status-edit" data-placeholder="Chọn thể loại.." class="span8">
                                            <option value="">Chọn ở đây..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><h4>Mô tả bài viết</h4></label>
                                    <textarea class="form-control" rows="3" name="txt-description-edit" placeholder="Enter ..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label><h4>Nội dung bài viết</h4></label>
                                    <textarea name="txt-details-edit" class="textarea" placeholder="Place some text here"
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
