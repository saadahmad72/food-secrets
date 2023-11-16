<?php include 'includes/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>delicious food secrets</title>
	<!-- CSS only -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link rel="stylesheet" href="css/details.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
	<link type="text/css" rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
</head>

<body>

	<?php include 'header.php'; ?>
	<!-- Main Hero -->

	<section id="center" class="center_home">
		<div class="banner">
			<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
				<!-- Wrapper-for-Slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<!-- First-Slide -->
						<img src="img/slider bg1.jpg" alt="" class="img-responsive">
						<div class="carousel-caption kb_caption kb_caption_right">
							<h1 data-animation="animated flipInX" class="">Best Taste Ever</h1>
							<p data-animation="animated flipInX" class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
							<h4><a href="recipes.php" class="button hvr-shutter-out-horizontal">Read More</a></h4>
						</div>
					</div>
					<div class="item">
						<!-- Second-Slide -->
						<img src="img/slider bg2.jpg" alt="" class="img-responsive">
						<div class="carousel-caption kb_caption kb_caption_right">
							<h1 data-animation="animated fadeInDown">We Provide Our best</h1>
							<p data-animation="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
								Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
							<h4><a href="recipes.php" class="button hvr-shutter-out-horizontal">Read More</a></h4>
						</div>
					</div>
					<div class="item">
						<!-- Third-Slide -->
						<img src="img/slider bg3.jpg" alt="" class="img-responsive">
						<div class="carousel-caption kb_caption kb_caption_right">
							<h1 data-animation="animated fadeInDown">Homemade Food Hacks</h1>
							<p data-animation="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the when an unknown printer took a galley of type and scrambled [...]</p>
							<h4><a href="recipes.php" class="button">Read More</a></h4>
						</div>
					</div>
				</div>
				<!-- Left-Button -->
				<a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
					<span class="fa fa-angle-left " aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<!-- Right-Button -->
				<a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
					<span class="fa fa-angle-right " aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<script src="js/custom.js"></script>
		</div>
	</section>


	<!-- Explore Rcipes -->

	<section id="middle">
		<div class="container">
			<div class="row">
				<div class="middle_1">
					<h3>Explore Recipes</h3>
					<div class=" content-top2">
						<h4 class="text-center">O</h4>
					</div>
				</div>
				<div class="middle_2 clearfix">
					<div class="col-sm-4">
						<div class="middle_3">
							<a href="#">
								<img src="img/biryani.jpg" alt="abc" class="img_responsive">
							</a>
							<a href="Biryani.php">
								<h4>Biryani</h4>
							</a>
							<p>The most delicious dish in Asia to taste rich Masala of Asia. In pak-indo region, Only this dish has 100+ types.
								Have you tried our Biryani recipe yet? If not? then what are you waiting for?
						</div>
					</div>
					<div class="col-sm-4">
						<div class="middle_3">
							<a href="#"><img src="img/karahi.jpg" alt="abc" class="img_responsive"></a>
							<a href="Karahi.php">
								<h4>Karahi</h4>
							</a>
							<p>Enjoy the desi touch of chicken and beef in different form of desi karahi.Our desi and easy ecipe for this
								would leave you in taste of wonder with finger licking.
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="middle_3">
							<a href="#"><img src="img/bbq.jpg" alt="abc" class="img_responsive img-fluid"></a>
							<a href="recipes.php">
								<h4>BBQ Delight</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
								Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
						</div>
					</div>
				</div>
				<div class="explore-bt">
					<a href="recipes.php" class="button">Read More</a>
				</div>
			</div>
		</div>
	</section>


	<!-- pasta  -->

	<section id="dishes">
		<div class="container">
			<div class="row">
				<div class="dishes_1">
					<h3>Weekend Cheers!</h3>
					<div class=" content-top2">
						<h4 class="text-center">O</h4>
					</div>
				</div>
				<div class="dishes_2 clearfix">
					<div class="col-sm-6 space_all">
						<div class="dishes_3">
							<a href="#"><img src="img/ittalian pasta.jpg" alt="abc" class="img_responsive"></a>
						</div>
					</div>
					<div class="col-sm-6 space_all">
						<div class="dishes_4">
							<h3>Cheer up Your Weekend!</h3>
							<h4>Itallian Pasta</h4>
							<p>One of the best ittalian pasta recipe on foody diary to cheer up your boring time with quick cooking...</p>
							<a href="#" class="button">See More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Easy recipes -->


	<section id="snack">
		<div class="container">
			<div class="row">
				<div class="snack_1">
					<h3>Easy Snack Recipes</h3>
					<div class=" content-top2">
						<h4 class="text-center">O</h4>
					</div>
				</div>

				<div class="snack_2 clearfix">
					<div class="col-sm-6">
						<div class="snack_3">
							<a href="EasyZucchiniBread.php"><img src="img/zucchi bread (1).jpg" alt="abc" class="img-responsive"></a>
							<h3>Easy Zucchini Bread</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
								Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
								Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
								torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero.
								Sed dignissim lacinia nunc.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="snack_3">
							<a href="Cookies.php"><img src="img/cookies.jpg" alt="abc" class="img_responsive"></a>
							<h3>Cookies</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
								Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
								Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
								torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero.
								Sed dignissim lacinia nunc.</p>
						</div>
					</div>
				</div>

				<div class="snack_2 clearfix">
					<div class="col-sm-6">
						<div class="snack_3">
							<a href="ChickenCheeseBurger.php"><img src="img/chicken cheese burger.jpg" alt="abc" class="img_responsive"></a>
							<h3>Cheese Burger</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
								Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
								Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
								torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero.
								Sed dignissim lacinia nunc.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="snack_3">
							<a href="KayLimePie.php"><img src="img/kay lime pie.jpg" alt="abc" class="img_responsive"></a>
							<h3>Kay Lime Pie</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
								Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
								Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
								torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero.
								Sed dignissim lacinia nunc.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- <section id="noodles">
 <div class="container">
  <div class="row">
   <div class="noodles_1">
    <h3>MAGGI Noodles Recipes</h3>
	<div class=" content-top2">
	 <h4 class="text-center">O</h4>
	</div>
   </div>
   <div class="noodles_2 clearfix">
    <div class="col-sm-3">
	 <div class="noodles_3">
	  <a href="#"><img src="img/11.jpg" alt="abc" class="img_responsive"></a>
	  <h4>Paneer Bhurji MAGGI Noodles</h4>
	  <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="noodles_3">
	  <a href="#"><img src="img/12.jpg" alt="abc" class="img_responsive"></a>
	  <h4>Egg Bhurji MAGGI Noodles</h4>
	  <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="noodles_3">
	  <a href="#"><img src="img/13.jpg" alt="abc" class="img_responsive"></a>
	  <h4>Easy Peasy MAGGI Noodles</h4>
	  <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="noodles_3">
	  <a href="#"><img src="img/14.jpg" alt="abc" class="img_responsive"></a>
	  <h4>Cheesy Italiano MAGGI Noodles</h4>
	  <p>Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.</p>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section> -->

	<!-- 10 minuts cooking -->

	<section id="fusion">
		<div class="container">
			<div class="row">
				<div class="fusion_1">
					<h3>10 Minutes Cooking</h3>
					<div class=" content-top2">
						<h4 class="text-center">O</h4>
					</div>
				</div>
				<div class="fusion_2 clearfix">
					<div class="col-sm-6 space_all">
						<div class="fusion_3">
							<a href="ChickpeaPotatoChaat.php"><img src="img/chana chat.jpg" alt="abc" class="img_responsive"></a>
						</div>
					</div>
					<div class="col-sm-6 space_all">
						<div class="fusion_4">
							<h3>Something Spicy, Something Sweet</h3>
							<strong>
								<h4>Chickpea-Potato Chaat</h4>
							</strong>
							<p>Chickpea-Potato Chaat is one of the most popular North Indian pasta dishes. It is a simple preparation which can...</p>
							<a href="ChickpeaPotatoChaat.php" class="button">See More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Newsletter -->


	<section class="subscribe">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="content">
						<h2>Subscribe Our Newsletter</h2>
						<div class=" content-top2">
							<h4 class="text-center">O</h4>
						</div>
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Enter your e-mail">
							<span class="input-group-btn">
								<button class="button" type="submit">
									Subscribe Us
								</button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- All time favortie -->


	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="event_1">
						<h3>All Time Favourites</h3>
						<div class=" content-top2">
							<h4 class="text-center">O</h4>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="event_2">
							<!-- colored -->
							<div class="ih-item square colored effect14 bottom_to_top">
								<a href="Biryani.php">
									<div class="img"><img src="img\biryani.jpg" alt="abc" class="img-responsive"></div>
									<div class="info">
										<h3>Pastas</h3>
										<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
											Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
											Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
											torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed.</p>
									</div>
								</a>
							</div>
							<!-- end colored -->
						</div>
					</div>
					<div class="col-sm-6">
						<div class="event_2">
							<!-- colored -->
							<div class="ih-item square colored effect14 bottom_to_top">
								<a href="CedarPlankSalmon.php">
									<div class="img"><img src="img/soloman.jpg" alt="abc" class="img-responsive"></div>
									<div class="info">
										<h3>Cedar-Plank Salmon</h3>
										<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
											Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
											Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
											torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed.</p>
									</div>
								</a>
							</div>
							<!-- end colored -->
						</div>
					</div>
					<div class="col-sm-6">
						<div class="event_2">
							<!-- colored -->
							<div class="ih-item square colored effect14 bottom_to_top">
								<a href="AlmondCake.php">
									<div class="img"><img src="img/cake.jpg" alt="abc" class="img-responsive"></div>
									<div class="info">
										<h3>Cakes</h3>
										<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
											Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
											Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
											torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed.</p>
									</div>
								</a>
							</div>
							<!-- end colored -->
						</div>
					</div>
					<div class="col-sm-6">
						<div class="event_2">
							<!-- colored -->
							<div class="ih-item square colored effect14 bottom_to_top"><a href="Cookies.php">
									<div class="img">
										<img src="img/cookies.jpg" alt="abc" class="img-responsive">
									</div>
									<div class="info">
										<h3>Cookies</h3>
										<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odionec odio.
											Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
											Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.
											torquent per conubia nostra, per inceptos . Curabitursodales ligula in libero. Sed.</p>
									</div>
								</a></div>
							<!-- end colored -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- News / blog section -->

	<section id="news">
		<div class="container">
			<div class="row">
				<div class="news_1 clearfix">
					<div class="news_2">
						<h2>Seasonal Flavours</h2>
						<div class=" content-top2">
							<h4 class="text-center">O</h4>
						</div>
						<div class="col-sm-6">
							<div class="news_3">
								<a href="#"><img src="img/steaks.jpg" alt="abc" class="img_responsive"></a>
							</div>
							<div class="news_4 clearfix">
								<div class="col-sm-3 space_all">
									<div class="news_5">
										<h4>10 Th <br>JAN</h4>
									</div>
								</div>
								<div class="col-sm-9 space_all">
									<div class="news_6">
										<h3>Top beef Steak Recipe </h3>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<a href="#" class="button">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="news_3">
								<a href="#"><img src="img/noodles.jpg" alt="abc" class="img_responsive"></a>
							</div>
							<div class="news_4 clearfix">
								<div class="col-sm-3 space_all">
									<div class="news_5">
										<h4>12 Th <br>JAN</h4>
									</div>
								</div>
								<div class="col-sm-9 space_all">
									<div class="news_6">
										<h3>Easy 2 Minutes Cooking </h3>
										<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
										<a href="#" class="button">Read more</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- appointment -->

	<section id="appointment">
		<div class="full">
			<div class="appoint_bio  details_inner recipes_2">
				<h1 class="text-center">Need More Help?</h1>
				<a href="booking.php" class="button bt-appoint">Book an Appointment</a>
			</div>
		</div>
	</section>






	<!-- foooterr -->

	<section id="footer">

		<footer class="footer-section">
			<div class="container">
				<div class="footer-cta">
					<div class="row">
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="single-cta">
								<i class="fas fa-map-marker-alt"></i>
								<div class="cta-text">
									<h4>Find us</h4>
									<span>1010 Avenue, sw 54321, chandigarh</span>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="single-cta">
								<i class="fas fa-phone"></i>
								<div class="cta-text">
									<h4>Call us</h4>
									<span>9876543210 0</span>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="single-cta">
								<i class="far fa-envelope-open"></i>
								<div class="cta-text">
									<h4>Mail us</h4>
									<span>mail@info.com</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-content">
					<div class="row">
						<div class="col-xl-4 col-lg-4">
							<div class="footer-widget">
								<div class="footer-logo">
									<a href="index.html"><img src="./img/logo.png" class="img-responsive alt=" Logo"></a>
								</div>
								<div class="footer-text">
									<p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
										elit,Lorem ipsum dolor sit amet.</p>
								</div>
								<div class="footer-social-icon">
									<span>Follow us</span>
									<a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
									<a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
									<a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="footer-widget">
								<div class="footer-widget-heading">
									<h3>Useful Links</h3>
								</div>
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">about us</a></li>
									<li><a href="#">Rescipes</a></li>
									<li><a href="#">Contact Us</a></li>

								</ul>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="footer-widget">
								<div class="footer-widget-heading">
									<h3>Subscribe</h3>
								</div>
								<div class="footer-text">
									<p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
								</div>
								<div class="subscribe-form">
									<form action="#">
										<input type="text" placeholder="Email Address">
										<button><i class="fab fa-telegram-plane"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</footer>
	</section>




	<!-- <section id="footer">
 <div class="container">
  <div class="row">
   <div class="footer_1 clearfix">
    <div class="col-sm-2">
	 <div class="footer_2">
	  <h4>Home</h4>
	  <ul>
	       <li><a href="#">Our Range</a></li>
	       <li><a href="#">From our kitchen</a></li>
	       <li><a href="#">FAQs</a></li>
	       <li><a href="#">Privacy Policy</a></li>
	       <li><a href="#">Terms of Use</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-2">
	 <div class="footer_2">
	  <h4>Favourites</h4>
	  <ul>
	       <li><a href="#">Chicken Recipes</a></li>
	       <li><a href="#">Aloo Recipes</a></li>
	       <li><a href="#">MAGGI Noodle Recipes</a></li>
	       <li><a href="#">Paneer Recipes</a></li>
	       <li><a href="#">Small Meals Recipes</a></li>
	       <li><a href="#">Breakfast Recipes</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-2">
	 <div class="footer_2">
	  <h4>Recipes</h4>
	  <ul>
	       <li><a href="#">Palak Paneer Recipe</a></li>
	       <li><a href="#">Matar Paneer Recipe</a></li>
	       <li><a href="#">Chicken Biryani Recipe</a></li>
	       <li><a href="#">Chilli Chicken Recipe</a></li>
	       <li><a href="#">Aloo Matar Recipe</a></li>
	       <li><a href="#">Aloo Gobhi Recipe</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_2">
	  <h4>Talk To Us</h4>
	  <ul>
	       <li><a href="#">Copyright</a></li>
	       <li><a href="#">About Nestlé</a></li>
	       <li><a href="#">Creating Shared Value at Nestlé</a></li>
	       <li><a href="#">Nutrition, Health & Wellness at Nestlé</a></li>
	       <li><a href="#">Our Websites and Social Media</a></li>
	       <li><a href="#">Contact Us</a></li>
	  </ul>
	 </div>
	</div>
	<div class="col-sm-3">
	 <div class="footer_3">
	  <h4>Follow Us</h4>
	  <ul>
	       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
	       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
	       <li><a href="#"><i class="fa fa-youtube"></i></a></li>
	       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
	  </ul>
	 </div>
	</div>
   </div>
  </div>
 </div>
</section> -->
	<section id="footer_main" class="clearfix">
		<div class="footer_main_1">
			<p class="text-center">©2022 <strong>Delicious Food Secrets</strong>. All Rights Reserved. Design by <a href="http://www.facebook.com">Hisbullah </a></p>
		</div>
	</section>
</body>

</html>