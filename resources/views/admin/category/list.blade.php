@extends('admin.layout.master')
@section('title', 'Danh sách thể loại tin')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-xl-12">
      @if(session('alert'))
      <div class="alert alert-success">
        {{session('alert')}}
      </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <h1>Danh sách thể loại bài viết</h1>
    </div>
    <div class="col-xl-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#ID</th>
            <th>Tên loại bài</th>
            <th>Mô tả bài</th>
            <th>Ngày tạo</th>
            <th>Ngày chỉnh sửa</th>
            <th>Sửa tên loại</th>
            <th>Xóa loại</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cate as $c)
          <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>{{$c->description}}</td>
            <td>{{$c->created_at}}</td>
            <td>{{$c->updated_at}}</td>
            <td><a href="{{ asset('admin/category/edit/'.$c->id) }}"><i class="fas fa-tools"></i><b> Sửa</b></a></td>
            <td><a href="{{ asset('admin/category/delete/'.$c->id) }}" onclick="return confirm(' bạn có muốn xóa ko ?')"><i class="fas fa-trash-alt"></i><b> Xóa</b> </a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection