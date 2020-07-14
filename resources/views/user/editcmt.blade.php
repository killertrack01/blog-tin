@extends('layouts.app')
@section('title', 'Sửa bình luận')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-6 ">
            <div class="card" style="margin-top: 50px;">
                <div class="card-header">
                    <h2 class="text-uppercase text-center"> Chỉnh sửa bình luận </h2>
                </div>
                <div class="card-body">
             
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            @if(session('alert'))
                            <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                                {{session('alert')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <form action="{{ asset('user/editcmt/'.$comment->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h5 style='font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Nội dung</b></h5>
                            <input type="text" name="detail" class="form-control" placeholder="Chỉnh sửa bình luận" value="{{$comment->detail}}">
                        </div>
                </div>
                <div class="card-footer">
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" class="btn btn-primary" value="Xác nhận" style="margin-right: 15px;">
                        <input type="reset" class="btn btn-secondary" value="Hủy">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection