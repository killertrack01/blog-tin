@extends('layouts.app')
@section('content')
<!---------------------------->
<div class="container-fluid" style="margin-top: 30px;">
    <div class="body-detail" style="background-color: white;margin-left: 59.600px;margin-right:59.600px">
        <div class="row">
            <!--Detail post-->
            <div class="col-xl-9">
                <ol class="breadcrumb" class="text-uppercase" style="background-color: white;font-weight:400">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item "><a href="#">{{ $post->cate->name }}</a></li>
                </ol>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <h1>{{ $post->title }}</h1>
                            <p><i class="far fa-clock"></i> Đăng vào lúc: {{ $post->created_at }}</p>
                        </div>
                        <div class="col-xl-12">
                            <img class="img-fluid" style="max-height: 817px;max-width:100%" src="{{ asset('img/upload/ava-post/'.$post->img) }}" alt="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2">

                        </div>
                        <div class="col-xl-10">
                            {!! $post->detail !!}

                            <!-- comment-form -->
                            <div class="card my-4">
                                <h4 class="card-header">Bình luận</h4>
                                <p>
                                    <p>
                                        <div class="card-body">
                                            <form action="{{route('comment',$post->id)}}" method="post">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <textarea class="form-control" name="detail" rows="4"></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Gửi</button>
                                            </form>
                                        </div>
                            </div>
                            <!-- /.comment-form -->

                            <hr>

                            <!-- comment-list -->
                            @foreach($cmt as $key => $val)
                            @foreach($user as $val2)
                            @if($val->users_id === $val2->id)
                            <div class="card my-4">
                                <div class="card-body">
                                    <h5 class="mt-0">{{$val2->name}}</h5>
                                    <small><i>{{$val->created_at}}</i></small><br>
                                    {{$val->detail}}
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endforeach
                            <!-- /.comment-list -->

                        </div>
                    </div>
                </div>
            </div>

            <!---panel-->
            <div class="col-xl-3 side-panel">
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
                                        <img class="rounded img-thumbnail" style="max-height: 93.325px;max-width:93.325px" src="{{ asset('img/upload/ava-post/'.$r->img) }}" alt="{{ $r->title }}">
                                    </a>
                                </div>
                                <div class="col-xl-7">
                                    <a href="{{ url('listcate/detail/'.$r->id) }}" style="color: black;">{{ $r->title}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection