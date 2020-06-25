<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách Feedback')
@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách Feedback</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listfeedback" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>STT</th>
                    <th>Email user</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach( $feedback as $row )
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->detail }}</td>
                        <td>{{ $row->status }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>STT</th>
                        <th>Email user</th>
                        <th>Nội dung</th>
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
@endsection
@section('script-section')
<script>
    $(function () {
      $('#listfeedback').DataTable({
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
