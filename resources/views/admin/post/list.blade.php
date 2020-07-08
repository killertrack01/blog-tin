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
            <table id="listpost" class="table table-bordered">
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
                  @if($post->status==1)
                  <td>Đã duyệt</td>
                  @endif

                  @if($post->users_id==($id=auth()->user()->id))
                  <td><a href="{{ asset('admin/post/edit/'.$p->id) }}"><i class="fas fa-tools"></i><b> Sửa</b></a></td>
                  @else
                  <td></td>
                  @endif
                  <td><a href="{{ asset('admin/post/delete/'.$p->id) }}" onclick="return confirm(' bạn có muốn xóa ko ?')"><i class="fas fa-trash-alt"></i><b> Xóa</b></a></td>
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