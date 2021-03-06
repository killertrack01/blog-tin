@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="padding:50px">
            <div class="col-md-12" >
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h4 class="text-center text-justify">Cập nhật thông tin cá nhân</h4>
                    </div>
                    <div class="card-body">
                        <form action="/user-updateIF/{{ $users->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <input type="text" name="name" value="{{ $users->name }}" class="form-control @error('name') is-invalid @enderror" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                
                                <input type="text" name="email" value="{{ $users->email }}" class="form-control @error('email') is-invalid @enderror"  required>
                                @if (session('status'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    @if($errors->has('email'))
                                    <span>
                                    <strong class="text-danger"> {{$errors->first('email')}}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh </label>
                                <input type="date" id="birthday" name="dob" max="2010-01-01">
                            </div>
                            <div class="form-group">
                                <label>Giới Tính</label>    
                                <select name="gender" value="{{ $users->gender }}" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="M">Nam</option>
                                    <option value="F">Nữ</option>
                                    <option value="O">Không Xác Định</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="tel" name="tel" value="{{ $users->tel }}" class="form-control @error('tel') is-invalid @enderror" >
                                    @if($errors->has('tel'))
                                    <span>
                                    <strong class="text-danger"> {{$errors->first('tel')}}</strong>
                                    </span>
                                    @endif
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