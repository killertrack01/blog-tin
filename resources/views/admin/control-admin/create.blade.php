<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@section('title', 'Nâng cấp người dùng')
@section('content')
@if( Auth::user()->role =='2')
<section class="content">
  <div class="container-fluid">
    <div class="row d-flex justify-content-center" style="padding:50px">
      <div class="col-xl-11">
        <div class="card" style="margin-top: 50px;">
          <div class="card-header bg-dark">
          <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'>Thêm người dùng thành Admin</h2>
            
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
            <table id="listadmin" class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th class="align-middle text-center">Id</th>
                  <th class="align-middle text-center">Email Admin</th>
                  <th class="align-middle text-center">Họ Tên</th>
                  <th class="align-middle text-center">Ngày Sinh</th>
                  <th class="align-middle text-center">Tel</th>
                  <th class="align-middle text-center">Thao tác</th>
                </tr>
              </thead>
              <tbody>
              <tbody>
                @foreach ($users as $row)
                @if ($row->role=='1')
                <tr>
                  <td class="align-middle">{{ $row->id }}</td>
                  <td class="align-middle">{{ $row->email }}</td>
                  <td class="align-middle">{{ $row->name }}</td>
                  <td class="align-middle">{{ $row->dob }}</td>
                  <td class="align-middle">{{ $row->tel }}</td>
                  <td class="text-center">
                    <form action="/admin/control-admin/create/{{ $row->id }}" method="Post">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-unlock"> Thêm admin</i></button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Cảnh Báo Thêm Admin !!!</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Bạn có chắc muốn thêm người dùng này thành Admin ?
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-success">Thêm</button>
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
