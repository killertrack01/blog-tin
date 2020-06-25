<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách comment')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách Comment</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listcmt" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>ID Bài</th>
                    <th>Nội dung</th>
                    <th>Nội dung phản hồi</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Bài viết hay quá</td>
                        <td>Cảm ơn bạn</td>
                        <td class="text-center">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt"></i> Trả lời
                          </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>Mình đồng ý với quan điểm này</td>
                        <td>Cảm ơn bạn</td>
                        <td class="text-center">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt"></i> Trả lời
                          </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2</td>
                        <td>Mình đồng ý với quam điểm của admin</td>
                        <td>Cảm ơn bạn</td>
                        <td class="text-center">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt"></i> Trả lời
                          </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>2</td>
                        <td>Tuyệt vời</td>
                        <td>Cảm ơn bạn</td>
                        <td class="text-center">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt"></i> Trả lời
                          </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>STT</th>
                    <th>ID Bài</th>
                    <th>Nội dung</th>
                    <th>Nội dung phản hồi</th>
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
      $('#listcmt').DataTable({
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
