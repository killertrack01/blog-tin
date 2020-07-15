@extends('layouts.app')
@section('title'.'Phản hồi')
@section('content')
<div class="container">
    <div class="row">

        <!--image-->
        <div class="col-md-6">
            <img src="{{ asset('images/feedback1.png') }}" width="100%" height="295px" style="padding-top: 10px;">
            <p>
                <div>
                    <h4 class="text-center" style="font-family:'Times New Roman', Times, serif;">
                        Cảm ơn bạn đã truy cập vào website của chúng tôi.
                        Nếu có bất yêu cầu hoặc phản hồi nào, vui lòng
                        nhập các thông tin vào biểu mẫu kế bên. Để chúng
                        tôi có thể tiếp nhận ý kiến của bạn một cách
                        nhanh nhất.
                    </h4>
                </div>
        </div>
        <!--/.image-->

        <!-- feedback-form -->
        <div class="col-md-6">
            <div>
                <div>
                    @if(session('success'))
                    <div class="col-md-12" style="padding-top: 10px;">
                        <div class="alert alert-success" role="alert" style="text-align: center;">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('success') }}
                        </div>
                    </div>
                    @endif
                    <h2 class="text-center">Phản hồi</h2>
                    <hr>
                    <p>
                        Vui lòng điền vào thông tin phản hồi phía bên dưới:
                    </p>
                    <form method="post" action="{{ route('feedback') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label style="color: black; font-size:large"><b style="color: red;">*</b> Bạn đánh giá thế nào về trải nghiệm chung của bạn?</label>
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="rate" value="Tệ">Tệ</label>
                                </div>
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="rate" value="Bình thường">Bình thường</label>
                                </div>
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="rate" value="Rất tốt">Rất tốt</label>
                                </div>
                                @if($errors->has('rate'))
                                <p class="alert alert-danger">{{$errors->first('rate')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments" style="color: black; font-size:large"><b style="color: red;">*</b> Ý kiến phản hồi</label>
                                <textarea class="form-control" type="textarea" name="detail" placeholder="Nhập vào đây" maxlength="6000" rows="7"></textarea>
                                @if($errors->has('detail'))
                                <p class="alert alert-danger">{{$errors->first('detail')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name" style="color: black;"><b style="color: red;">*</b> Họ và tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Tên của bạn">
                                @if($errors->has('name'))
                                <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email" style="color: black;"><b style="color: red;">*</b> Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email của bạn" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$">
                                @if($errors->has('email'))
                                <p class="alert alert-danger">{{$errors->first('email')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.feedback-form -->

    </div>
</div>
@endsection