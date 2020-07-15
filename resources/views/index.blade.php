@extends('layouts.app')
@section('content')
<section>
  <style>
/* Type */

      h1,h2,h3,dt.uppercaseText {
      text-transform: uppercase;
      }
      a:link, a:visited {
      color: (internal value);
      text-decoration: none;
      } 
      h1.tag{
            display:inline;
      }
      big{
            font-size: 140%;
            color:yellow;
      }
/* Box */

	.box {
		border-radius: 4px;
		margin-bottom: 2em;
		background: #2c2c32;
		text-align: center;
            border-radius: 4px;
		border: solid 1px;
		padding: 1.5em;
		height:700px;	
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box .image.fit {
			margin: 0;
			height: auto;

		}

		.box .image img {
			border-radius: 4px 4px 0 0;
		}

		.box .inner {
			padding: 1.5em;
			width: 100% !important;
		}

		@media screen and (max-width: 480px) {

			.box .inner {
				padding: 1em;
			}

		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}


		/* Image */

		.image {
			border-radius: 4px;
			border: 0px;
			display: inline-block;
			position: relative;
		}

		.image img {
			border-radius: 4px;
			display: block;
		}

		.image.left,
		.image.right {
			max-width: 40%;
		}

		.image.left img,
		.image.right img {
			width: 90%;
		}

		.image.left {
			float: left;
			padding: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			padding: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

		.image.fit img {
			width: 100%;
		}



		/* Button */

		input[type="submit"],
		input[type="reset"],
		input[type="button"],
		button,
		.button {
			-moz-appearance: none;
			-webkit-appearance: none;
			-ms-appearance: none;
			appearance: none;
			-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
			-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
			-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
			transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
			background-color: #70c7be;
			border-radius: 4px;
			border: 0;
			color: #ffffff !important;
			cursor: pointer;
			display: inline-block;
			font-weight: 400;
			height: 2.85em;
			line-height: 2.95em;
			padding: 0 1.5em;
			text-align: center;
			text-decoration: none;
			white-space: nowrap;
		}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		button:hover,
		.button:hover {
			background-color: #82cec6;
		}

		input[type="submit"]:active,
		input[type="reset"]:active,
		input[type="button"]:active,
		button:active,
		.button:active {
			background-color: #5ec0b6;
		}

		input[type="submit"].icon,
		input[type="reset"].icon,
		input[type="button"].icon,
		button.icon,
		.button.icon {
			padding-left: 1.35em;
		}

		input[type="submit"].icon:before,
		input[type="reset"].icon:before,
		input[type="button"].icon:before,
		button.icon:before,
		.button.icon:before {
			margin-right: 0.5em;
		}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		button.fit,
		.button.fit {
			display: block;
			margin: 0 0 1em 0;
			width: 100%;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		button.small,
		.button.small {
			font-size: 0.8em;
		}

		input[type="submit"].big,
		input[type="reset"].big,
		input[type="button"].big,
		button.big,
		.button.big {
			font-size: 1.35em;
		}

		input[type="submit"].disabled,
		input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		button.disabled,
		button:disabled,
		.button.disabled,
		.button:disabled {
			background-color: rgba(255, 255, 255, 0.75) !important;
			box-shadow: inset 0 -0.15em 0 0 rgba(0, 0, 0, 0.15);
			color: #202024 !important;
			cursor: default;
			opacity: 0.25;
		}

		input[type="submit"].style2,
		input[type="reset"].style2,
		input[type="button"].style2,
		button.style2,
		.button.style2 {
			background-color: #7f92cf;
		}

		input[type="submit"].style2:hover,
		input[type="reset"].style2:hover,
		input[type="button"].style2:hover,
		button.style2:hover,
		.button.style2:hover {
			background-color: #92a2d6;
		}

		input[type="submit"].style2:active,
		input[type="reset"].style2:active,
		input[type="button"].style2:active,
		button.style2:active,
		.button.style2:active {
			background-color: #6c82c8;
		}

		input[type="submit"].style3,
		input[type="reset"].style3,
		input[type="button"].style3,
		button.style3,
		.button.style3 {
			background-color: #9d7ed0;
		}

		input[type="submit"].style3:hover,
		input[type="reset"].style3:hover,
		input[type="button"].style3:hover,
		button.style3:hover,
		.button.style3:hover {
			background-color: #ab91d7;
		}

		input[type="submit"].style3:active,
		input[type="reset"].style3:active,
		input[type="button"].style3:active,
		button.style3:active,
		.button.style3:active {
			background-color: #8f6bc9;
		}
		

		/* Banner */
		/* Box */

		.box {
			border-radius: 4px;
			border: solid 1px;
			margin-bottom: 2em;
			padding: 1.5em;
		}

		.box> :last-child,
		.box> :last-child> :last-child,
		.box> :last-child> :last-child> :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

	.box {
		border-color: rgba(0, 0, 0, 0.1);
	}
	.card-footer{
		height:400px;
	}
  </style>
  <div class="container-fluid">
  <marquee >Chào mừng đến với Nohope.com nơi cập nhật tin tức công nghệ mới nhất</marquee>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions1" data-slide-to="1" class="active"></li>
    <li data-target="#carouselExampleCaptions2" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions3" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" height=500>
      <div class="carousel-caption d-none d-md-block">
        <h5>Bạn muốn muốn một chiếc laptop?</h5>
        <p>Chúng tôi sẽ giúp bạn tìm hiểu và cập nhật các thông tin thịnh hành nhất</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" height=500>
      <div class="carousel-caption d-none d-md-block">
        <h5>Bạn muốn có một giàn PC cùng phụ kiện tốt để chơi game?</h5>
        <p>Chúng tôi sẽ cung cấp cho bạn nhưng dàn PC tốt nhất và giá cả hợp lý nhất.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/4.jpg') }}" class="d-block w-100" height=500>
      <div class="carousel-caption d-none d-md-block">
        <h5>Bạn muốn có mua một chiếc điện thoại?</h5>
        <p>Chúng tôi sẽ cho bạn cả một thế giới tin tức điện thoại để lựa chọn</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section style="padding:15px;">
<div class="text-center bg-dark text-light rounded-lg" style="padding:15px;"><h5>Những thông tin mới nhất</h5></div>
<div class="row" style="padding:10px;">
<?php $i=1 ?>
@foreach($post as $rrr)
@if($rrr->status==1)
	<div class="col-md-3">
	<div class="card text-center">
		<div class="card-body">
		<img src="{{ asset('img/upload/ava-post/'.$rrr->img) }}" height=150>
		</div>
		<div class="card-footer bg-dark text-light">
		<p><a href="{{ url('listcate/detail/'.$rrr->id) }}">{{$rrr->title}}</a></p>
		<p><small>{{ ($rrr->summary) }}</small></p>
		</div>
	</div>
	</div>
<?php $i++; ?>
@endif
@if($i>4)
@break
@endif
@endforeach

</section>
            <div>
                  <?php $check =1; ?>
                  @foreach($cate as $row)
                  <?php  $checkcat=0; ?>
				  @foreach($post as $rr)
				  @if($rr->category_id==$row->id)
				  
                  <div class="mt-3">
                  <span><dt class="uppercaseText"><h1><big>|</big><b><a href="{{ url('listcate/cate-detail/'.$row->id) }}">{{$row->name}}</a></b></h1></dt></span>
                  </div>
				  <hr class="my-4">
				  
				  @break
				  @endif
				  @endforeach
                        @foreach($post as $r)
                              @if($checkcat==5)
                              @break
                              @else
                                    @if($row->id==$r->category_id)
                                          @if($r->status==1)
                                                @if($check==1)
                                                <section>
                                                            <div>
                                                                  <div class="row">
                                                                              <div class="col-md-6">
                                                                                    <div class="image fit">
                                                                                          <a><img src="{{ asset('img/upload/ava-post/'.$r->img) }}" height=400 weight=400 /></a>
                                                                                    </div>
                                                                              </div>
                                                                              <div class="col-md-6">
                                                                                    <h3 class="uppercaseText">{{ $r->title }}</h3>
																					<p><small>{{ $r->created_at}} </small><small> Đăng bởi @foreach($user as $i) @if( $i->id == $r->users_id)  {{ $i->name }} @break @endif @endforeach </small></p>
                                                                                    <p>{{ $r->summary }}</p>
																					
                                                                                    <a href="{{ url('listcate/detail/'.$r->id) }}" class="button">Đọc Thêm</a>
                                                                              </div>
                                                                  </div>
                                                            </div>
                                                </section>
                                                <?php $check = $check+1; $checkcat=$checkcat+1; ?>
                                                <br>
                                                @else
                                                <section>
                                                      <div>
                                                            <div class="row">
                                                                  <div class="col-md-6">
                                                                        <h3 class="uppercaseText">{{ $r->title }}</h3>
																		<p><small>{{ $r->created_at }} </small><small> Đăng bởi @foreach($user as $i) @if( $i->id == $r->users_id)  {{ $i->name }} @break @endif @endforeach </small></p>
                                                                        <p>{{ $r->summary }}</p>
																		
                                                                        <a href="{{ url('listcate/detail/'.$r->id) }}" class="button">Đọc Thêm</a>
                                                                  </div>
                                                                  <div class="col-md-6">
                                                                        <div class="image fit">
                                                                              <a><img src="{{ asset('img/upload/ava-post/'.$r->img) }}" height=400 weight=400 /></a>
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>
                                                </section>
                                                <?php $check = $check-1; $checkcat=$checkcat+1; ?>
                                                <br>
                                                @endif 
                                          @endif
                                    @endif
                              @endif
                        @endforeach
						@foreach($post as $rr)
				 		@if(($rr->category_id==$row->id)&&($rr->status==1))
						 <span><dt class="text-center"><b><a href="{{ url('listcate/cate-detail/'.$row->id) }}">Xem Thêm...</a></b></dt></span>
						@break
						@endif
						@endforeach	
                  @endforeach 
            </div>  
      </div>     
</section>
@endsection



