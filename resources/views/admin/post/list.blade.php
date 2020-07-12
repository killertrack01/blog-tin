<!-- Lưu tại resources/Chi tiếts/product/index.blade.php -->
@extends('admin.layout.master')
@section('title', 'Danh sách các bài viết')
@section('content')
<!-------------------------------------------->
<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-xl-11">
      <div class="card" style="margin-top: 50px;">
        <div class="card-header bg-dark">
          <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'> Danh sách bài viết </h2>
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
          <div class="table-responsive">
            <table id="listPost" class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th class="align-middle text-center" style="width:5%">#ID</th>
                  <th class="align-middle text-center" style="width:10%">Ảnh</th>
                  <th class="align-middle text-center" style="width:15%">Tiêu đề</th>
                  <th class="align-middle text-center" style="width:5%">Tóm tắt</th>
                  <th class="align-middle text-center" style="width:5%">Loai tin</th>
                  <th class="align-middle text-center" style="width:5%">Tác giả</th>
                  <th class="align-middle text-center" style="width:10%">Ngày tạo</th>
                  <th class="align-middle text-center" style="width:10%">Ngày chỉnh sửa</th>
                  <th class="align-middle text-center" style="width:5%">Trạng thái</th>
                  <th class="align-middle text-center" style="width:10%">Thao tác</th>
                </tr>
              </thead>
              <tbody>
                @foreach($post as $p)
                <tr>
                  <!---->
                  <td class="align-middle">{{ $p->id }}</td>
                  <td class="align-middle">
                    <img class="img-fluid" style="max-height:150px;max-width:100px" src="{{ asset('img/upload/ava-post/'.$p->img) }}" alt="hình post">
                  </td>
                  <td class="align-middle">
                    <p><a class="text-secondary" href="{{ url('listcate/detail/'.$p->id) }}"><b>{{ $p->title }}</b></a></p>
                  </td>
                  <td class="align-middle text-center">
                    <a class="btn btn-info " data-id="a{{$p->id}}" data-toggle="modal" href="#a{{$p->id}}">
                      <i class="fas fa-eye"></i>
                    </a>
                  </td>
                  <td class="align-middle">{{ $p->cate->name }}</td>
                  <td class="align-middle">{{ $p->user->name }}</td>
                  <td class="align-middle">{{ $p->created_at }}</td>
                  <td class="align-middle" class="align-middle">{{ $p->updated_at }}</td>
                  @if($p->status==1)
                  <td class="align-middle text-center">
                    <a href="{{ url('listcate/detail/'.$p->id) }}">
                      <h3 class="btn btn-primary"><i class="fas fa-check">
                          <input type="hidden" value="{{$p->status}}">
                        </i></h3>
                    </a>
                  </td>
                  @else
                  <td class="align-middle text-center">
                    <a >
                      <input type="hidden" value="{{$p->status}}">
                      <h3><button class="btn btn-secondary"><i class="fas fa-times">
                            <input type="hidden" value="{{$p->status}}">
                          </i></button></h3>
                    </a>
                  </td>
                  @endif
                  <td class="align-middle text-center">
                    <h3>
                      @if($p->users_id==($id=auth()->user()->id))
                      <a href="{{ asset('admin/post/edit/'.$p->id) }}">
                        <span class="badge badge-success"><i class="fas fa-tools"></i></span>
                      </a>
                      <a href="{{ asset('admin/post/delete/'.$p->id) }}" onclick="return confirm(' bạn có muốn xóa ko ?')">
                        <span class="badge badge-danger"><i class="fas fa-trash-alt"></i></span>
                      </a>
                      @else
                      <span class="badge badge-secondary"><i class="fas fa-tools"></i></span>
                      <a href="{{ asset('admin/post/delete/'.$p->id) }}" onclick="return confirm(' bạn có muốn xóa ko ?')">
                        <span class="badge badge-danger"><i class="fas fa-trash-alt"></i></span>
                      </a>
                      @endif
                    </h3>
                  </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="a{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">{{ $p->title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{ $p->summary }}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
@section('script-section')
<script>
  $(function() {
    $('#listPost').DataTable({
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