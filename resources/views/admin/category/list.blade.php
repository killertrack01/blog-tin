<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách thể loại tin')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách thể loại tin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listcate" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên thể loại</th>
                    <th>Mô tả</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>PC Gaming</td>
                        <td>Máy tính bàn, cấu hình cao, mạnh mẽ</td>
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
                        <td>1</td>
                        <td>PC Gaming</td>
                        <td>Máy tính bàn, cấu hình cao, mạnh mẽ</td>
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
                        <td>1</td>
                        <td>PC Gaming</td>
                        <td>Máy tính bàn, cấu hình cao, mạnh mẽ</td>
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
                        <td>1</td>
                        <td>PC Gaming</td>
                        <td>Máy tính bàn, cấu hình cao, mạnh mẽ</td>
                        <td class="text-center">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt"></i> Sửa
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
                    <th>Tên thể loại</th>
                    <th>Mô tả</th>
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
      $('#listcate').DataTable({
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
