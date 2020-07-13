@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-xl-5">
      <h2 class="my-4">{{ $catemain->name }} <small>{{ $catemain->description }}</small></h2>
    </div>
  </div>
  @foreach($sort as $p)
  <!-- Project One -->
  <div class="row">
    <div class="col-md-4">
      <img class="img-fluid rounded " width="250" src="{{ asset('img/upload/ava-post/'.$p->img) }}" alt="{{ $p->title }}">
    </div>
    <div class="col-md-8">
      <h3>{{ $p->title }}</h3>
      <p>{{ $p->summary }}</p>
      <small> được viết bởi: {{ $p->user->name }} </small>
      <br>
      <a class="btn btn-secondary" href="{{ url('listcate/detail/'.$p->id) }}">Xem bài viết</a>
    </div>
  </div>
  <!-- /.row -->
  <hr>
  @endforeach
  <div class="row">
    <div class="col-xl-12 text-center">
      {{ $post->links() }}
    </div>
  </div>

</div>
<!-- /.container -->
@endsection