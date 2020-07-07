@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
@section('title','Danh sách bài')
@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          @if(session('alert'))
            <div class="alert alert-success">
                {{session('alert')}}
            </div>
            @endif
            Bài viết của tài khoản: {{ $id = auth()->user()->email}}
            <div class="card">
              <div class="card-header">
                <div class="card-title"><h3>Danh sách bài viết chưa được duyệt</h3></div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="upostlist" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tác giả</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Ảnh bìa</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                @foreach($posts as $key => $val)
                <tr class="odd gradeX">
                    <td width="3%">{{$key}}</td>
                    <td>{{$val->author}}</td>
                    <td>{{$val->title}}</td>
                    <td><img src="{{url('img/upload/ava-post/'.$val->img)}}" width="100px" height="100px"></td>
                    <td>{{$val->created_at}}</td>
                    <td>
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
<hr>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title"><h3>Danh sách bài viết đã được duyệt</h3></div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="newupostlist" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tiêu đề</th>
                    <th>Thể loại</th>
                    <th>Tác giả</th>
                    <th>Tóm tắt</th>
                    <th>Ảnh bìa</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach($p as $keys => $vals)
                <tr class="odd gradeX">
                    <td width="3%">{{$keys}}</td>
                    <td>{{$vals->title}}</td>
                    <td>
                      @foreach($cate as $c)
                      @if(isset($vals->category_id) && $c->id == $vals->category_id)
                        {{$c->name}}
                      @endif
                      @endforeach
                    </td>
                    <td>{{$vals->author}}</td>
                    <td width="20%"><p>{{$vals->summary}}</p></td>
                    <td><img src="{{url('img/upload/ava-post/'.$vals->img)}}" width="100px" height="100px"></td>
                    <td width="8%">{{$vals->created_at}}</td>
                    <td width="6%">
                        @if($vals->status == 0)
                            Chưa duyệt
                        @endif
                        @if($vals->status == 1)
                            Hoạt Động
                        @endif
                    </td>
                    <td width="7%">
                        <button type="button"><a href="{{route('home.get.content',$vals->id)}}">Chi tiết</a></button>
                        
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
      $('#newupostlist').DataTable({
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
