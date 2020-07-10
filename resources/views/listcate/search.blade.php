@extends('layouts.app')
@section('content')
<!-- Page Content -->

<div class="container">

    <?php
        function changecolor($str,$keyword)
        {
            return str_replace($keyword,"<span style='color:red;'>$keyword</span>",$str);
        }
    ?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-xl-5">
            <h2 class="my-4">Bạn đang tìm:{{ $keyword }}</h2>
        </div>
    </div>
    @foreach($post as $p)
    <!-- Project One -->
    <div class="row">
        <div class="col-md-4">
            <img class="img-fluid rounded " width="250" src="{{ asset('img/upload/ava-post/'.$p->img) }}" alt="{{ $p->title }}">
        </div>
        <div class="col-md-8">
            <h3>{!! changecolor($p->title,$keyword) !!}</h3>
            <p>{!! changecolor($p->summary,$keyword) !!}</p>
            <small> được viết bởi: {{ $p->user->name }} </small>
            <br>
            <a class="btn btn-secondary" href="{{ url('listcate/detail/'.$p->id) }}">Xem bài viết</a>
        </div>
    </div>
    <!-- /.row -->
    <hr>
    @endforeach
    {{ $post->links() }}
</div>
<!-- /.container -->
@endsection