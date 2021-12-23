<!DOCTYPE html>
<html lang="en">
<?php
include("files/head.php");
?>

<body class="animsition">

	<?php
	include("files/header.php");
	include("files/slider.php");
	include("files/banner.php");
	?>

	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Our product
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".1">
						Diamond
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".2">
						Gold
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".3">
						Silver
					</button>

				</div>

			</div>

			<div class="row isotope-grid">
				<?php
				include("files/connect.php");
				$sql = "Select * from products";

				$results = $connect->query($sql);

				while ($final = $results->fetch_assoc()) {		?>
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $final['category_id'] ?>">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-pic hov-img0">
								<img src="
							<?php
							$path = $final['picture'];
							$display = substr($path, 3);
							echo $display;

							?>" alt="IMG-PRODUCT">

								<a href="details.php?details_id=<?php echo $final['id'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
									More Details
								</a>
							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
										<?php echo $final['name'] ?>
									</a>

									<span class="stext-105 cl3">
										Rs. <?php echo $final['price'] ?>
									</span>
								</div>

								<div class="block2-txt-child2 flex-r p-t-3">
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

			<!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="product.php" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					View all products
				</a>
			</div>
		</div>
		<br><br>
		<!--begining of our services-->
		<section class="service-grid pb-5 pt-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 text-center mb-4">
						<div class="service-title">
							<h2 class="ltext-103 cl5">Our Services</h2>
							<p>We offer the best services</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 text-center mb-3" style="background-image: url(images/design.jpg);">
						<div class="service-wrap">
							<div class="service-icon">
								<i class="fa fa-heart"></i>
							</div>
							<h4>Designs</h4>
							<p>We offer the best design.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center mb-3" style="background-image: url(images/customize.jpg);">
						<div class="service-wrap">
							<div class="service-icon">
								<i class="fa fa-diamond"></i>
							</div>
							<h4>Customize</h4>
							<p>We customize for special order.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center mb-3" style="background-image: url(images/responsive.jpg);">
						<div class="service-wrap">
							<div class="service-icon">
								<i class="fa fa-database"></i>
							</div>
							<h4>Responsive design</h4>
							<p>Our website is responsive.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center mb-3" style="background-image: url(images/care.jpg);">
						<div class="service-wrap">
							<div class="service-icon">
								<i class="fa fa-microphone"></i>
							</div>
							<h4>Customer Care</h4>
							<p>Our care for our customer.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center mb-3" style="background-image: url(images/delivery.jpg);">
						<div class="service-wrap">
							<div class="service-icon">
								<i class="fa fa-truck"></i>
							</div>
							<h4>Fast delivery</h4>
							<p>We offer the fast delivery</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-center mb-3" style="background-image: url(images/support.jpg);">
						<div class="service-wrap">
							<div class="service-icon">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<h4>Dedicated support</h4>
							<p>We offer 24x7 services</p>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!--end of our services-->
		<section>
			<section class="team-page-section">
				<div class="container">
					<!-- Sec Title -->
					<div class="sec-title centered">
						<div class="title">
							<h3 class="ltext-103 cl5">
								Our Team
							</h3>
						</div>
						<div class="separator">
							<span></span>
						</div>

					</div>

					<div class="row clearfix">

						<!-- Team Block -->
						<div class="team-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.skype.com/"><i class="fa fa-skype"></i></a></li>

									<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-in"></i></a></li>
								</ul>
								<div class="image">
									<a href="#"><img src="images/gal3.jpg" alt="" /></a>
								</div>
								<div class="lower-content">
									<h3><a href="#">Founder </a></h3>
									<div class="designation">Establish the company</div>
								</div>
							</div>
						</div>
						<!-- Team Block -->
						<div class="team-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.skype.com/"><i class="fa fa-skype"></i></a></li>

									<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-in"></i></a></li>
								</ul>
								<div class="image">
									<a href="#"><img src="images/gal2.jpg" alt="" /></a>
								</div>
								<div class="lower-content">
									<h3><a href="#">Manager</a></h3>
									<div class="designation">Expert Manager </div>
								</div>
							</div>
						</div>
						<!-- Team Block -->
						<div class="team-block col-lg-4 col-md-6 col-sm-12">
							<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<ul class="social-icons">
									<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
									<li><a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.skype.com/"><i class="fa fa-skype"></i></a></li>

									<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
								<div class="image">
									<a href="#"><img src="images/gal.jpg" alt="" /></a>
								</div>
								<div class="lower-content">
									<h3><a href="#">Designer </a></h3>
									<div class="designation">Expert Designer </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<?php
	include("files/footer.php");
	?>
</body>

</html>