@extends('admin.layout.master')
@section('title', 'Danh sách bình luận')
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
            <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'>Danh sách bình luận</h2>
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
            <table id="listcomment" class="table table-hover text-center">
              <thead class="thead-dark">
                <tr>
                  <th>Tiêu đề</th>
                  <th>Người bình luận</th>
                  <th>Nội dung</th>
                  <th>Ngày đăng</th>
                  <th>Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach($comment as $c)
                <tr>
                  <td class="align-middle">{{ $c->post->title }}</td>
                  @foreach($user as $u)
                  @if($u->id === $c->users_id)
                  <td class="align-middle">{{$u->name}}</td>
                  @endif
                  @endforeach
                  <td class="align-middle">{{ $c->detail }}</td>
                  <td class="align-middle">{{ $c->created_at }}</td>
                  <td class="align-middle text-center">
                    <h3>
                      @if($c->users_id==($id=auth()->user()->id))
                      <a href="{{ url("admin/comment/edit/{$c->id}") }}">
                        <span class="badge badge-success"><i class="fas fa-tools"></i></span>
                      </a>
                      <a href="{{ url("admin/comment/delete/{$c->id}") }}" onclick="return confirm(' Bạn có chắc muốn xóa không ?')">
                        <span class="badge badge-danger"><i class="fas fa-trash-alt"></i></span>
                      </a>
                      @else
                      <span class="badge badge-secondary"><i class="fas fa-tools"></i></span>
                      <a href="{{ url("admin/comment/delete/{$c->id}") }}" onclick="return confirm(' Bạn có chắc muốn xóa không ?')">
                        <span class="badge badge-danger"><i class="fas fa-trash-alt"></i></span>
                      </a>
                      @endif
                    </h3>
                  </td>
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
    $('#listcomment').DataTable({
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