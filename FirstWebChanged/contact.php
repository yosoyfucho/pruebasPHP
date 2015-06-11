<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Telcaria Web</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="img/circles.png">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

  <!-- Menú de lenguaje -->
  <p style="text-align:right;color:#003366;margin-right:10%">
      <a href="index.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="index.php?lang=sp">
      Español <img src="img/sp.png" widht="75" height="25" alt="Español"/>
      </a>
  </p>

  <!-- Cabecera Telcaria y Texto -->
  <a href="index.php">
  <header>
    <h1>
      Fostering the vendor-neutral and<br>standard-based mobile Internet
    </h1>
  </header>
</a>

  <!-- Menú de navegación -->
  <nav>
    <ul>
          <li>
            <a href="index.php">
              <img src="img/homeB.png" alt="Home Icon" style="width:25px;height:25px" onmouseover="this.src='img/homeH.png';" onmouseout="this.src='img/homeB.png';" />
            </a>
          </li>
        </li>
        <li><a href="about.php">About us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="research.php">Research</a></li>
        <li><a href="work.html">Work with us!</a></li>
        <li>
          <a href="contact.php">
            <img src="img/mailH.png" alt="Home Icon" style="width:25px;height:25px"/>
            <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/>
          </a>
        </li>
    </ul>
  </nav>

<!-- Articulo Secundario -->
<div id="secondary-content">
  <div class="w-widget w-widget-map contac-map" data-widget-latlng="40.329120, -3.768538" data-widget-style="roadmap" data-widget-zoom="60" data-widget-tooltip="Telcaria Ideas S.L."></div>

  <div class="wrapper">
  <article>
    <h1>Where We Are</h1>
    <pre>
      Telcaria Ideas SL
      Calle Barrionuevo 8, Local 1
      28911, Leganés (Madrid)
      Spain
    </pre>
    <p>
      Email: <a href="mailto:info@telcaria.com?subject=feedback">info@telcaria.com</a>
    </p>
  </article>
</div>
<div class="w-container">
  <div class="wrap">
    <div class="contact-div">
      <h1 class="contact-heading">Contact Us</h1>
      <div class="sepreater"></div>
    </div>
    <p class="contact-para">Thanks for taking the time to contact us!
      <br>We do our best to respond to quickly, it could take us 1-2 business days to get back to you. Feel free to say hello!</p>
    <div class="w-form">
      <form action="contactForm.php" method="post">
      <label for="name">Name:</label>
       <input class="w-input" type="text" placeholder="Enter your name" name="cf_name">
       <br>
     <label for="email">Email Address:</label>
       <input class="w-input" placeholder="Enter your email address" type="text" name="cf_email" required="required">
       <br>
     <label for="email">Your Message:</label>
       <textarea class="w-input message" placeholder="Enter your Message Here" name="cf_message"></textarea><br>

     <input class="w-button" type="submit" value="Send">
   </form>
    <div class="w-form-done">
        <p>Thank you! Your submission has been received!</p>
      </div>
      <div class="w-form-fail">
        <p>Oops! Something went wrong while submitting the form :(</p>
      </div>
    </div>
  </div>
</div>
</div>


  <footer>
    <div id="footer-info">
      <small> Copyright 2015 &copy; Telcaria Ideas S.L.</small>
    </div>
    <div id="footer-links">
      <ul align="right">
        <li>
        <a href="https://twitter.com/telcaria" target="_blank">
        <img src='img/twitterFoot.png' align="right" width='20' height='20' onmouseover="this.src='img/twitterFootH.png';" onmouseout="this.src='img/twitterFoot.png';" />
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/company/telcaria-ideas-sl?trk=biz-companies-cym" target="_blank">
          <img src='img/likendinFoot.png' align="center" width='20' height='20' onmouseover="this.src='img/likendinFootH.png';" onmouseout="this.src='img/likendinFoot.png';" />
        </a>
      </li>
      </ul>
    </div>
  </footer>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/normal.js"></script>
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="js/carousels.js"></script>
  <script type="text/javascript" src="js/slider-modernizr.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/portfolio-effects.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/animation.js"></script>



  </body>
  </html>
