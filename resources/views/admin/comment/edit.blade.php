@extends('admin.layout.master')
@section('title', 'Sửa bình luận')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-6 ">
            <div class="card" style="margin-top: 50px;">
                <div class="card-header bg-dark">
                    <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'> Chỉnh sửa bình luận </h2>
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
                    <form action="{{ url("admin/comment/edit/{$comment->id}") }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h5 style='font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Nội dung</b></h5>
                            <input type="text" name="detail" class="form-control" placeholder="Chỉnh sửa bình luận" value="{{$comment->detail}}">
                            @if($errors->has('detail'))
                            <p class="alert alert-danger">{{$errors->first('detail')}}</p>
                            @endif
                        </div>
                </div>
                <div class="card-footer">
                    <div class="form-group d-flex justify-content-end">
                        <a href="{{ url("admin/comment/list") }}"><i class="btn btn-success" style="margin-right: 250px;"> Quay lại </i></a>
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