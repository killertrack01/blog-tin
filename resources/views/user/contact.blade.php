@extends('layouts.app')
@section('title','Liên Hệ')
@section('content')
<style>
    .card{
        transition: 0.5s ease; 
        cursor: pointer;
    }
    .card:hover{
        transform: scale(1.1); 
        box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
    }
</style>
<div class="container">
<h2 class="text-center">Nhà phát triển</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-center">
            <div class="logo"><img src="{{ asset('images/thanh.png') }}" 
            class="image-fluid img-thumbnail rounded-circle" height="auto">
            <div class="card-contact" style="height: 100px;">
                <div class="text-contain">
                    <h5 class="card-text" style="font-family:Cambria;">Nguyễn Chí Thành</h5>
                    <p><i class="fas fa-envelope-open" >FPTAptech@gmail.com</i></p>                </div>
            </div>
            </div>
            </div>
        </div>        
        <div class="col-md-3">
            <div class="card text-center">
            <div class="logo"><img src="{{ asset('images/quang.png') }}" 
            class="image-fluid img-thumbnail rounded-circle" width="100%" height="auto">
            <div class="card-contact" style="height: 100px;">
                <div class="text-contain">
                   <h5 class="card-text" style="font-family:Cambria;">Nguyễn Khắc Quang</h5>
                   <p><i class="fas fa-envelope-open" >FPTAptech@gmail.com</i></p>
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
            <div class="logo"><img src="{{ asset('images/kien.png') }}" 
            class="image-fluid img-thumbnail rounded-circle" width="100%" height="auto">
            <div class="card-contact" style="height: 100px;">
                <div class="text-contain">
                   <h5 class="card-text" style="font-family:Cambria;">Vũ Mạnh Kiên</h5>
                   <p><i class="fas fa-envelope-open" >FPTAptech@gmail.com</i></p>                          
                </div>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
            <div class="logo"><img src="{{ asset('images/dai.png') }}" 
            class="image-fluid img-thumbnail rounded-circle" width="100%" height="auto">
            <div class="card-contact" style="height: 100px;">
                <div class="text-contain">
                   <h5 class="card-text" style="font-family:Cambria;">Nguyễn Văn Đại</h5>
                   <p><i class="fas fa-envelope-open" >FPTAptech@gmail.com</i></p>                               
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection