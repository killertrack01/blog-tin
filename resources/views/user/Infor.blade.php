@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12"><div class="card">
                        <div class="card-body">
                            @guest
                                        <div><a href="{{ route('login') }}">{{ __('Đăng Nhập') }}</a></div>
                                        
                                    @if (Route::has('register'))
                                        <div><a href="{{ route('register') }}">{{ __('Đăng ký') }}</a></div>
                                    @endif
                            @else
                                <h5><b>Thông tin cá nhân</b></h5>
                                    @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                    @endif
                                    @foreach( $users as $row)
                                        @if($row->id==($id=auth()->user()->id))
                                        <div><h5><b>Họ Tên:</b>{{ $row->name }}</h5></div>
                                        <div><h5><b>Email:</b> {{ $row->email }}</h5></div>
                                        @if($row->gender=='M')
                                        <div><h5><b>Giới Tính:</b> Nam </h5></div>
                                        @else
                                            @if($row->gender=='F')
                                            <div><h5><b>Giới Tính:</b> Nữ </h5></div>
                                            @else
                                            <div><h5><b>Giới Tính:</b> Không Xác Định </h5></div>
                                            @endif
                                        @endif
                                        <div><h5><b>Ngày Sinh:</b> {{ $row->dob }}</h5></div>
                                        <div><h5><b>Số điện thoại:</b> {{ $row->tel }}</h5></div>
                                        <br>
                                        <button type="button" class="btn btn-info"><a href="/updateIF/{{ $row->id }}"><b>Cập Nhật Thông Tin</b></a></button> 
                                        @endif 
                                    @endforeach      
                            @endguest 
                        </div> 
                    </div>
                </div>
            </div>
        </div>
@endsection