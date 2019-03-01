<!DOCTYPE html>
<html lang="en">
<head>
  <!--
  Individual project for Airport Auto Electrics
  Created by Vitalie (vitaliedeveloper.com), 18/06/2016
-->

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="Airport Auto Electric, auto electrical repair, fitting parts, Collinstown Swords, Dublin.">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!-- FlexSlider-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css"/>
<link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
<!-- jQuery CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!--Bootstrap CDN fontawesome -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Google Map -->
<script  src="https://maps.googleapis.com/maps/api/js"></script>
<!-- External Mobile -->
<link rel="stylesheet"  href="css/main.css"/>
<!-- External CSS desktop-->
<link rel="stylesheet" type="text/css" media="(min-width: 740px)" href="css/desktop.css"/>

<title>Services | Airport Auto Electrics</title>

</head>
<body>
  <header id="header">
    <div class="wrapper">
      <div class="topBarInfo">
        <ul>
        <li id="desktopLogoHide"><a id="logoHideShow" href="index.html">AIRPORTAUTOELECTRICS.<span class="com">COM</span></a></li>
        <li><a id="locationHideShow" href="index.html#contactUs"><i class="fa fa-map-marker"></i>Location</a></li>
        <li><a href="index.html#contactForm"><i class="fa fa-envelope"></i>info@airportautoelectrics.com</a></li>
        <li><a href="tel:0872309097"><i class="fa fa-phone"></i>087 230 9097</a></li>
        <li><a  class="opHours scroll" href="#OpenHours"><i class="fa fa-clock-o"></i>OPENING HOURS</a></li>
        <li><a class="topfacebook" href="https://www.facebook.com/airportautoelectricscom-177126489005511/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div><!-- End of topBarInfo -->
      <!--  Navigation menu -->
      <nav>
        <div class="menu-icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="sidebar">
          <!--<a href="#"><img src="" alt="company logo"></a>-->
            <p><a class="mobileLogo" href="index.html">AIRPORTAUTOELECTRICS.<span class="com">COM</span></a></p>
          <ul class="menu">
            <!-- <li><a class="mobileLogo" href="index.html">AIRPORTAUTOELECTRICS.<span class="com">COM</span></a></li> -->
            <li><a href="index.html#header">Home</a></li>
            <li><a href="index.html#aboutUS">About</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="index.html#contactUs">Contact</a></li>
          </ul>

          <ul class="social-icons">
            <li><a href="https://www.facebook.com/airportautoelectricscom-177126489005511/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="index.html#contactForm"><i class="fa fa-envelope"></i></a></li>
            <li><a href="tel:0872309097"><i class="fa fa-phone-square"></i></a></li>
            <li><a  href="index.html#contactUs"><i class="fa fa-map-marker"></i></a></li>
          </ul>
        </div>
      </nav><!-- End of nav -->
    </div>

  </header><!-- End of header -->

<section id="tankyou">
  <div class="wrapper">
  <h1>Thank you for visiting our website</h1>
  <p>We will contact your as soon as possible</p>
  <?php

  // This displays errors
  // error_reporting(E_ALL);
  // ini_set('display_errors', 1);

  if(isset($_POST['name'])) {
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$phone = $_POST['phone'];
  	$message = $_POST['message'];

  	$mailTo = "info@vitaliedeveloper.com";
  	$headers = "From: ".$email;
  	$txt = "You have received an email from "."\n\n Name: ".$name."\n\n Phone number: ".$phone."\n\n Message: ".$message;
  	$subject= "You received a message from ".$name;

  	mail($mailTo, $subject, $txt, $headers);

  }
  else {
  	echo "<p>There was a problem with your email</p>";
  }
  // header("Location: contact.php?mailsend");
  ?>

</div><!--End of wrapper -->
</section><!--End of section -->

  <div id="footerSection">
    <div class="wrapper footSect">
      <section><!-- footerSection section 1-->
        <h1>Find Us</h1>
        <address>
          <ul>
            <li>Airport Autoelectrics.com</li>
            <li>Unit 17 Collinstown Cross Industrial Estate</li>
            <li>Old Airport Road, Commons, Swords</li>
            <li>Co. Dublin</li>
            <li><a href="index.html#contactForm"><i class="fa fa-envelope"></i>info@airportautoelectrics.com</a></li>
            <li><a href="tel:0872309097"><i class="fa fa-phone-square"></i>087 230 9097</a></li>
          </ul>
        </address>
      </section><!-- footerSection section 1-->

      <section><!-- footerSection section 2-->
        <h1>Our Services</h1>
        <p>Some services we provide are:</p>
        <ul>
          <li>Starter Motor Replacement</li>
          <li>Alternator Replacement</li>
          <li>Alarm supply and fitting</li>
          <li>Hands free kits</li>
          <li>Batteries</li>
          <li>Reversing Aids</li>
          <li>Fault finding</li>
          <li>Plus much much more</li>
        </ul>
      </section><!-- End of footerSection section 2-->

      <section id="OpenHours"><!-- footerSection section 3-->
        <h1>Opening hours</h1>
        <ul>
          <li>Monday: 8:30am - 5:30pm</li>
          <li>Tuesday: 8:30am - 5:30pm</li>
          <li>Wednesday: 8:30am - 5:30pm</li>
          <li>Thursday: 8:30am - 5:30pm</li>
          <li>Friday: 8:30am - 5:00pm</li>
          <li>Saturday: BY APPOIMENT ONLY</li>
          <li>Sunday: Closed</li>
        </ul>
      </section><!-- End of footerSection section 3-->
    </div><!--End of the #container -->
    <!-- Start of the Footer -->
    <footer>
      <p>Airport Auto Electrics Ireland &copy; 2018.</p>
    </footer>

  </div><!-- End of #footerSection-->

  <!-- External JS -->
  <script src="js/main.js" ></script>
</body>
</html>
