@extends('admin.userpost.layoutreport')
@section('title', 'Danh sách tin chờ')
@section('content')
<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-xl-11">
      <div class="card" style="margin-top: 50px;">
        <div class="card-header bg-dark">
          <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'>Danh sách Bài viết đang chờ </h2>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="listPost" class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                  <th class="align-middle text-center">STT</th>
                  <th class="align-middle text-center">Tác giả</th>
                  <th class="align-middle text-center">Tên người đăng</th>
                  <th class="align-middle text-center">Tiêu đề</th>
                  <th class="align-middle text-center">Tóm tắt</th>
                  <th class="align-middle text-center">Ảnh bìa</th>
                  <th class="align-middle text-center">Ngày đăng</th>
                </tr>
              </thead>
              <tbody>
              @foreach($posts as $key => $val)
                  <tr class="odd gradeX">
                    <td width="3%">{{$key}}</td>
                    <td>{{$val->author}}</td>
                    @foreach($user as $u)
                    @if($u->id === $val->users_id)
                      <td>{{$u->name}}</td>
                    @endif
                    @endforeach
                    <td>{{$val->title}}</td>
                    <td>{{$val->summary}}</td>
                    <td><img src="{{url('img/upload/ava-post/'.$val->img)}}" width="100px" height="100px"></td>
                    <td width="8%">{{$val->created_at}}</td>
                </tr>
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
