<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Thêm Admin')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2>Thêm Admin</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="#" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label><h4>Tên Admin</h4></label>
                                    <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Nhập tên Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Email Admin</h4></label>
                                    <input type="text" class="form-control" id="admin_email" name="admin_name" placeholder="Nhập tên Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Mật khẩu</h4></label>
                                    <input type="text" class="form-control" id="admin_pass" name="admin_name" placeholder="Nhập tên Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Nhập lại mật khẩu</h4></label>
                                    <input type="text" class="form-control" id="admin_repass" name="admin_name" placeholder="Nhập tên Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Ngày sinh</h4></label>
                                    <input type="text" class="form-control" id="admin_dbo" name="admin_name" placeholder="Nhập tên Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Số điện thoại</h4></label>
                                    <input type="text" class="form-control" id="admin_tel" name="admin_name" placeholder="Nhập tên Admin">
                                </div>
                                <label for="image"><h4>Avata</h4></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image_admin" name="image_admin">
                                            <label class="custom-file-label" for="image">Chọn ảnh</label>
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <label>Phân công</label>
                                    <div class="controls">
                                        <select tabindex="1" name="admin_status" id="admin_status" data-placeholder="Chọn trạng thái.." class="span8">
                                            <option value="">Chọn ở đây..</option>
                                        </select>
                                    </div>
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
