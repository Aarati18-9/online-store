	<!-- Footer -->

	<head>
		<style>
			*,
			*:after,
			*:before {
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
			}

			body {
				margin: 0;
				overflow-x: hidden !important;
				box-sizing: border-box;
				font-family: 'Source Sans Pro', sans-serif;
			}


			a {
				text-decoration: none;
				outline: none !important;
				color: #fff;
			}

			.border-shape {
				background: #ffbe00 none repeat scroll 0 0;
				color: #fff;
				display: block;
				height: 3px;
				left: 0;
				margin: 20px auto;
				position: relative;
				right: 0;
				text-align: center;
				top: 0;
				width: 80px;
			}

			.border-shape::before {
				background: #ffbe00 none repeat scroll 0 0;
				bottom: 0;
				content: "";
				height: 1px;
				left: 80px;
				margin: 0 auto;
				position: absolute;
				text-align: center;
				top: 1px;
				width: 100px;
			}

			.border-shape::after {
				background: #ffbe00 none repeat scroll 0 0;
				bottom: 0;
				content: "";
				height: 1px;
				margin: 0 auto;
				position: absolute;
				right: 80px;
				text-align: center;
				top: 1px;
				width: 100px;
			}

			/*FOOTER*/
			footer {
				width: 100%;
				background-color: #121619;
				color: #fff;
			}

			.top_header {
				padding: 2rem;
				display: flex;
				align-items: center;
				justify-content: center;
				position: relative;
			}

			.top_header section {
				display: flex;
				align-items: center;
				justify-content: center;
				width: 100%;
			}

			.top_header span {
				padding: 0 1rem;
			}

			.top_header .fa {
				color: #ffbe00;
				font-size: 35px;
			}

			footer .border-shape {
				width: 40%;
			}

			footer .border-shape::before {
				width: 100%;
				left: 120px;
			}

			footer .border-shape::after {
				width: 100%;
				right: 120px;
			}

			footer .bottom_content section {
				padding: 1.5rem 2rem;
				display: flex;
				align-items: center;
				justify-content: Center;
			}

			.bottom_content a {
				margin: 0 20px;
				color: rgba(255, 255, 255, 0.7);
				transition: 0.5s;
			}

			.bottom_content a:hover {
				color: rgba(255, 255, 255, 1);
			}


			.copyright {
				padding: 0.8em 0;
				background-color: #1e1e1e;
				text-align: center;
				color: rgba(255, 255, 255, 0.7);
				font-size: 12px;
			}



			@media (max-width:820px) {
				.top_header {
					padding: 1rem;
					display: block;
				}

				.top_header section {
					margin: 40px 0;
					align-items: left;
					justify-content: left;
				}

				footer .bottom_content section {
					padding: 1rem;
					display: block;
				}

				footer .bottom_content section a {
					padding: 1rem;
					font-size: 12px;
					margin: 0 5px;
					display: inline-block;
				}
			}
		</style>
	</head>
	<footer>
		<div class="top_header">
			<section>
				<span><i class="fa fa-map-marker"></i></span>
				<span>Lubhoo,Lalitpur Nepal</span>
			</section>
			<section>
				<span><i class="fa fa-phone"></i></span>
				<span><a href="tel:+977-053-34567">+977-053-34567</a></span>
			</section>
			<section>
				<span><i class="fa fa-envelope"></i></span>
				<span><a href="mailto:adhikariaarati68@gmail.com">Send email</a></span>
			</section>
		</div>
		<span class="border-shape"></span>
		<div class="bottom_content">
			<section>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
			</section>
			<section>
				<a href="index.php">Home</a>
				<a href="about.php">About us</a>
				<a href="contact.php">Contact Us</a>
			</section>
		</div>
		<div class="copyright">
			Copyright © 2021 Joyas - All rights reserved
		</div>
	</footer>

	<!--Footer End-->
	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	<!-- Modal1 -->
	<div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="images/icons/icon-close.png" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="images/product-detail-01.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-01.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-01.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-02.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-02.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="images/product-detail-03.jpg">
										<div class="wrap-pic-w pos-relative">
											<img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="images/product-detail-03.jpg">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-5 p-b-30">

					</div>
				</div>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function() {
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/slick/slick.min.js"></script>
	<script src="js/slick-custom.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/parallax100/parallax100.js"></script>
	<script>
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
				delegate: 'a', // the selector for gallery item
				type: 'image',
				gallery: {
					enabled: true
				},
				mainClass: 'mfp-fade'
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/isotope/isotope.pkgd.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e) {
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function() {
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function() {
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function() {
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function() {
				swal(nameProduct, "is added to cart !", "success");
			});
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function() {
			$(this).css('position', 'relative');
			$(this).css('overflow', 'hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function() {
				ps.update();
			})
		});
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>