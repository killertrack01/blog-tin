<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách Admin')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listadmin" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Email Admin</th>
                    <th>Họ Tên</th>
                    <th>Phân công</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>superadmin@gmail.com</td>
                        <td>Nguyễn Văn Admin</td>
                        <td>Quản lý tổng</td>
                        <td class="text-center">
                            <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt"></i> Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Xóa
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>mediumadmin@gmail.com</td>
                        <td>Trần Thị Admin</td>
                        <td>Quản Bài</td>
                        <td class="text-center">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-trash"></i> Sửa
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Xóa
                            </a>
                        </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>Email Admin</th>
                    <th>Họ Tên</th>
                    <th>Phân công</th>
                    <th>Thao tác</th>
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
      $('#listadmin').DataTable({
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
