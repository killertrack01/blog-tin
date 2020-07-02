<style>

/* Box */

	.box {
		border-radius: 4px;
		border: solid 1px;
		margin-bottom: 2em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
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
/* Flex */

	/* Image */

	.image {
		border: 0;
		display: inline-block;
		position: relative;
		box-shadow: 0px 0px 0px 7px #fff, 0px 0px 0px 8px rgba(0, 0, 0, 0.1);
	}

		.image img {
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
			margin: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			margin: 0 0 1em 1.5em;
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

		.image.round {
			border-radius: 100%;
		}

			.image.round img {
				border-radius: 100%;
			}

		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.main img {
				width: 100%;
			}

	.video-wrapper {
		position: relative;
		padding-bottom: 56.25%;
	/* 16:9 */

		padding-top: 25px;
		height: 0;
	}

		.video-wrapper iframe, .video-wrapper object, .video-wrapper embed {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

.wrapper {
    padding: 6em 0 4em 0;
    position: relative;
}

    .wrapper .inner {
        margin: 0 auto;
        width: 80em;
        position: relative;
        z-index: 99;
    }

    .wrapper header {
        margin-bottom: 4em;
    }

        @media screen and (max-width: 736px) {

            .wrapper header {
                margin-bottom: 2em;
            }

        }

    .wrapper.style1 {
        background-color: #fafafa;
        color: #999999;
    }

        .wrapper.style1 input, .wrapper.style1 select, .wrapper.style1 textarea {
            color: #000;
        }

        .wrapper.style1 a {
            color: #000;
        }

            .wrapper.style1 a:hover {
                color: rgba(0, 0, 0, 0.5);
            }

        .wrapper.style1 strong, .wrapper.style1 b {
            color: #000;
        }

        .wrapper.style1 h1, .wrapper.style1 h2, .wrapper.style1 h3, .wrapper.style1 h4, .wrapper.style1 h5, .wrapper.style1 h6 {
            color: #000;
        }

        .wrapper.style1 blockquote {
            border-left-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 code {
            background: rgba(0, 0, 0, 0.075);
            border-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 hr {
            border-bottom-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 .box {
            border-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 input[type="submit"],
        .wrapper.style1 input[type="reset"],
        .wrapper.style1 input[type="button"],
        .wrapper.style1 button,
        .wrapper.style1 .button {
            background-color: #3498db;
            color: #fff !important;
        }

            .wrapper.style1 input[type="submit"]:hover,
            .wrapper.style1 input[type="reset"]:hover,
            .wrapper.style1 input[type="button"]:hover,
            .wrapper.style1 button:hover,
            .wrapper.style1 .button:hover {
                background-color: #4aa3df;
            }

            .wrapper.style1 input[type="submit"]:active,
            .wrapper.style1 input[type="reset"]:active,
            .wrapper.style1 input[type="button"]:active,
            .wrapper.style1 button:active,
            .wrapper.style1 .button:active {
                background-color: #258cd1;
            }

            .wrapper.style1 input[type="submit"].alt,
            .wrapper.style1 input[type="reset"].alt,
            .wrapper.style1 input[type="button"].alt,
            .wrapper.style1 button.alt,
            .wrapper.style1 .button.alt {
                background-color: transparent;
                box-shadow: inset 0 0 0 2px rgba(0, 0, 0, 0.15);
                color: #000 !important;
            }

                .wrapper.style1 input[type="submit"].alt:hover,
                .wrapper.style1 input[type="reset"].alt:hover,
                .wrapper.style1 input[type="button"].alt:hover,
                .wrapper.style1 button.alt:hover,
                .wrapper.style1 .button.alt:hover {
                    background-color: rgba(0, 0, 0, 0.075);
                }

                .wrapper.style1 input[type="submit"].alt:active,
                .wrapper.style1 input[type="reset"].alt:active,
                .wrapper.style1 input[type="button"].alt:active,
                .wrapper.style1 button.alt:active,
                .wrapper.style1 .button.alt:active {
                    background-color: rgba(0, 0, 0, 0.2);
                }

                .wrapper.style1 input[type="submit"].alt.icon:before,
                .wrapper.style1 input[type="reset"].alt.icon:before,
                .wrapper.style1 input[type="button"].alt.icon:before,
                .wrapper.style1 button.alt.icon:before,
                .wrapper.style1 .button.alt.icon:before {
                    color: #bfbfbf;
                }

            .wrapper.style1 input[type="submit"].special,
            .wrapper.style1 input[type="reset"].special,
            .wrapper.style1 input[type="button"].special,
            .wrapper.style1 button.special,
            .wrapper.style1 .button.special {
                background-color: #000;
                color: #fafafa !important;
            }

        .wrapper.style1 label {
            color: #000;
        }

        .wrapper.style1 input[type="text"],
        .wrapper.style1 input[type="password"],
        .wrapper.style1 input[type="email"],
        .wrapper.style1 select,
        .wrapper.style1 textarea {
            background: rgba(0, 0, 0, 0.075);
            border-color: rgba(0, 0, 0, 0.15);
        }

            .wrapper.style1 input[type="text"]:focus,
            .wrapper.style1 input[type="password"]:focus,
            .wrapper.style1 input[type="email"]:focus,
            .wrapper.style1 select:focus,
            .wrapper.style1 textarea:focus {
                border-color: #000;
                box-shadow: 0 0 0 1px #000;
            }

        .wrapper.style1 .select-wrapper:before {
            color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 input[type="checkbox"] + label,
        .wrapper.style1 input[type="radio"] + label {
            color: #999999;
        }

            .wrapper.style1 input[type="checkbox"] + label:before,
            .wrapper.style1 input[type="radio"] + label:before {
                background: rgba(0, 0, 0, 0.075);
                border-color: rgba(0, 0, 0, 0.15);
            }

        .wrapper.style1 input[type="checkbox"]:checked + label:before,
        .wrapper.style1 input[type="radio"]:checked + label:before {
            background-color: #000;
            border-color: #000;
            color: #fafafa;
        }

        .wrapper.style1 input[type="checkbox"]:focus + label:before,
        .wrapper.style1 input[type="radio"]:focus + label:before {
            border-color: #000;
            box-shadow: 0 0 0 1px #000;
        }

        .wrapper.style1 ::-webkit-input-placeholder {
            color: #bfbfbf !important;
        }

        .wrapper.style1 :-moz-placeholder {
            color: #bfbfbf !important;
        }

        .wrapper.style1 ::-moz-placeholder {
            color: #bfbfbf !important;
        }

        .wrapper.style1 :-ms-input-placeholder {
            color: #bfbfbf !important;
        }

        .wrapper.style1 .formerize-placeholder {
            color: #bfbfbf !important;
        }

        .wrapper.style1 ul.alt li {
            border-top-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 header p {
            color: #bfbfbf;
        }

        .wrapper.style1 table tbody tr {
            border-color: rgba(0, 0, 0, 0.15);
        }

            .wrapper.style1 table tbody tr:nth-child(2n + 1) {
                background-color: rgba(0, 0, 0, 0.075);
            }

        .wrapper.style1 table th {
            color: #000;
        }

        .wrapper.style1 table thead {
            border-bottom-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 table tfoot {
            border-top-color: rgba(0, 0, 0, 0.15);
        }

        .wrapper.style1 table.alt tbody tr td {
            border-color: rgba(0, 0, 0, 0.15);
        }

    .wrapper.style2 {
        background-color: #3498db;
        color: #aed6f1;
    }

        .wrapper.style2 input, .wrapper.style2 select, .wrapper.style2 textarea {
            color: #fff;
        }

        .wrapper.style2 a {
            color: #999999;
        }

            .wrapper.style2 a:hover {
                color: rgba(153, 153, 153, 0.5);
            }

        .wrapper.style2 strong, .wrapper.style2 b {
            color: #fff;
        }

        .wrapper.style2 h1, .wrapper.style2 h2, .wrapper.style2 h3, .wrapper.style2 h4, .wrapper.style2 h5, .wrapper.style2 h6 {
            color: #fff;
        }

        .wrapper.style2 blockquote {
            border-left-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 code {
            background: rgba(255, 255, 255, 0.075);
            border-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 hr {
            border-bottom-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 .box {
            border-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 input[type="submit"],
        .wrapper.style2 input[type="reset"],
        .wrapper.style2 input[type="button"],
        .wrapper.style2 button,
        .wrapper.style2 .button {
            background-color: #fff;
            color: #3498db !important;
        }

            .wrapper.style2 input[type="submit"].alt,
            .wrapper.style2 input[type="reset"].alt,
            .wrapper.style2 input[type="button"].alt,
            .wrapper.style2 button.alt,
            .wrapper.style2 .button.alt {
                background-color: transparent;
                box-shadow: inset 0 0 0 2px rgba(255, 255, 255, 0.25);
                color: #fff !important;
            }

                .wrapper.style2 input[type="submit"].alt:hover,
                .wrapper.style2 input[type="reset"].alt:hover,
                .wrapper.style2 input[type="button"].alt:hover,
                .wrapper.style2 button.alt:hover,
                .wrapper.style2 .button.alt:hover {
                    background-color: rgba(255, 255, 255, 0.075);
                }

                .wrapper.style2 input[type="submit"].alt:active,
                .wrapper.style2 input[type="reset"].alt:active,
                .wrapper.style2 input[type="button"].alt:active,
                .wrapper.style2 button.alt:active,
                .wrapper.style2 .button.alt:active {
                    background-color: rgba(255, 255, 255, 0.2);
                }

                .wrapper.style2 input[type="submit"].alt.icon:before,
                .wrapper.style2 input[type="reset"].alt.icon:before,
                .wrapper.style2 input[type="button"].alt.icon:before,
                .wrapper.style2 button.alt.icon:before,
                .wrapper.style2 .button.alt.icon:before {
                    color: #67b2e4;
                }

            .wrapper.style2 input[type="submit"].special,
            .wrapper.style2 input[type="reset"].special,
            .wrapper.style2 input[type="button"].special,
            .wrapper.style2 button.special,
            .wrapper.style2 .button.special {
                background-color: #fafafa;
                color: #000 !important;
            }

                .wrapper.style2 input[type="submit"].special:hover,
                .wrapper.style2 input[type="reset"].special:hover,
                .wrapper.style2 input[type="button"].special:hover,
                .wrapper.style2 button.special:hover,
                .wrapper.style2 .button.special:hover {
                    background-color: white;
                }

                .wrapper.style2 input[type="submit"].special:active,
                .wrapper.style2 input[type="reset"].special:active,
                .wrapper.style2 input[type="button"].special:active,
                .wrapper.style2 button.special:active,
                .wrapper.style2 .button.special:active {
                    background-color: #ededed;
                }

        .wrapper.style2 label {
            color: #fff;
        }

        .wrapper.style2 input[type="text"],
        .wrapper.style2 input[type="password"],
        .wrapper.style2 input[type="email"],
        .wrapper.style2 select,
        .wrapper.style2 textarea {
            background: rgba(255, 255, 255, 0.075);
            border-color: rgba(255, 255, 255, 0.25);
        }

            .wrapper.style2 input[type="text"]:focus,
            .wrapper.style2 input[type="password"]:focus,
            .wrapper.style2 input[type="email"]:focus,
            .wrapper.style2 select:focus,
            .wrapper.style2 textarea:focus {
                border-color: #fafafa;
                box-shadow: 0 0 0 1px #fafafa;
            }

        .wrapper.style2 .select-wrapper:before {
            color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 input[type="checkbox"] + label,
        .wrapper.style2 input[type="radio"] + label {
            color: #aed6f1;
        }

            .wrapper.style2 input[type="checkbox"] + label:before,
            .wrapper.style2 input[type="radio"] + label:before {
                background: rgba(255, 255, 255, 0.075);
                border-color: rgba(255, 255, 255, 0.25);
            }

        .wrapper.style2 input[type="checkbox"]:checked + label:before,
        .wrapper.style2 input[type="radio"]:checked + label:before {
            background-color: #fafafa;
            border-color: #fafafa;
            color: #000;
        }

        .wrapper.style2 input[type="checkbox"]:focus + label:before,
        .wrapper.style2 input[type="radio"]:focus + label:before {
            border-color: #fafafa;
            box-shadow: 0 0 0 1px #fafafa;
        }

        .wrapper.style2 ::-webkit-input-placeholder {
            color: #67b2e4 !important;
        }

        .wrapper.style2 :-moz-placeholder {
            color: #67b2e4 !important;
        }

        .wrapper.style2 ::-moz-placeholder {
            color: #67b2e4 !important;
        }

        .wrapper.style2 :-ms-input-placeholder {
            color: #67b2e4 !important;
        }

        .wrapper.style2 .formerize-placeholder {
            color: #67b2e4 !important;
        }

        .wrapper.style2 ul.alt li {
            border-top-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 header p {
            color: #67b2e4;
        }

        .wrapper.style2 table tbody tr {
            border-color: rgba(255, 255, 255, 0.25);
        }

            .wrapper.style2 table tbody tr:nth-child(2n + 1) {
                background-color: rgba(255, 255, 255, 0.075);
            }

        .wrapper.style2 table th {
            color: #fff;
        }

        .wrapper.style2 table thead {
            border-bottom-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 table tfoot {
            border-top-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 table.alt tbody tr td {
            border-color: rgba(255, 255, 255, 0.25);
        }

        .wrapper.style2 .image {
            box-shadow: 0px 0px 0px 7px #3498db, 0px 0px 0px 8px rgba(255, 255, 255, 0.25);
        }

    @media screen and (max-width: 1280px) {

        .wrapper > .inner {
            width: 60em;
        }

    }

    @media screen and (max-width: 980px) {

        .wrapper > .inner {
            width: 90%;
        }

    }

    @media screen and (max-width: 736px) {

        .wrapper {
            padding: 3em 0 1em 0;
        }

    }

</style>
<section>
                    <section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="row">
									<div class="col-md-6">
										<div class="image round fit">
											<a><img src="{{asset('/images/login.jpg')}}" alt="" /></a>
										</div>
									</div>
									<div class="col-md-6">
										<h3>Maecenas a gravida quam</h3>
										<p>Etiam posuere hendrerit arcu, ac blandit nulla. Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex.</p>
										<p>Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex. </p>
										<a href="#" class="button">Learn More</a>
									</div>
								</div>
						</div>
                    </section>  
                    <section class="wrapper style2">
						<div class="inner">
							<div class="row">
								<div class="col-md-6">
									<h3>Suspendisse quis massa vel justo</h3>
									<p>Etiam posuere hendrerit arcu, ac blandit nulla. Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex.</p>
									<p>Sed congue malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet, enim magna cursus auctor lacinia nunc ex blandit augue. Ut vitae neque fermentum, luctus elit fermentum, porta augue. Nullam ultricies, turpis at fermentum iaculis, nunc justo dictum dui, non aliquet erat nibh non ex. </p>
									<a href="#" class="button">Learn More</a>
								</div>
								<div class="col-md-6">
									<div class="image round fit">
										<a><img src="{{asset('/images/anh.png')}}" alt="" /></a>
									</div>
								</div>
							</div>
						</div>
					</section>
</section>