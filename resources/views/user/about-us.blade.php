@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xl-3"></div>
        <div class="col-xl-6 text-center about-title">
            <h3 class="">Mục đích của Website</h3>
            <p> Blog tin tức công nghệ với mục tiêu tạo ra sự thuận tiện cho những ai có nhu cầu và đam mê công
                nghệ và để có thể nắm bắt một cách nhanh nhất thông tin về các dòng sản phẩm công
                nghệ cao trên thị trường</p>
        </div>
        <div class="col-xl-3"></div>
    </div>
    <hr>
    <div class="row">
        <div class="col-xl-6 about-info text-center">
            <h3>Lí do chúng tôi làm blog công nghệ ?</h3>
            <p class="text-center about-detail">Do thời đại công nghệ ngày càng phát triển, mọi loại hình công nghệ điện tử luôn được
                phải triển và được cập nhật liên tục. Và mọi người nên được biết đến những gì được đổi
                mới nên chúng tôi làm ra Blog tin tức về công nghệ này để cho mọi người ở đủ lứa tuổi
                khác nhau có thể cập nhật thông tin mỗi ngày, nhất là giới trẻ hiện nay. </p>
        </div>
        <div class="col-xl-6 about-pic">
            <img src="{{ url('img/1.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <hr>
    <div class="row" style="padding-bottom: 15px;">
        <div class="col-xl-6 about-pic">
            <img src="{{ url('img/2.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-xl-6 about-info text-center">
            <h3>Nội dung chính của blog là về ?</h3>
            <p class="text-center about-detail">Blog tin tức công nghệ này của chúng tôi chủ yếu đưa thông tin về PC, laptop, điện thoại
                và thiết bị ngoại vi. Mọi người truy cập vào Blog của chúng tôi xem tin tức qua các bài
                viết và có thể đăng ký/đăng nhập trở thành thành viên của website để có thể tham gia
                bình luận đánh giá về các tin tức được đăng lên. </p>
        </div>
    </div>
    <hr>
</div>
@endsection