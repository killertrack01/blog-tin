@extends('admin.layout.master')
@section('title', 'Danh sách thể loại tin')
@section('content')
<div class="container-fluid">
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
        <tr>
          @foreach($cate as $c)
          <td>{{$c->id}}</td>
          <td>{{$c->name}}</td>
          <td>{{$c->description}}</td>
          <td>{{$c->created_at}}</td>
          <td>{{$c->updated_at}}</td>
          <td><span class="btn btn-primary">sua lai</span></td>
          <td><span class="btn btn-danger">xoa nha</span></td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection