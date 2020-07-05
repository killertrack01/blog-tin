<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Sửa Admin')
@section('content')
@if( Auth::user()->role =='2')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h2>Sửa Admin</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="#" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label><h4>Tên Admin</h4></label>
                                    <input type="text" class="form-control" id="admin_name_edit" name="admin_name_edit" placeholder="Nhập tên Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Email Admin</h4></label>
                                    <input type="text" class="form-control" id="admin_email_edit" name="admin_email_edit" placeholder="Nhập email Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Mật khẩu</h4></label>
                                    <input type="text" class="form-control" id="admin_pass_edit" name="admin_pass_edit" placeholder="Nhập mật khẩu Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Nhập lại mật khẩu</h4></label>
                                    <input type="text" class="form-control" id="admin_repass_edit" name="admin_repass_edit" placeholder="Nhập lại mật khẩu Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Ngày sinh</h4></label>
                                    <input type="text" class="form-control" id="admin_dbo_edit" name="admin_dbo_edit" placeholder="Nhập ngày sinh Admin">
                                </div>
                                <div class="form-group">
                                    <label><h4>Số điện thoại</h4></label>
                                    <input type="text" class="form-control" id="admin_tel_edit" name="admin_tel_edit" placeholder="Nhập số điện thoại Admin">
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
    @else

<style>
  @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  .isa_error {
    color: #D8000C;
    background-color: #FFD2D2;
    margin: 10px 0px;
    padding: 12px;
    font-size: 2em;
    vertical-align: middle;
  }
</style>
<section class="content">
  <div class="contaner">
    <div class="col-12">
      <div class="isa_error">
        <i class="fa fa-warning"></i>
        BẠN KHÔNG CÓ QUYỀN XEM PHẦN NÀY!!!
      </div>
    </div>
  </div>
</section>
@endif
@endsection
@section('script-section')

@endsection
