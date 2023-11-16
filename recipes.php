<?php include 'includes/database.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foody Diary</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/recipes.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>

	<?php include 'header.php';?>

	<section id="recipes_main">
		<div class="recipes_inner clearfix">
			<div class="container">
				<div class="row">
					<div class="recipes_main_1">
						<h1>Explore Recipes</h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="cooking">
		<div class="container">
			<div class="row">
				<div class="cooking_1 clearfix">
					<div class="col-sm-2">
						<div class="cooking_2">
							<select class="input-text">
								<option value="Religion">By Cuisine</option>
								<option value="Hindu">North</option>
								<option value="Muslim - Shia">South</option>
								<option value="Muslim - Sunni">East</option>
								<option value="Muslim - Others">West</option>
								<option value="Christian">Oriental</option>
								<option value="Sikh">Continental</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cooking_2">
							<select class="input-text">
								<option value="Religion">By Meal Type</option>
								<option value="Hindu">Breakfast</option>
								<option value="Muslim - Shia">Lunch</option>
								<option value="Muslim - Sunni">Dinner</option>
								<option value="Muslim - Others">Small Meals</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cooking_2">
							<select class="input-text">
								<option value="Religion">By Ingredient</option>
								<option value="Hindu">Paneer</option>
								<option value="Muslim - Shia">Spinach</option>
								<option value="Muslim - Sunni">Peas</option>
								<option value="Muslim - Others">Lentil Based</option>
								<option value="Christian">Potato</option>
								<option value="Sikh">Potol (Parwal)</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cooking_2">
							<select class="input-text">
								<option value="Religion">By Steps</option>
								<option value="Hindu">Step 2</option>
								<option value="Muslim - Shia">Step 3</option>
								<option value="Muslim - Sunni">Step 4</option>
								<option value="Muslim - Others">Step 5</option>
								<option value="Christian">Step 6</option>
								<option value="Sikh">Step 7</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cooking_2">
							<select class="input-text">
								<option value="Religion">By Dish Type</option>
								<option value="Hindu">Curry</option>
								<option value="Muslim - Shia">Dry Veg</option>
								<option value="Muslim - Sunni">Mashed Veg</option>
								<option value="Muslim - Others">Stir Fry</option>
								<option value="Christian">Gravy</option>
								<option value="Sikh">Thick Gravy</option>
							</select>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="cooking_2">
							<select class="input-text">
								<option value="Religion"> Diet Health</option>
								<option value="Hindu">Low Calorie</option>
								<option value="Muslim - Shia">Gluten Free</option>
								<option value="Muslim - Sunni">High Protein</option>
								<option value="Muslim - Others">Low Fat</option>
							</select>
						</div>
					</div>
	</section>
	<section id="recipes">
		<div class="container">
			<div class="row">
				<div class="recipes_1 clearfix">
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="CedarPlankSalmon.php"><img src="img/soloman R1.jpg" alt="abc" class="img_responsive">
							</a>
							<h4>Cedar-Plank Salmon</h4>
							<p>This slightly smoky grilled salmon is the showstopper you need for August entertaining. Serve with a tomato salad or some simple grilled broccolini. </p>
							<a href="CedarPlankSalmon.php" class="button">View More</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="Biryani.php"><img src="img/biryani R2.jpg" alt="abc" class="img_responsive"></a>
							<h4>Biryani</h4>
							<p>The most delicious dish in Asia to taste rich Masala of Asia. In pak-indo region, Only this dish has 100+ types. Have you tried our Biryani recipe yet?
							</p>
							<a href="Biryani.php" class="button">View More</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="Karahi.php"><img src="img/karahi R3.jpg" alt="abc" class="img_responsive"></a>
							<h4>Karahi</h4>
							<p>Enjoy the desi touch of chicken and beef in different form of desi karahi.Our desi and easy ecipe for this would leave you in taste of wonder with finger licking.</p>
							<a href="Karahi.php" class="button">View More</a>
						</div>
					</div>
				</div>
				<div class="recipes_1 clearfix">
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="KayLimePie.php"><img src="img/kay lime pie R4.jpg" alt="abc" class="img_responsive"></a>
							<h4>Kay Lime Pie</h4>
							<p>This tangy, tart, and creamy pie has a secret ingredient: a touch of lemon juice. This cake will give you a bit sweet & bit Tarty taste </p>
							<a href="KayLimePie.php" class="button">View More</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="ChickenCheeseBurger.php"><img src="img/chicken cheese burger R5.jpg" alt="abc" class="img_responsive"></a>
							<h4>Chicken Cheese Burger</h4>
							<p>These towering double-stacked chicken burgers get added moisture and flavor from Juciy Chicken petty & cheese slice in the mix.</p>
							<a href="ChickenCheeseBurger.php" class="button">View More</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="EasyZucchiniBread.php"><img src="img/zucchi bread R6.jpg" alt="abc" class="img_responsive"></a>
							<h4>Easy Zucchini Bread</h4>
							<p>That mountain of zucchini isn't going to eat itself. But this zucchini bread will disappear almost immediately—it's just that good</p>
							<a href="EasyZucchiniBread.php" class="button">View More</a>
						</div>
					</div>
				</div>
				<div class="recipes_1 clearfix">
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="ChickpeaPotatoChaat.php"><img src="img/chana chat R7.jpg" alt="abc" class="img_responsive"></a>
							<h4>Chickpea-Potato Chaat</h4>
							<p>If you boil the potatoes in the morning, this chaat recipe becomes the easiest assembly-only dish, ideal for a hot and humid day.</p>
							<a href="ChickpeaPotatoChaat.php" class="button">View More</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="AlmondCake.php"><img src="img/cake R8.jpg" alt="abc" class="img_responsive"></a>
							<h4>Almond Cake</h4>
							<p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
								Praesent mauris. Fusce nec </p>
							<a href="AlmondCake.php" class="button">View More</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="recipes_2">
							<a href="Cookies.php"><img src="img/cookies R9.jpg" alt="abc" class="img_responsive"></a>
							<h4>Cookies</h4>
							<p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
								Praesent mauris. Fusce nec </p>
							<a href="Cookies.php" class="button">View More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- footer -->
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
									<a href="index.php"><img src="./img/logo.png" class="img-responsive alt=" logo"></a>
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
									<li><a href="index.php">Home</a></li>
									<li><a href="AboutUs.php">about us</a></li>
									<li><a href="recipes.php">Rescipes</a></li>
									<li><a href="contact.php">Contact Us</a></li>

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

	<section id="footer_main" class="clearfix">
		<div class="footer_main_1">
			<p class="text-center">©2022<strong>Delicious Food Secrets</strong>. All Rights Reserved. Design by <a href="http://www.facebook.com">Hisbullah</a> </p>
		</div>
	</section>
</body>

</html>