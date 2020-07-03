<!-- Lưu tại resources/Chi tiếts/product/index.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách các bài viết')
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
      <h1>Danh sách bài viết</h1>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-12">
          <div class="table-responsive-xl">
            <table id="listpost" class="table table-light">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Tiêu đề</th>
                  <th>Tóm tắt </th>
                  <th>Loai tin</th>
                  <th>Tác giả</th>
                  <th>Ngày tạo</th>
                  <th>Ngày chỉnh sửa</th>
                  <th>Trạng thái</th>
                  <th>Sửa bài</th>
                  <th>Xóa loại</th>
                </tr>
              </thead>
              <tbody>
                @foreach($post as $p)
                <tr>
                  <td>{{ $p->id }}</td>
                  <td>
                    <p>{{ $p->title }}</p>
                    <img width="100px" src="{{ asset('img/upload/ava-post/'.$p->img) }}" alt="hình post">
                  </td>
                  <td width='150px'><p>{{ $p->summary }}</p></td>
                  <td>{{ $p->cate->name }}</td>
                  <td>{{ $p->user->name }}</td>
                  <td>{{ $p->created_at }}</td>
                  <td>{{ $p->updated_at }}</td>
                  <td>{{ $p->status }}</td>
                  <td><a href=""><span class="btn btn-primary">sua lai</span></a></td>
                  <td><a href="" onclick="return confirm(' bạn có muốn xóa ko ?')"><span class="btn btn-danger">xoa nha</span></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script-section')
<script>
  $(function() {
    $('#listpost').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>
@endsection