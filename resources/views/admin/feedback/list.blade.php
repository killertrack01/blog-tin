@extends('admin.layout.master')
@section('title', 'Danh sách phản hồi')
@section('content')
<section class="content">
  <!-- container-fluid -->
  <div class="container-fluid">

    <!-- row -->
    <div class="row d-flex justify-content-center">

      <!-- col -->
      <div class="col-xl-11">

        <!-- card -->
        <div class="card" style="margin-top: 50px;">

          <!-- card-header -->
          <div class="card-header bg-dark">
            <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'>Danh sách phản hồi</h2>
          </div>
          <!-- /.card-header -->

          <!-- card-body -->
          <div class="card-body">
            <div class="row d-flex justify-content-center">
              <div class="col">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  {{ session('success') }}
                </div>
                @endif
              </div>
            </div>
            <table id="listfeedback" class="table table-hover text-center">
              <thead class="thead-dark">
                <tr>
                  <th>Tên người phản hồi</th>
                  <th>Email</th>
                  <th>Nội dung</th>
                  <th>Đánh giá</th>
                  <th>Trạng thái</th>
                  <th>Trả lời</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody>
                @foreach($feedback as $f)
                <tr>
                  <td class="align-middle">{{ $f->name }}</td>
                  <td class="align-middle">{{ $f->email }}</td>
                  <td class="align-middle">{{ $f->detail }}</td>
                  <td class="align-middle">{{ $f->rate }}</td>
                  <td class="align-middle">
                    @if($f->status==0)
                    chưa trả lời
                    @endif
                    @if($f->status==1)
                    đã trả lời
                    @endif
                  </td>
                  <td class="align-middle"><a href="maito:dainguyenvan1703@gmail.com">
                      <h3><span class="badge badge-success"><i class="fas fa-pencil-ruler"></i></span></h3>
                    </a></td>
                  <td class="align-middle"><a onclick="return confirm(' Bạn có muốn xóa không ?')" href="{{ url("admin/delete/{$f->id}") }}">
                      <h3><span class="badge badge-danger"><i class="fas fa-trash-alt"></i></span></h3>
                    </a></td>
                </tr>
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
@endsection
@section('script-section')
<script>
  $(function() {
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