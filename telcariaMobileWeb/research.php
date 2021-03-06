<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Valor del ancho de la pantalla del dispositivo -->
    <title><?php echo $lang['TITLE_RESEARCH']; ?></title>
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- Fuente externa de google -->
    <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
    <!-- Icono de Favoritos -->
    <link rel="shortcut icon" type="image/x-icon" href="img/circles.png">
    <!-- Para el menú desplegable -->
    <link href="css/flexnav.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

  <!-- Menú de lenguaje -->
  <p style="text-align:right;color:#003366;margin-right:10%">
      <a href="research.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="research.php?lang=es">
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
  <div class="menu-button">Menu</div>

  <nav>
    <ul class="flexnav" data-breakpoint="800">
          <li>
            <a href="index.php">
              <img src="img/homeB.png" alt="Home Icon" style="width:25px;height:25px" onmouseover="this.src='img/homeH.png';" onmouseout="this.src='img/homeB.png';" />
            </a>
          </li>
        </li>
        <li><a href="about.php"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>
        <li><a href="services.php"><?php echo $lang['MENU_SERVICES']; ?></a></li>
        <li>
          <a href="research.php" style="color:#ffff99"><?php echo $lang['MENU_RESEARCH']; ?>
            <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/>
          </a>
        </li>
        <li><a href="work.php"><?php echo $lang['MENU_WORK']; ?></a></li>
        <li>
          <a href="contact.php">
            <img src="img/mailB.png" alt="mail Icon" style="width:25px;height:25px" onmouseover="this.src='img/mailH.png';" onmouseout="this.src='img/mailB.png';" />
          </a>
        </li>
    </ul>
  </nav>

  <div class="clear"></div>

<!-- Articulo Secundario -->
<div id="secondary-content">
  <div class="wrapper">
  <article>
    <h1><?php echo $lang['RESEARCH_TITLE']; ?></h1>
    <p>
      <?php echo $lang['RESEARCH_FIRST']; ?>
		<li><?php echo $lang['RESEARCH_FIRST_UL_1']; ?></li>
    <li><?php echo $lang['RESEARCH_FIRST_UL_2']; ?></li>
	</p>
  </article>

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
  <!-- Scripts para el menú desplegable -->
  <script type="text/javascript" src="js/jquery.flexnav.min.js"></script>
  <script>
      $(".flexnav").flexNav();
  </script>

  </body>
  </html>
