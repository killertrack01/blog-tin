@extends('admin.layout.master')
@section('title', 'Sửa loại tin')
@section('content')
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-xl-12 text-center">
            <h3>
                Sửa thể loại
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="offset-xl-2 col-xl-6">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                {{$err}} <br>
                @endforeach
            </div>
            @endif

            @if(session('alert'))
            <div class="alert alert-success">
                {{session('alert')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="offset-xl-2"></div>
        <div class="col-xl-6">
            <form action="{{ asset('admin/category/edit/'.$cate->id) }}" method="POST">
                <div class="form-group">
                    <label>Tên thể loại</label>
                    <input type="text" name="name" class="form-control" placeholder="Chỉnh sửa tên loại" value="{{$cate->name}}" />
                </div>
                <div class="form-group">
                    <label>Mô tả thể loại</label>
                    <input type="text" name="description" class="form-control" placeholder="Chỉnh sửa mô tả" value="{{$cate->description}}">
                </div>
                <div class="form-row">
                    <div class="form-group offset-xl-9"></div>
                    <div class="form-group col-xl-3">
                        <input type="submit" class="btn btn-primary">
                        <input type="reset" class="btn btn-secondary">
                    </div>
                </div>
            </form>
        </div>
    </div>
 -->

    <!-------------------------------------------------->
    <div class="row d-flex justify-content-center">
        <div class="col-xl-6 ">
            <div class="card" style="margin-top: 50px;">
                <div class="card-header bg-dark">
                    <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'> Thêm loại bài viết </h2>
                </div>
                <div class="card-body">
                    <!--thông báo là đã thêm thành công hay chưa-->
                    <div class="row d-flex justify-content-center">
                        <div class="col">
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                {{$err}} <br>
                                @endforeach
                            </div>
                            @endif

                            @if(session('alert'))
                            <div class="alert alert-success">
                                {{session('alert')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <form action="{{ asset('admin/category/edit/'.$cate->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h5 style='font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Tên loại bài viết</b></h5>
                            <input type="text" name="name" class="form-control" placeholder="Chỉnh sửa tên loại" value="{{$cate->name}}" />
                        </div>
                        <div class="form-group">
                            <h5 style='font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Mô tả thể loại bài viết</b></h5>
                            <input type="text" name="description" class="form-control" placeholder="Chỉnh sửa mô tả" value="{{$cate->description}}">
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