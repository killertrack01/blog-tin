@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-9">
            <h1>{{ $post->title }}</h1>
            <p class="lead">
                Người đăng: <b>{{ $post->author }}</b>
                <p><i class="far fa-clock"></i> Đăng vào lúc: {{ $post->created_at }}</p>
            </p>
            <hr>
            <img class="img-fluid" width="70%" src="{{ asset('img/upload/ava-post/'.$post->img) }}" alt="{{ $post->title }}">
            <br>
        </div>
        <div class="col-xl-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <b>Tin liên quan</b>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="container-fluid">
                        @foreach($relate as $r)
                        <div class="row">
                            <div class="col-xl-5">
                                <a href="{{ url('listcate/detail/'.$r->id) }}">
                                    <img class="rounded img-thumbnail" src="{{ asset('img/upload/ava-post/'.$r->img) }}" alt="{{ $r->title }}">
                                </a>
                            </div>
                            <div class="col-xl-7">
                                <a href="{{ url('listcate/detail/'.$r->id) }}" style="color: black;">{{ $r->summary }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="offset-xl-3 col-xl-5">
            <p> {!! $post->detail !!}</p>
        </div>
    </div>
</div>
@endsection