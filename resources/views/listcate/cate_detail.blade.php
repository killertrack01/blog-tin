@extends('layouts.app')
@section('content')
<!-- Page Content -->

<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">{{ $catemain->name }}</h1>
  <small>{{ $catemain->description }}</small>
  @foreach($post as $p)
  <!-- Project One -->
  <div class="row">
    <div class="col-md-7">
      <img class="img-fluid rounded mb-3 mb-md-0" width="250" src="{{ asset('img/upload/ava-post/'.$p->img) }}" alt="{{ $p->title }}">
    </div>
    <div class="col-md-5">
      <h3>{{ $p->title }}</h3>
      <p>{{ $p->summary }}</p>
      <p>{{ $p->author }}</p>
      <a class="btn btn-primary" href="#">View Project</a>
    </div>
  </div>
  <!-- /.row -->
  <hr>
  @endforeach

</div>
<!-- /.container -->
@endsection