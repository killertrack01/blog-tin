@extends('admin.layout.master')
@section('title', 'Tạo bài viết')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-10">
            <div class="card" style="margin-top: 50px;">
                <div class="card-header bg-dark">
                    <h2 class="text-uppercase text-center" style='font-family: "Hoefler Text","Baskerville Old Face",Garamond,"Times New Roman",serif'> Thêm bài viết </h2>
                </div>
                <div class="card-body">
                    <!--thông báo là đã thêm thành công hay chưa-->
                    <div class="row d-flex justify-content-center">
                        <div class="col">
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
                    <form action="{{ asset('admin/post/create') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <!--Title-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tiêu đề bài viết <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="title" placeholder="Tiêu đề của bài viết" required value="{{ old('title') }}">
                                </div>
                            </div>
                        </div>
                        <!--summary-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Sơ lược về bài viết <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="sum" rows="3" placeholder="sơ lược về bài viết" required value="{{ old('sum') }}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <!--Category-->
                                <div class="form-group">
                                    <label>Loại bài viết <span class="text-danger">*</span> </label>
                                    <select class="form-control" name="cate" id="cate">
                                        @foreach($cate as $c)
                                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--author-->
                                <div class="form-group">
                                    <label>Người đăng <span class="text-danger">*</span></label>
                                    @foreach($user as $u)
                                    @if($u->id === $id=(auth()->user()->id))
                                    <input type="hidden" name="author" value="{{ $u->id }}">
                                    <input type="text" class="form-control" name="name" value="{{ $u->name }}" readonly>
                                    @endif
                                    @endforeach
                                    <input type="hidden" name="status" value="1">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <!--img-->
                                <label>Hình tượng trưng cho bài viết <span class="text-danger">*</span></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="custom" name="imgava" value="{{ old('imgava') }}">
                                    <label class="custom-file-label" for="custom">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <!--post detail-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Chi tiết bài viết <span class="text-danger">*</span></label>
                                    <textarea name="detail" id="edit1" class="form-control" value="{{ old('sum') }}"></textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <div class="d-flex justify-content-end">
                            <input type="submit" class="btn btn-primary" value="Xác nhận" style="margin-right: 15px;">
                            <input type="reset" class="btn btn-secondary" value="Hủy">
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script-section')
<script src="{{ asset('plugins/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugins/ckfinder/ckfinder.js') }}"></script>
<script>
    CKEDITOR.replace('edit1', {
        filebrowserBrowseUrl: '../../plugins/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '../../plugins/ckfinder/ckfinder.html?type=Images',
        filebrowserFlashBrowseUrl: '../../plugins/ckfinder/ckfinder.html?type=Flash',
        filebrowserUploadUrl: '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>
@endsection