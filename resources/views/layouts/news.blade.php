<section>
<style>
/* Type */


/* Box */

	.thumbnails {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-align-items: stretch;
		-webkit-align-items: stretch;
		-ms-align-items: stretch;
		align-items: stretch;
		-moz-justify-content: center;
		-webkit-justify-content: center;
		-ms-justify-content: center;
		justify-content: center;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
	}

		.thumbnails .box {
			margin: 0 1em 2em 1em;
			width: 22%;
		}

			@media screen and (max-width: 1280px) {

				.thumbnails .box {
					width: 45%;
				}

			}

			@media screen and (max-width: 736px) {

				.thumbnails .box {
					width: 100%;
				}

			}


/* Box */

	.box {
		border-radius: 4px;
		margin-bottom: 2em;
		background: #2c2c32;
		text-align: center;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box .image.fit {
      margin: 0;
      height:auto;
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
		border: 0;
		display: inline-block;
		position: relative;
	}

		.image img {
			border-radius: 4px;
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
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

		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.main img {
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
/* Banner */


  </style>
  <div class="thumbnails">
<div class="box">
  <a  class="image fit"><img src="{{asset('/images/anh.png')}}" alt="" /></a>
  <div class="inner">
    <h3>Nascetur nunc varius commodo</h3>
    <p>aaaaaaa aaaaaaaa aaaaaa aaaaa aaaaa aaaaaaa aaaa aaaa aaaa aaaa aaa aaa aaaa aaaa aaaaa aaaaaa aaaaa aaaa aaaa</p>

    <a  class="button fit" data-poptrox="youtube,800x400">Xem Thêm</a>
  </div>
</div>

<div class="box">
  <a  class="image fit"><img src="{{asset('/images/anh.png')}}" alt="" /></a>
  <div class="inner">
    <h3>Nascetur nunc varius commodo</h3>
    <p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
    <a  class="button style2 fit" data-poptrox="youtube,800x400">Xem Thêm</a>
  </div>
</div>

<div class="box">
  <a  class="image fit"><img src="{{asset('/images/anh.png')}}" alt="" /></a>
  <div class="inner">
    <h3>Nascetur nunc varius commodo</h3>
    <p>Interdum amet SDHGF SAGHM GGFADS HFDGS HAVFHAS DGFH NAS DFHASDG FHU DSGFHS AGFHDSAG FHSAFVGHAS JVFGDSFVF GASFGan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
    <a  class="button style3 fit" data-poptrox="youtube,800x400">Xem Thêm</a>
  </div>
</div>

<div class="box">
  <a  class="image fit"><img src="{{asset('/images/anh.png')}}" alt="" /></a>
  <div class="inner">
    <h3>Nascetur nunc varius commodo</h3>
    <p>Interdum amet accumsan placerat commodo ut amet aliquam blandit nunc tempor lobortis nunc non. Mi accumsan.</p>
    <a  class="button style2 fit" data-poptrox="youtube,800x400">Xem Thêm</a>
  </div>
</div>

</div>
</section>