<?php include 'includes/database.php'; ?>

<?php

if (isset($_SESSION["auth"])) {
    header('Location: http://' .  $SERVER['HTTP_HOST'] . 'http://localhost/private/admin/index.php');
    exit;
}

if (isset($_POST['login'])) {

    $formErrors = array();

    if (!(isset($_POST['email']) && strlen($_POST['email']))) {
        array_push($formErrors, "Email is required field.");
    }

    if (!(isset($_POST['user_password']) && strlen($_POST['user_password']))) {
        array_push($formErrors, "Password is reuired field.");
    }

    if (count($formErrors) == 0) {
        $sql = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . md5($_POST['user_password']) . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $response = $result->fetch_assoc();

            $_SESSION["auth"]['firstName'] = $response['firstname'];
            $_SESSION["auth"]['lastName'] = $response['lastname'];
            $_SESSION["auth"]['email'] = $response['email'];
            $_SESSION["auth"]['userid'] = $response['userid'];

            $successMessage = "User successfully registerd.";

            header('Location:' .  $siteUrl);
        }
    }

    // exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Private Chef</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/details.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="AboutUs.php">ABOUT US</a></li>
                        <li><a href="recipes.php">RECIPES</a></li>
                        <!-- <li><a href="details.html">DETAILS</a></li> -->
                        <!-- <li><a href="products.html">PRODUCTS</a></li>			
				<li><a href="products-details.html">PRODUCTS DETAILS</a></li> -->
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="details.php" class="button">Book an Appointment</a></li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

            <!-- /.container-fluid -->
        </nav>
    </section>



    <section id="form">
        <div class="container">

            <form class="well form-horizontal" action=" " method="post" id="contact_form">
                <fieldset>

                    <!-- Form Name -->
                    <legend>
                        <center>
                            <h2><b>Sign In</b></h2>
                        </center>
                    </legend><br>

                    <?php if (isset($formErrors) && count($formErrors) > 0) { ?>
                        <?php foreach ($formErrors as $error) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error ?>
                            </div>
                    <?php }
                    } ?>

                    <?php if (isset($successMessage) && strlen($successMessage) > 0) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $successMessage ?>
                        </div>
                    <?php } ?>


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input name="email" placeholder="E-Mail Address" class="form-control" type="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input name="user_password" placeholder="Password" class="form-control" type="password" required>
                            </div>
                        </div>
                    </div>


                    <!-- Success message -->
                    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
                    <div class="content text-center">
                        If you Don't have Account, Please <a href="registeration.php">Sign Up</a>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4"><br>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="login" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSign In <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                        </div>
                    </div>

                </fieldset>
            </form>
        </div>
        </div><!-- /.container -->

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
            <p class="text-center">©2022 <strong>Delicious Food Secrets</strong>. All Rights Reserved. Design by <a href="http://www.facebook.com">Hisbullah </a></p>
        </div>
    </section>