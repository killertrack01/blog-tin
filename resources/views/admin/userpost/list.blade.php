@extends('admin.layout.master')
@section('title', 'Danh sách tin chờ')
@section('content')
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-xl-11">
      <div class="card" style="margin-top: 50px;">
        <div class="card-header bg-dark">
          <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'>Danh sách Bài viết đang chờ </h2>
        </div>
        <div class="card-body">
          <!--thông báo là đã thêm thành công hay chưa-->
          <div class="row d-flex justify-content-center">
            <div class="col">
              @if(session('alert'))
              <div class="alert alert-success">
                {{session('alert')}}
              </div>
              @endif
            </div>
          </div>
          <a href="{{ url('admin/userpost/report') }}">
              <h3><span class="btn btn-outline-warning"><i>Report</i></span></h3>
            </a>
          <div class="table-responsive">
            <table id="listPost" class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th class="align-middle text-center">STT</th>
                  <th class="align-middle text-center">Tác giả</th>
                  <th class="align-middle text-center">Tên người đăng</th>
                  <th class="align-middle text-center">Tiêu đề</th>
                  <th class="align-middle text-center">Tóm tắt</th>
                  <th class="align-middle text-center">Ảnh bìa</th>
                  <th class="align-middle text-center">Ngày đăng</th>
                  <th class="align-middle text-center">Thao tác</th>
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
                    <td><img src="{{url('img/upload/ava-post/'.$val->img)}}" width="100px" height="100px"></td>
                    <td width="8%">{{$val->created_at}}</td>
                    <td class="align-middle text-center">
                        <a href="{{route('AdminUpdateStatus',$val->id)}}">
                          <span class="badge badge-success"><i class="fas fa-pencil-alt"></i> Duyệt</span>
                        </a>
                        <a class="xacnhan" href="{{route('AdmindeletePost',$val->id)}}">
                        <span class="badge badge-danger"><i class="fas fa-trash"></i> Xóa</span>
                        </a>
                        <a href="{{route('userpost',$val->id)}}">
                        <span class="badge badge-primary"><i class="fas fa-street-view"></i> Chi tiết</span>
                        </a>
                      </td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                  <th class="align-middle text-center">STT</th>
                  <th class="align-middle text-center">Tác giả</th>
                  <th class="align-middle text-center">Tên người đăng</th>
                  <th class="align-middle text-center">Tiêu đề</th>
                  <th class="align-middle text-center">Tóm tắt</th>
                  <th class="align-middle text-center">Ảnh bìa</th>
                  <th class="align-middle text-center">Ngày đăng</th>
                  <th></th>
                </tr>
                </tfoot>
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
