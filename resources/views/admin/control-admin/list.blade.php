<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách Admin')
@section('content')
@if( Auth::user()->role =='2' )
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Danh sách Admin</h3>
            @if (session('status1'))
            <div class="alert alert-success" role="alert">
              {{ session('status1') }}
            </div>
            @endif
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="listadmin" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Email Admin</th>
                  <th>Họ Tên</th>
                  <th>Ngày Sinh</th>
                  <th>Tel</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
              <tbody>
                @foreach ($users as $row)
                @if ($row->role=='0')
                <tr>
                  <td>{{ $row->id }}</td>
                  <td>{{ $row->email }}</td>
                  <td>{{ $row->name }}</td>
                  <td>{{ $row->dob }}</td>
                  <td>{{ $row->tel }}</td>
                  <td class="text-center">
                    <form action="/delete-admin/{{ $row->id }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash"></i></button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cảnh Báo Xóa Admin !!!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Bạn có chắc muốn xóa Admin ?
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
@else

<style>
  @import url('//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  .isa_error {
    color: #D8000C;
    background-color: #FFD2D2;
    margin: 10px 0px;
    padding: 12px;
    font-size: 2em;
    vertical-align: middle;
  }
</style>
<section class="content">
  <div class="contaner">
    <div class="col-12">
      <div class="isa_error">
        <i class="fa fa-warning"></i>
        BẠN KHÔNG CÓ QUYỀN XEM PHẦN NÀY!!!
      </div>
    </div>
  </div>
</section>
@endif
@endsection