<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Tạo thể loại tin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 text-center">
            <h1>
                <b>Thêm loại bài viết</b>
            </h1>
        </div>
    </div>
    <!--thông báo là đã thêm thành công hay chưa-->
    <div class="row">
        <div class="col-xl-6">
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
        <div class="col-xl-7">
            <form action="/admin/category/create" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Tên loại bài viết</label>
                    <input type="text" class="form-control" name="cateName" require placeholder="Tên loại bài bạn muốn thêm">
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <input type="text" class="form-control" name="description" require placeholder="Mô tả cho loại bài bạn sẽ thêm">
                </div>
                <div class="form-row text-center">
                    <div class="form-group offset-9"></div>
                    <div class="form-group col-xl-3 text-right">
                        <input type="submit" class="btn btn-primary" value="Xác nhận">
                        <input type="reset" class="btn btn-secondary" value="Hủy">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script-section')

@endsection