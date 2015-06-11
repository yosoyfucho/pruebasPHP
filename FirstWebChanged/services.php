<?php
include_once 'common.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $lang['TITLE_SERVICES']; ?></title>
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
      <a href="services.php?lang=en">
      English <img src="img/uk.png" widht="75" height="25" alt="English"/>
      </a>
      <a href="services.php?lang=sp">
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
        <li><a href="about.php"><?php echo $lang['MENU_ABOUT_US']; ?></a></li>
        <li><a href="services.php" style="color:#ffff99"><?php echo $lang['MENU_SERVICES']; ?>
          <img src="img/dot.png" alt="dot icon" style="width:5px;height:5px;align:center"/></a>
        </li>
        <li><a href="research.php"><?php echo $lang['MENU_RESEARCH']; ?></a></li>
        <li><a href="work.php"><?php echo $lang['MENU_WORK']; ?></a></li>
        <li>
          <a href="contact.php">
            <img src="img/mailB.png" alt="Home Icon" style="width:25px;height:25px" onmouseover="this.src='img/mailH.png';" onmouseout="this.src='img/mailB.png';" />
          </a>
        </li>
    </ul>
  </nav>

<!-- Articulo Secundario -->
<div id="secondary-content">
	<div class="wrapper">
		<article>
        <h1><a id="Services" style="font-family:'Crete Round'"><?php echo $lang['SERVICES_TITLE']; ?></a></h1>
        <p>We provide advanced virtual solutions for network caching, prefetching, network function virtualization, flexible functions split, cloud based network services all in an integrated and portable environment.</p>
        <p>Some of the main areas in which Telcaria works are:</p>

  </article>
  </div>
  <div class="wrapper">
    <article>
      <ul><h3><a href="#Open">Open Source Network Virtualization</a></h3>
        <li>Network Function Virtualization</li>
        <li>Cloud-based Network Services</li>
        <li>Software Defined Networking</li>
      </ul>

    </article>

    <article>
      <ul><h3><a href="#Internet">Internet Services</a></h3>
        <li>Mobile Operators Infrastructure</li>
        <li>Advanced Mobility Protocols</li>
        <li>Centralized inter-domain routing systems</li>
        <li>Scalable L2 routing protocols</li>
      </ul>

    </article>

    <article>
      <ul><h3><a href="#Wireless">Wireless Networks</a></h3>
        <li>Advanced MAC protocols</li>
        <li>Wireless Mesh Network</li>
        <li>Energy-efficent networks</li>
      </ul>

    </article>

    <article>
      <ul><h3><a href="#Web">Web Technology development and ICT Solution integration</a></h3>
        <li>Frontend applications for communications infrastructures (for PC, tablet and smartphone)</li>
        <li>Web browser plugins and web application design</li>
      </ul>
    </article>
  </div>
</div>

  <!-- Organizando desde  aquí -->
  <div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

  <div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
  <!-- Hasta aquí -->

  <div id="secondary-content">
  	<div class="wrapper">
      <article>
      <p>
        <img class="right" src="img/services1.png" alt="lan"/>
        <ul>
          <h2><a id="Open">Open source Network Virtualization</a></h2>
            <li> SDN deployments using OpenFlow as southbound protocol: <br>
				<ul>
                <li>Hands-on experience with multiple controllers: RYU, POX & OpenDaylight</li>
                <li>OpenFlow SW switches, such as Open vSwitch or Pantou for OpenWRT</li>
                <li>Experience in deploying medium-to-large scale testbeds</li>
                <li>Experience with OF-Config (with RYU), NETCONF and YANG
				  <ul>
                  <li>Working on discovery and auto-configuration extensions</li>
				  </ul>
                </li>
				</ul>
            </li>
            <li>NFV deployments using OpenStack</li>
            <li>Mobility support prototypes using OpenFlow, evaluating multiple alternative approaches and the associated cost</li>
        </ul>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>

    </article>
  </div>
</div>

<!-- Organizando desde  aquí -->
<div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

<div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
<!-- Hasta aquí -->

<div id="secondary-content">
	<div class="wrapper">
    <article>
      <p>
        <img class="right" src="img/services2.jpg" alt="lan"/>
        <h2><a id="Internet">Internet Services</a></h2>
        <p>Telcaria has an extensive expertise in architectures and protocols for communications networks, giving different solutions
          for network topology design, forwarding, routing, communication frameworks, etc. Our work takes a multi-disciplinary approach
          to the design and understanding of network protocols and architectures.</p>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>

    </article>
  </div>
</div>

<!-- Organizando desde  aquí -->
<div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

<div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
<!-- Hasta aquí -->

<div id="secondary-content">
	<div class="wrapper">
    <article>
      <p>
        <img class="right" src="img/services3.png" alt="lan"/>
        <h2> <a id="Wireless">Wireless Networks</a></h2>
        <p>Telcaria has different works in the areas of ad hoc and mesh networks, in particular on routing, and apply them in several contexts. We also
          explore new programmable interfaces to enhance performance and evolution of networks, specially for future wireless technologies.
        </p>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>

    </article>
</div>
</div>

<!-- Organizando desde  aquí -->
<div id="secondary-content" style="background-color:none"><div class="clear"></div></div>

<div id="secondary-content" style="background-image:none"><div class="clear"></div></div>
<!-- Hasta aquí -->

<div id="secondary-content">
	<div class="wrapper">
    <article>

      <p>
        <img class="right" src="img/services4.jpg" alt="lan"/>
        <h2><a id="Web">Web Technology development and ICT Solutions integration</a></h2>
        <p>Telcaria has developed different projects for other SMEs requesting applications for different environments (PC, tablet and smartphone), such as
          frontends for the visualization of data exchanged in communication networks (e.g. home automation), as well as web plugins and other specific
          developments. We have also worked with commodity hardware, such as Arduino and FPGAs (more specifically, NetFPGAs).
        </p>
      </p>
      <a href="#Services"><img src="img/up.png" alt="up Icon" style="width:25px;height:25px" onmouseover="this.src='img/upH.png';" onmouseout="this.src='img/up.png';" /></a>
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

  </body>
  </html>
