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
                    <th>Tác  giả</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>FPT Software tuyển nhân viên</td>
                        <td>Chủ tịch tập đoàn FPT tuyên bố tuyển nhân sự...</td>
                        <td>21/6/2020</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder"></i> Chi tiết
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt"></i> Duyệt
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Xóa
                            </a>
                      </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>FPT Software tuyển nhân viên</td>
                        <td>Chủ tịch tập đoàn FPT tuyên bố tuyển nhân sự...</td>
                        <td>21/6/2020</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder"></i> Chi tiết
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt"></i> Duyệt
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Xóa
                            </a>
                      </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>nguyenvana@gmail.com</td>
                        <td>FPT Software tuyển nhân viên</td>
                        <td>Chủ tịch tập đoàn FPT tuyên bố tuyển nhân sự...</td>
                        <td>21/6/2020</td>
                        <td class="text-center">
                            <a class="btn btn-primary btn-sm" href="#">
                                <i class="fas fa-folder"></i> Chi tiết
                            </a>
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt"></i> Duyệt
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
                    <th>Tác  giả</th>
                    <th>Tiêu đề</th>
                    <th>Tóm tắt</th>
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
@endsection
