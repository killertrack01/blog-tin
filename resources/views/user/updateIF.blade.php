@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h4 class="text-center text-justify">Cập nhật thông tin cá nhân</h4>
                        @if (session('status'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                    </div>
                    <div class="card-body">
                        <form action="/user-updateIF/{{ $users->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input type="text" name="name" value="{{ $users->name }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $users->email }}" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh </label>
                                <input type="date" id="birthday" name="dob" max="2010-01-01">
                            </div>
                            <div class="form-group">
                                <label>Giới Tính</label>    
                                <select name="gender" value="{{ $users->gender }}" class="form-control">
                                    <option value="M">Nam</option>
                                    <option value="F">Nữ</option>
                                    <option value="O">Không Xác Định</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="tel" name="tel" value="{{ $users->tel }}" class="form-control" pattern="((03|02|09|07|08)+[0-9]{8})">
                            </div>
                            <button type="submit" class="btn btn-success"> Cập Nhật</button>
                            <a href="/info" class="btn btn-danger"> Quay Lại</a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection