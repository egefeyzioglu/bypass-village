<?php
  $navbar_items = array(
    '<a href="#">Navbar Item</a>',
    '<a href="#">Navbar Item</a>',
    '<a href="#">Navbar Item</a>'
  );
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Lock Bypass Village</title>
  
  <!-- Favicon Stuff -->
  <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png?v=2">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png?v=2">
  <link rel="icon" type="image/png" sizes="192x192" href="/img/favicons/android-chrome-192x192.png?v=2">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png?v=2">
  <link rel="manifest" href="/img/favicons/site.webmanifest?v=2">
  <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg?v=2" color="#15a14a">
  <link rel="shortcut icon" href="/img/favicons/favicon.ico?v=2">
  <meta name="apple-mobile-web-app-title" content="Lock Bypass Village">
  <meta name="application-name" content="Lock Bypass Village">
  <meta name="msapplication-TileColor" content="#15a14a">
  <meta name="msapplication-config" content="/img/favicons/browserconfig.xml?v=2">
  <meta name="theme-color" content="#ffffff">
  <!-- /Favicon Stuff -->

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<style media="screen">
    a#logo-container, a#logo-container img{
      height: 100%;
    }
	</style>
  <!-- /CSS -->
</head>
<body>
  <nav class="green darken-1" role="navigation">
    <div class="nav-wrapper container">
			<a id="logo-container" href="#" class="brand-logo">
        <img src="/img/LBV_C.png"/>
      </a>
      <ul class="right hide-on-med-and-down">
        <?php
          foreach ($navbar_items as $item) {
            echo("<li>$item</li>");
          }
        ?>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <?php
        foreach ($navbar_items as $item) {
          echo("<li>$item</li>");
        }
        ?>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>


  <div class="container">
    <div class="section">
    </div>
  </div>

  <footer class="page-footer green darken-1">
    <style>
      footer a{
        color: inherit;
        text-decoration: none;
        font-weight: bold;
      }

      footer a:hover{
        text-decoration: underline;
      }
    </style>
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Get Involved</h5>
          <p class="grey-text text-lighten-4">Check out our <a href="/info">Information Page</a> for ways to get involved with the LBV, or contact <a href="mailto:info@bypassvillage.com">info@bypassvillage.org</a>!</p>
          <p class="grey-text text-lighten-4">Check back here for updates or follow us on <a href="https://twitter.com/bypassvillage">Twitter</a> to stay hear the latest from us!</p>

        </div>
        <div class="col l6 s12">
          <h5 class="white-text">Who Are We?</h5>
          <!-- Engineers!!! -->
          <p class="grey-text text-lighten-4">
            LBV is planned each year by a core team of security experts from Toronto, Canada - along with a group of awesome people from around the world who let themselves get roped into it somehow.
          </p>
          <p class="grey-text text-lighten-4">
            See our <a href="/about-us">About Us</a> page for more details.
          </p>
        </div>
      </div>
    </div>
    <div class="footer-copyright green darken-1">
      <div class="container">
        Lock Bypass Village 2021
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
