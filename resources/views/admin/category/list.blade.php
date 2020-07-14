@extends('admin.layout.master')
@section('title', 'Danh sách thể loại tin')
@section('content')

<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-xl-11">
      <div class="card" style="margin-top: 50px;">
        <div class="card-header bg-dark">
          <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'> Danh sách thể loại bài viết </h2>
        </div>
        <div class="card-body">
          <!--thông báo là đã thêm thành công hay chưa-->
          <div class="row d-flex justify-content-center">
            <div class="col">
              @if(session('alert'))
              <div class="alert alert-success">
                {{session('alert')}}
              </div>
              @endif
            </div>
          </div>
          <table id="listcate" class="table table-hover text-center">
            <thead class="thead-dark">
              <tr>
                <th>#ID</th>
                <th>Tên loại bài</th>
                <th>Mô tả bài</th>
                <th>Ngày tạo</th>
                <th>Ngày chỉnh sửa</th>
                <th>Thao tác</th>

              </tr>
            </thead>
            <tbody>
              @foreach($cate as $c)
              <tr>
                <td class="align-middle">{{$c->id}}</td>
                <td class="align-middle">{{$c->name}}</td>
                <td class="align-middle">{{$c->description}}</td>
                <td class="align-middle">{{$c->created_at}}</td>
                <td class="align-middle">{{$c->updated_at}}</td>
                <td class="align-middle"><a href="{{ asset('admin/category/edit/'.$c->id) }}">
                    <span class="btn btn-success"><i class="fas fa-tools"></i></span>
                  </a>
                  <!-- <a href="{{ asset('admin/category/delete/'.$c->id) }}" onclick="return confirm(' bạn có muốn xóa ko ?')">
                    <span class="btn btn-danger"><i class="fas fa-trash-alt"></i></span>
                  </a> -->
                </td>
              </tr>
              @endforeach
            </tbody>
            <br>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script-section')
<script>
  $(function() {
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