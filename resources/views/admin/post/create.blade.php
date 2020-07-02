@extends('admin.layout.master')
@section('title', 'Tạo bài viết')
@section('content')
<div class="container-fluid">
    <!--thông báo là đã thêm thành công hay chưa-->
    <div class="row">
        <div class="col-xl-6">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $err)
                {{$err}} <br>
                @endforeach
            </div>
            @endif

            @if(session('alert'))
            <div class="alert alert-success">
                {{session('alert')}}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 text-center">
            <h3>Bài viết mới</h3>
        </div>
        <div class="col-xl-12">
            <form action="{{ asset('admin/post/create') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-row">
                    <!--Title-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label>Tiêu đề bài viết</label>
                        <input type="text" class="form-control" name="title" placeholder="Tiêu đề của bài viết">
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--summary-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label>Sơ lược về bài viết</label>
                        <textarea class="form-control" name="sum" placeholder="sơ lược về bài viết"></textarea>
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--Category-->
                    <div class="form-group offset-xl-2 col-xl-1">
                        <label>Loại bài viết</label>
                        <select class="form-control" name="cate" id="cate">
                            @foreach($cate as $c)
                            <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-xl-9"></div>
                    <!--Img post-->
                    <div class="form-group offset-xl-2 col-xl-3">
                        <label>Hình tượng chưng cho bài viết</label>
                        <input type="file" name="imgava">
                    </div>
                    <div class="form-group col-xl-7"></div>
                    <!--img post-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label>Chi tiết bài viết</label>
                        <textarea name="detail" id="edit1" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--author-->
                    <div class="form-group offset-xl-2 col-xl-6">
                        <label>Tác giả</label>
                        @foreach($user as $u)
                        @if($u->id === $id=(auth()->user()->id))
                        <input type="hidden" name="author" value="{{ $u->id }}">
                        <input type="text" class="form-control" name="name" value="{{ $u->name }}" readonly>
                        @endif
                        @endforeach
                        <input type="hidden" name="status" value="0">
                    </div>
                    <div class="form-group col-xl-4"></div>
                    <!--submit-->
                    <div class="form-group offset-xl-6 col-xl-2 text-right">
                        <input type="submit" class="btn btn-primary">
                        <input type="reset" class="btn btn-secondary">
                    </div>
                    <div class="form-group col-xl-4"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script-section')
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('edit1');
</script>
@endsection