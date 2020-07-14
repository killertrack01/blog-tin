@extends('admin.layout.master')
@section('title', 'Thêm Admin')
@section('content')
@if( Auth::user()->role =='2' )
<section class="content" style="padding:50px">
    <div class="card">
        <div class="card-title text-center bg-dark" style="padding:10px">Tạo Admin</div>
        <div class="card-body">
        <div class="form-group">
    <form>
    <label>Họ Tên<a class="text-red">*</a></label>
    <input type="name" class="form-control" name="name" placeholder="Vui lòng nhập họ tên admin">
            </div>
            <div class="form-group">
                <label>Email<a class="text-red">*</a></label>
                <input type="email" class="form-control" name="email" placeholder="Vui lòng nhập email">
            </div>
            <div class="form-group">
                <label>Mật Khẩu<a class="text-red">*</a></label>
                <input type="email" class="form-control" name="password" placeholder="Vui lòng nhập mật khẩu">
            </div>
            <div class="form-group">
                <label>Nhập lại Mật khẩu<a class="text-red">*</a></label>
                <input type="email" class="form-control" name="repassword" placeholder="Vui lòng nhập lại mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary">Tạo Admin</button>
            </form>
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