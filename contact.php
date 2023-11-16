<?php include 'includes/database.php';?>

<?php

  if (isset($_POST['contactform'])) {

    // print_r($_POST);

    // exit();

    // validate form
    $formErrors = array();

    if (!(isset($_POST['firstname']) && strlen($_POST['firstname']))) {
      array_push($formErrors, "First name is reuired field.");
    }

    if (!(isset($_POST['email']) && strlen($_POST['email']))) {
      array_push($formErrors, "Email is reuired field.");
    }


     if (!(isset($_POST['message']) && strlen($_POST['message']))) {
      array_push($formErrors, "Message is reuired field.");
    }


    if (count($formErrors) == 0) {
        $to = "rehanbashir2211@gmail.com";
        $subject = "Contact";
        $txt = "Message from: ".$_POST['email']. "\r\n" . $_POST['message'];
        $headers = "From: no-reply@deleciousfoodsecret.com";

        mail($to,$subject,$txt,$headers);

        $_POST['firstname'] = "";
        $_POST['email'] = "";
        $_POST['message'] = "";
        $successMessage = "Thanks! we will contact you soon.";
    }
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
    <link href="css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'header.php';?>
    <section id="contact_main">
        <div class="contact_inner clearfix">
            <div class="container">
                <div class="row">
                    <div class="contact_main_1">
                        <h1>CONTACT US</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact_inner">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3635689.793072721!2d78.6421709625!3d27.141236999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1531201517392 " height="600" style="border:0; width:100%;" allowfullscreen=""></iframe>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <div class="col-sm-8">
                        <div class="col-sm-12 padding_left_1">
                            <div class="contact_3">
                                <h2 class="text-center">Any Question?</h2>
                                <div class=" content-top2">
                                    <h4 class="text-center">O</h4>
                                </div>
                                <p>Fill form to reach us!</p>
                            </div>
                        </div>
                        <form action="" method="post">

                            <div class="col-sm-12 space_all">
                                <?php if (isset($formErrors) && count($formErrors) > 0) { ?>
                                    <ul class="alert alert-danger" role="alert">
                                    <?php foreach ($formErrors as $error) { ?>
                                       <li><?php echo $error ?></li> 
                                    <?php }?>
                                    </ul>
                                <?php }?>

                                <?php if (isset($successMessage) && strlen($successMessage) > 0) { ?>
                                    <div class="alert alert-success" role="alert">
                                      <?php echo $successMessage ?>
                                    </div>
                                <?php } ?>
                                <div class="col-sm-6">
                                    <div class="contact_4">
                                        <input type="text" class="form-control" placeholder="Name" name="firstname" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : "" ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_4">
                                        <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="contact_5">
                                    <textarea placeholder="Message" name="message" class="form-control"><?php echo isset($_POST['message']) ? $_POST['message'] : "" ?></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="contact_6">
                                    <ul>
                                        <input type="hidden" name="contactform" value="contactform">
                                        <li><button class="button hvr-shutter-out-horizontal" type="submit"class="button">SEND</button></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact_8 clearfix">
                            <div class="contact_7">
                                <h2>Connect Us</h2>
                                <div class=" content-top2">
                                    <h4 class="text-center">O</h4>
                                </div>
                            </div>
                            <div class="contact_2">
                                <h4>Address:</h4>
                                <h5><i class="fa fa-home"></i><span class="media_1">123 Lorem ipsum dolor sit amet</span></h5>
                            </div>
                            <div class="contact_2">
                                <h4>Phones:</h4>
                                <h5><i class="fa fa-phone"></i><span class="media_1">123-4567-1234</span></h5>
                                <h5><i class="fa fa-calculator"></i><span class="media_1">432-5456-7658</span></h5>
                            </div>
                            <div class="contact_2">
                                <h4>E-mail:</h4>
                                <h5><i class="fa fa-envelope"></i><a href="#"><span class="media_2">info@gmail.com</span></a></h5>
                                <h5>Sed Dignissim Lacinia:<a href="#"><span class="media_3"> Porta</span></a></h5>
                            </div>
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
            <p class="text-center">©2022 <strong>Delicious Food Secrets</strong>. All Rights Reserved. Design by <a href="http://www.facebook.com">Hisbullah </a></p>
        </div>
    </section>

</body>

</html>