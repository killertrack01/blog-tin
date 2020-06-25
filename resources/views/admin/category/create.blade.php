<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Tạo thể loại tin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2>Tạo thể loại mới</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="#" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label><h4>Tên thể loại</h4></label>
                                    <input type="text" class="form-control" id="cate_name" name="cate_name" placeholder="Nhập tên thể loại">
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <div class="controls">
                                        <select tabindex="1" name="cate_status" id="cate_status" data-placeholder="Chọn trạng thái.." class="span8">
                                            <option value="">Chọn ở đây..</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label><h4>Mô tả thể loại</h4></label>
                                    <textarea class="form-control" rows="3" id="cat_description" name="cat_description" placeholder="Enter ..."></textarea>
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

@endsection
