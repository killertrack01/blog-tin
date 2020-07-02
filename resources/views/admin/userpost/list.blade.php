<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách tin chờ')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách Bài viết đang chờ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="upostlist" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tác giả</th>
                    <th>Tên người đăng</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Ảnh bìa</th>
                    <th>Ngày đăng</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $key => $val)
                  <tr class="odd gradeX">
                    <td width="3%">{{$key}}</td>
                    <td>{{$val->author}}</td>
                    @foreach($user as $u)
                    @if($u->id === $val->users_id)
                      <td>{{$u->name}}</td>
                    @endif
                    @endforeach
                    <td>{{$val->title}}</td>
                    <td>{{$val->summary}}</td>
                    <td><img src="{{url('images/'.$val->img)}}" width="100px" height="100px"></td>
                    <td width="8%">{{$val->created_at}}</td>
                    <td class="text-right" width="15%">
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt"></i> Duyệt
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash"></i> Xóa
                        </a>
                        <a class="btn btn-default btn-sm" href="{{route('userpost',$val->id)}}">
                            <i class="fas fa-view"></i> Chi tiết
                        </a>
                      </td>
                </tr>
                @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Tác giả</th>
                    <th>ID Tác giả</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Ảnh bìa</th>
                    <th>Ngày đăng</th>
                    <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection
@section('script-section')
<script>
    $(function () {
      $('#upostlist').DataTable({
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
  <script>
		$(document).ready(function() 
    {
			$(function() {
    			$('.xacnhan').click(function(e) {
					if (!confirm('Bạn chắc chắn không ? ')) {
						e.preventDefault();
					}
    			});
			});
		});
	</script>
@endsection
