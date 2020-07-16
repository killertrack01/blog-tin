<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách thành viên')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row d-flex justify-content-center" style="padding:50px">
          <div class="col-xl-11">
            <div class="card" style="margin-top: 50px;">
              <div class="card-header bg-dark">
                <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'>Danh sách thành viên</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row d-flex justify-content-center">
                  <div class="col">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  </div>
                </div>
                <div class="table-responsive">
                <table id="listmember" class="table table-bordered">
                  <thead class="thead-dark">
                  <tr>
                    <th class="align-middle text-center" style="width:5%">ID</th>
                    <th class="align-middle text-center" style="width:5%">Email</th>
                    <th class="align-middle text-center" style="width:5%">Họ tên</th>
                    <th class="align-middle text-center" style="width:5%">Ngày sinh</th>
                    <th class="align-middle text-center" style="width:5%">Giới tính</th>
                    <th class="align-middle text-center" style="width:5%">Số điện thoại</th>
                    <th class="align-middle text-center" style="width:5%">Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $row)
                  @if ($row->role=='1')
                  <tr>
                    <td class="align-middle">{{ $row->id }}</td>
                    <td class="align-middle">{{ $row->name }}</td>
                    <td class="align-middle">{{ $row->email }}</td>
                    <td class="align-middle">{{ $row->dob }}</td>
                    <td class="align-middle">{{ $row->gender }}</td>
                    <td class="align-middle">{{ $row->tel }}</td>
                    <td class="text-center">
                    
                        <form action="/delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            @if( now() > $row->banned_until)
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-ban"></i></button>
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Cảnh Báo khóa Người Dùng !!!</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn có chắc muốn khóa Người Dùng ?
                                        </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-danger">Khóa</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  @else
                                  
                                  <a href="{{ asset('admin/member/unlock/'.$row->id) }}" onclick="return confirm(' Bạn Có Chắc Muốn Mở Khóa Người Dùng Này?')">
                                    <span class="btn btn-success btn-sm"><i class="fa fa-key"></i></span>
                                  </a>
                                  @endif
                        </form>
                        
                       
                    </td>
                  </tr>
                  @endif
                  @endforeach
                  </tbody>
                </table>
              </div>
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
  $(function() {
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