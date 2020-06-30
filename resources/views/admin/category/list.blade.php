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
    <table class="table table-light">
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
          <td><a href="/admin/category/edit/{{$c->id}}"><span class="btn btn-primary">sua lai</span></a></td>
          <td><a href="/admin/category/delete/{{$c->id}}"onclick="return confirm(' bạn có muốn xóa ko ?')"><span class="btn btn-danger">xoa nha</span></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection