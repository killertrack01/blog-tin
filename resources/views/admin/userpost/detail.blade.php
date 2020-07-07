<!-- lưu tại /resources/views/product/create.blade.php -->
@extends('admin.layout.master')
@foreach($posts as $val)
@section('title','Chi tiết bài viết')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-9">
       <!-- Title -->
       <h1 class="mt-4">{{$val->title}}</h1>
       <!-- Author -->
       <p class="lead" style="color: #d4912a; font-size: 25px;">
          by
          <strong>{{$val->author}}</strong>
        </p>
        <hr>
        <h4><b>Thể loại: @foreach($cate as $c)
            @if(isset($val->category_id) && $c->id == $val->category_id)
                {{$c->name}}
            @endif
            @endforeach</b></h4>
        <hr>
        <!-- Date/Time -->
        <p>Posted on <i>{{$val->created_at}}</i></p>
        <hr>
        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{url('img/upload/ava-post/'.$val->img)}}" alt="" width="100%" height="auto">
        <hr>
        
        <?php echo $val->detail;?>
        <hr>
        <button class="btn btn-default" type="button">
            <a href="{{ url('admin/userpost/list') }}"><b>Trở về</b></a>
        </button>
    </div>
  </div>
</div>
@endsection
@endforeach
