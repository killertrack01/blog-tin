@extends('admin.layout.master')
@section('title', 'Thêm Admin')
@section('content')
@if( Auth::user()->role =='2' )
<section class="content" style="padding:50px">
    <div class="card">
        <div class="card-title text-center bg-dark" style="padding:10px">Tạo Admin</div>
        <div class="row d-flex justify-content-center">
                  <div class="col">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
                </div>
        <div class="card-body">
        <div class="form-group">
    <form action="{{ route('add')}}" method="post">
    {{ csrf_field() }}
    {{ method_field('GET') }}
    <label>Họ Tên<a class="text-danger">*</a></label>
    <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Vui lòng nhập họ tên admin">
    @if($errors->has('name'))
    <span>
    <strong class="text-danger"> {{$errors->first('name')}}</strong>
    </span>
    @endif
            </div>
            <div class="form-group">
                <label>Email<a class="text-danger">*</a></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Vui lòng nhập email">
                @if($errors->has('email'))
                <span>
                <strong class="text-danger"> {{$errors->first('email')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Mật Khẩu<a class="text-danger">*</a></label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Vui lòng nhập mật khẩu">
                @if($errors->has('password'))
                <span>
                <strong class="text-danger"> {{$errors->first('password')}}</strong>
                </span>
                @endif
            </div>
            <div class="form-group">
                <label>Nhập lại Mật khẩu<a class="text-danger">*</a></label>
                <input type="password" class="form-control @error('repassword') is-invalid @enderror" name="repassword" placeholder="Vui lòng nhập lại mật khẩu">
                @if (session('status1'))
                <span>
                <strong class="text-danger"> {{ session('status1') }}</strong>
                </span>
                @endif
                @if($errors->has('password'))
                <span>
                <strong class="text-danger"> {{$errors->first('repassword')}}</strong>
                </span>
                @endif
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