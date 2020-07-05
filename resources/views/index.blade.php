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
	  .card{
		height:600px;
	  }
/* Image */

	.image {
		border-radius: 4px;
		border: 0px;
		display: inline-block;
		position: relative;
            box-s
	}

		.image img {
			border-radius: 4px;
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
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

		input[type="submit"].disabled, input[type="submit"]:disabled,
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
		}		
     
  </style>
  <marquee style="">Chào mừng đến với Nohope.com nơi cập nhật các thông tin mới nhất về công nghệ</marquee>
  <div class="container-fluid">
  <span><dt class="uppercaseText"><h1><big>*</big><b><a >Những Thông Tin Mới Nhất</a></b></h1></dt></span> 
	  <div class="row">
    @foreach($cate as $rows)
		@foreach($post as $r)
		      @if($rows->id==$r->category_id)
                  @if($rows->status==0)
					<div class="col-md-3">
					<div class="card">
							<div class="card-title">
							<a  class="image fit"><img src="{{ asset('img/upload/ava-post/'.$r->img) }}" height=200 /></a>
							</div>
							<div class="card-body">
									<div class="inner">
										<h3 class="uppercaseText"><a href="#">{{ $r->title }}</a></h3>
										<p>{{ $r->summary }}</p> 
									</div>
							</div>
					</div>	
					</div>
                  @break
                  @endif
		@endif
		@endforeach
	@endforeach
	</div>
      
            <div>
                  <?php $check =1; ?>
                  @foreach($cate as $row)
                  <?php  $checkcat=0; ?>
				  @foreach($post as $rr)
				  @if($rr->category_id==$row->id)
                  <div class="mt-3">
                  <span><dt class="uppercaseText"><h1><big>|</big><b><a href="">{{$row->name}}</a></b></h1></dt></span>
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
                                          @if($r->status==0)
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
                                                                                    <p>{{ $r->summary }}</p>
                                                                                    <a href="#" class="button">Learn More</a>
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
                                                                        <p>{{ $r->summary }}</p>
                                                                        <a href="#" class="button">Learn More</a>
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
				 		@if($rr->category_id==$row->id)
						 <span><dt class="text-center"><b><a href="">Xem Thêm...</a></b></dt></span>
						@break
						@endif
						@endforeach	
                  @endforeach 
            </div>  
      </div>     
</section>
@endsection
