@extends('layouts.app')
@section('title','Lịch sử bình luận cá nhân')
@section('content')
<section class="content">
    <!-- container-fluid -->
    <div class="container-fluid" style="padding-top: 10px;">

        <!-- row -->
        <div class="row">

            <!-- col -->
            <div class="col-12">

                <!-- card -->
                <div class="card">

                    <!-- card-header -->
                    <div class="card-header">
                        <h3 class="card-title">Lịch sử bình luận</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- card-body -->
                    <div class="card-body">
                        <table id="listComment" class="table table-bordered table-hover">
                            @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session('success') }}
                            </div>
                            @endif
                            <thead>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Nội dung</th>
                                    <th>Ngày đăng</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cmt as $key)
                                @if($key->users_id == $users)
                                <tr>
                                    @foreach($post as $r)
                                    @if($key->post_id == $r->id)
                                    <td>{{ $r->title }}</td>
                                    @endif
                                    @endforeach
                                    <td>{{ $key->detail }}</td>
                                    <td>{{ $key->created_at }}</td>
                                    <td class="text-center"><a onclick="return confirm(' Bạn có muốn xóa không ?')" href="{{ url("user/listcomment/delete/{$key->id}") }}">
                                            <i class="fas fa-trash-alt btn btn-danger"> Xóa </i>
                                        </a></td>
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
@endsection
@section('script')
<script>
    $(function() {
        $('#listComment').DataTable({
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