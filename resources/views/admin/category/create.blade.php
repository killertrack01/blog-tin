<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Tạo thể loại tin')
@section('content')
<div class="container-fluid">
    <!-- <div class="row">
        <div class="offset-xl-4"></div>
        <div class="col-xl-4">
            <form action="{{ asset('admin/category/create') }}" method="POST">
                <div class="form-group">
                    <label for="">Tên loại bài viết</label>
                    <input type="text" class="form-control" name="cateName" placeholder="Tên loại bài bạn muốn thêm">
                </div>
                <div class="form-group">
                    <label for="">Chi tiết</label>
                    <input type="text" class="form-control" name="description" placeholder="Mô tả cho loại bài bạn sẽ thêm">
                </div>
                <div class="form-row text-center">
                    <div class="form-group offset-3"></div>
                    <div class="form-group col-xl-9 text-right">
                        <input type="submit" class="btn btn-primary" value="Xác nhận">
                        <input type="reset" class="btn btn-secondary" value="Hủy">
                    </div>
                </div>
            </form>
        </div>
    </div> -->
    <!-- ---------------------------------------------------- -->
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
                    <form action="{{ asset('admin/category/create') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <h5 style='font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Tên loại bài viết</b></h5>
                            <input type="text" class="form-control" name="cateName" placeholder="Tên loại bài bạn muốn thêm">
                        </div>
                        <div class="form-group">
                            <h5 style='font-family: TimesNewRoman,"Times New Roman",Times,Baskerville,Georgia,serif'><b>Mô tả thể loại bài viết</b></h5>
                            <input type="text" class="form-control" name="description" placeholder="Mô tả cho loại bài bạn sẽ thêm">
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
@section('script-section')

@endsection