@extends('layouts.app')
@section('title','Danh sách bài')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bài viết của tài khoản: {{ $id = auth()->user()->email}}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="upostlist" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Tóm tắt</th>
                    <th>Ảnh bìa</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($posts as $key => $val)
                <tr class="odd gradeX">
                    <td width="3%">{{$key}}</td>
                    <td>{{$val->title}}</td>
                    <td>{{$val->author}}</td>
                    <td>{{$val->summary}}</td>
                    <td><img src="{{url('images/'.$val->img)}}" width="100px" height="100px"></td>
                    <td width="8%">{{$val->created_at}}</td>
                    <td width="6%">
                        @if($val->status == 0)
                            Chưa duyệt
                        @endif
                        @if($val->status == 1)
                            Hoạt Động
                        @endif
                    </td>
                    <td width="7%">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Tasks
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu" style="width:80px;min-width:0px;">
                                <li><a href="{{route('edit',$val->id)}}"><b>Sửa</b></a>
                                <li class="divider"></li>
                                <li class="xacnhan"><a href="{{route('deletePost',$val->id)}}"><b>Xóa</b></a>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
                  <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Tóm tắt</th>
                    <th>Ảnh bìa</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
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
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
@section('script')
<script>
      $('#upostlist').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
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