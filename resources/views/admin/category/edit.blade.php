@extends('admin.layout.master')
@section('title', 'Sửa loại tin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 text-center">
            <h3>
                Sửa thể loại
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
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
            <form action="/admin/category/edit/{{$cate->id}}" method="POST">
            {{ csrf_field() }}
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
</div>
@endsection