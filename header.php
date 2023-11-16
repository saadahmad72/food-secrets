<section id="header">
	<nav class="navbar navbar-default navbar-fixed-top">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand navbar-brand-centered">
				<a href="index.php">
					<img src="./img/logo.png" class="img-responsive alt=" Logo">
					<!-- <div class="ribbon  ribbon--red">Delicious Food Secrets</div> -->
				</a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<div>
				<ul class="nav navbar-nav navbar">
					<li class="">
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="AboutUs.php">ABOUT US</a>
					</li>
					<li>
						<a href="recipes.php">RECIPES</a>
					</li>
					<li>
						<a href="contact.php">CONTACT US</a>
					</li>
					<div class="right_nav">
						<a href="registeration.php" class="user_icon">
							<li class="well_1">
								<i class="fa fa-user"></i>
							</li>
						</a>

						<a href="<?php echo isset($_SESSION["auth"]) ?   "logout" :  'signin'; ?>.php" class="user_icon">
							<?php echo isset($_SESSION["auth"]) ?  "Logut" :  'Login'; ?>
						</a>
						
						<a href="booking.php" class="button app_bt">Book an Appointment</a>
					</div>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
</section>