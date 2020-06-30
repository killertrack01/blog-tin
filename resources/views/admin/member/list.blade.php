<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách thành viên')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách thành viên</h3>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listmember" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $row)
                  @if ($row->role=='1')
                  <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->email }}</td>
                    <td>{{ $row->dob }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>{{ $row->tel }}</td>
                    <td class="text-center">
                        <form action="/delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Cảnh Báo Xóa Người Dùng !!!</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc muốn xóa Người Dùng ?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-danger">Xóa</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                        </form>
                    </td>
                  </tr>
                  @endif
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>STT</th>
                    <th>Email</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Số điện thoại</th>
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
    <!-- /.content -->
@endsection
@section('script-section')
  <script>
    $(function () {
      $('#listmember').DataTable({
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
