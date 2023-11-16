<?php include 'includes/database.php'; ?>

<?php

if (isset($_POST['bookappointment'])) {

  // print_r($_POST);

  // exit();

  // validate form
  $formErrors = array();

  if (!(isset($_POST['firstname']) && strlen($_POST['firstname']))) {
    array_push($formErrors, "First name is reuired field.");
  }

  if (!(isset($_POST['lastname']) && strlen($_POST['lastname']))) {
    array_push($formErrors, "Last name is reuired field.");
  }

  if (!(isset($_POST['email']) && strlen($_POST['email']))) {
    array_push($formErrors, "Email is reuired field.");
  }


  if (!(isset($_POST['contact']) && strlen($_POST['contact']))) {
    array_push($formErrors, "Contact is reuired field.");
  }

  if (!(isset($_POST['appointmenttime']) && strlen($_POST['appointmenttime']))) {
    array_push($formErrors, "Appointment time is reuired field.");
  }

  if (!(isset($_POST['message']) && strlen($_POST['message']))) {
    array_push($formErrors, "Message is reuired field.");
  }

  if (isset($_SESSION["auth"]['userid'])) {
    $userId = $_SESSION["auth"]['userid'];
  } else {
    $userId = 0;
  }

  if (count($formErrors) == 0) {
    $sql = "INSERT INTO appointments (userid, firstname, lastname, email, contact, appointmenttime,message) 
        VALUES ($userId,'" . $_POST['firstname'] . "','" . $_POST['lastname'] . "','" . $_POST['email'] . "', 
        '" . $_POST['contact'] . "','" . $_POST['appointmenttime'] . "','" . $_POST['message'] . "')";
    $conn->query($sql);

    $_POST['firstname'] = "";
    $_POST['lastname'] = "";
    $_POST['email'] = "";
    $_POST['contact'] = "";
    $_POST['appointmenttime'] = "";
    $_POST['message'] = "";

    $successMessage = "Appointment booked successfully";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>booking</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/global.css" rel="stylesheet">
  <link href="css/details.css" rel="stylesheet">
  <link rel="stylesheet" href="css/form.css">
  <link rel="stylesheet" href="css/aboutus.css">
  <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
  <script src="js/bootstrap-datetimepicker.min.js"></script>
</head>

<body>


  <?php include 'header.php'; ?>

  <section id="form">
    <div class="container">

      <form class="well form-horizontal" action=" " method="post" id="contact_form">
        <fieldset>

          <!-- Form Name -->
          <legend>
            <center>
              <h2><b>Make an Appointment</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

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


          <div class="form-group">
            <label class="col-md-4 control-label">First Name</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="firstname" placeholder="First Name" class="form-control" type="text" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : "" ?>">
              </div>
            </div>
          </div>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Last Name</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="lastname" placeholder="Last Name" class="form-control" type="text" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : "" ?>">
              </div>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-4 control-label">E-Mail</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" placeholder="E-Mail Address" class="form-control" type="text" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>">
              </div>
            </div>
          </div>


          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Contact No.</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input name="contact" placeholder="()" class="form-control" type="text" value="<?php echo isset($_POST['contact']) ? $_POST['contact'] : "" ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Appoinmrnt Time.</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                <div class="input-group date" id="id_0">
                  <input type="text" value="<?php echo isset($_POST['appointmenttime']) ? $_POST['appointmenttime'] : "" ?>" class="form-control" name="appointmenttime" required="">
                  <span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                  </span>

                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-4 control-label">Message.</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <textarea class="form-control" name="message" placeholder="message"><?php echo isset($_POST['message']) ? $_POST['message'] : "" ?></textarea>
              </div>
            </div>
          </div>


          <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <input type="hidden" name="bookappointment" value="bookappointment">
            <div class="col-md-4"><br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBook Now <span class="glyphicon glyphicon-bookmark"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
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

    <script type="text/javascript">
      (function($) {
        $(function() {
          $('#id_0').datetimepicker({
            "allowInputToggle": true,
            "showClose": true,
            "showClear": true,
            "showTodayButton": true,
            "format": "MM/DD/YYYY hh:mm:ss A",
          });
        });
      })(jQuery);
    </script>
  </section>

  <section id="footer_main" class="clearfix">
    <div class="footer_main_1">
      <p class="text-center">©2022 <strong>Delicious Food Secrets</strong>. All Rights Reserved. Design by <a href="http://www.facebook.com">Hisbullah </a></p>
    </div>
  </section>