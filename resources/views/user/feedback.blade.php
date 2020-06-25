@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('images/feedback1.png') }}" alt="" width="100%" height="295px">
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


        <div class="col-md-6">
            <!-- feedback-form -->
            <div>
                <div>
                    <h2 class="text-center">Phản hồi</h2>
                    <hr>
                    <p>
                        Vui lòng điền vào thông tin phản hồi phía bên dưới:
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label style="color: black; font-size:large">Bạn đánh giá thế nào về trải nghiệm chung của bạn?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" value="bad">
                                        Tệ
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" value="average">
                                        Bình thường
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" value="good">
                                        Rất tốt
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments" style="color: black; font-size:large">Ý kiến phản hồi</label>
                                <textarea class="form-control" type="textarea" placeholder="Nhập vào đây" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name" style="color: black;">Họ và tên</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email" style="color: black;">Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.feedback-form -->
        </div>
    </div>
</div>
@endsection