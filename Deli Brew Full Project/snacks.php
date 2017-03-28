donut<!DOCTYPE html>
<html>
<head>
  <title>Deli Brew</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-green.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
  <script type="text/javascript" src="Image-Slider-LnR.js"></script>
  <link rel="stylesheet" type="text/css" href="Image-Slider-LnR.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/behaviour.js"></script>
  <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
  <![endif]-->
</head>
<body class="max-size">
  <!-- Side Navigation -->
  <div id="main-side-nav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="home.php">Home</a>
    <a href="coffee.php">Coffee</a>
    <a href="#">Snack</a>
    <a href="pastry.php">Pastry</a>
    <a href="contact.php">Contact Us</a>
  </div>

  <!-- Main Page -->
  <div id="content" class="w3-main">
    <div class="row top-margin-main-navigation">
      <div class="col-xs-12">
        <div class="w3-panel">
          <nav class="navbar navbar-default w3-theme-l2 navbar-fixed-top">
            <div class="container-fluid">
              <div class="nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Deli Brew</a>
              </div>
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                  <li class="w3-hover-white"><a href="home.php">Home</a></li>
                  <li class="w3-hover-white"><a href="products.php">Products</a></li>
                  <li class="w3-hover-white"><a href="contact.php">Contact Us</a></li>
                  <li class="w3-hover-white"><a href="cafe-location.php">Find the Cafe</a></li>
                  <li class="w3-hover-white"><a href="franchising.php">Franchising</a></li>
                  <li class="w3-hover-white"><span onclick="openNav()">Side Navigation</span></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <form method="post" action="searching.php">
                      <input class="searching-margin" type="text" id="search" name="search" placeholder="Search Item">
                    </form>
                  </li>
                  <li><a href="shoppingcart.php" class="w3-hover-yellow" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  <li class="w3-hide-small w3-right"><form action="exit.php"><input type="submit" id="exit" name="exit" value="x"></form></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="w3-panel top-margin-content">
          <div class="w3-center">
            <h3>Snacks</h3>
          </div>
        </div>

        <div class="w3-panel content-border">
          <div class="w3-center">
            <b>Select a snack from the menu.</b>
          </div>
        </div>

        <div class="container">
          <div class="grid">
            <div class="cell">
              <a href="muffin.php"><img src="http://newyork.seriouseats.com/20110203TedandHoneymuffins/Muffinzz%20Serious%20Eats.jpg" class="responsive-image" alt="muffin" style="width:100%"></a>
              <div class="caption">
                <div class="w3-center">
                  <p>Muffin</p>
                  <?php
                      error_reporting(0);
                      $stock = '';

                      //$servername = "127.0.0.1:3306";
                      $servername = "localhost";
                      $username = "dhua3";
                      $password = "OpTicGen101";

                      // Create the connection
                      $connection = mysql_connect($servername, $username, $password);

                      // Check the connection
                      if(!$connection) {
                          die("Connection Failed");
                      }

                      mysql_select_db("delibrew_db");

                      $count = "SELECT COUNT(*) FROM muffin_tbl";
                      $countquery = mysql_query($count, $connection);

                      $average = "SELECT AVG(rating) FROM muffin_tbl";
                      $averagequery = mysql_query($average, $connection);

                      echo "
                      <div class='w3-panel'>";

                      if(mysql_result($averagequery, 0) == 0) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1 ||
                         (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                         (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2 ||
                         (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                         (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3 ||
                         (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                         (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4 ||
                         (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                         (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 5 ||
                         (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      if(mysql_result($averagequery, 0) == 0.5 ||
                         (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1.5 ||
                         (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                         (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2.5 ||
                         (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                         (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3.5 ||
                         (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                         (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4.5 ||
                         (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                         (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      echo "</div>";

                      mysql_close($connection);
                  ?>
                </div>
              </div>
            </div>
            <div class="cell">
              <a href="cookie.php"><img src="http://vignette1.wikia.nocookie.net/cookieclicker/images/b/b9/Chocolate_Chip_Cookies_-_kimberlykv.jpg/revision/latest/scale-to-width-down/258?cb=2013092521325" class="responsive-image" alt="cookie" style="width:100%"></a>
              <div class="caption">
                <div class="w3-center">
                  <p>Cookie</p>
                  <?php
                      error_reporting(0);
                      $stock = '';

                      //$servername = "127.0.0.1:3306";
                      $servername = "localhost";
                      $username = "dhua3";
                      $password = "OpTicGen101";

                      // Create the connection
                      $connection = mysql_connect($servername, $username, $password);

                      // Check the connection
                      if(!$connection) {
                          die("Connection Failed");
                      }

                      mysql_select_db("delibrew_db");

                      $count = "SELECT COUNT(*) FROM cookie_tbl";
                      $countquery = mysql_query($count, $connection);

                      $average = "SELECT AVG(rating) FROM cookie_tbl";
                      $averagequery = mysql_query($average, $connection);

                      echo "
                      <div class='w3-panel'>";

                      if(mysql_result($averagequery, 0) == 0) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1 ||
                         (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                         (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2 ||
                         (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                         (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3 ||
                         (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                         (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4 ||
                         (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                         (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 5 ||
                         (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      if(mysql_result($averagequery, 0) == 0.5 ||
                         (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1.5 ||
                         (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                         (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2.5 ||
                         (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                         (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3.5 ||
                         (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                         (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4.5 ||
                         (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                         (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      echo "</div>";

                      mysql_close($connection);
                  ?>
                </div>
              </div>
            </div>
            <div class="cell">
              <a href="donut.php"><img src="http://www.mapledonuts.com/uploads/donut%20platter.jpg" title="Donut" data-placement="top" data-toggle="popover" data-trigger="hover" data-content="Donuts are sweet and savory treats for anyone and everyone to enjoy. With any kinds of donuts, from donutbite glaze to chocolate dip donuts; these would sure make your day more enjoyable." class="responsive-image" alt="donut" style="width:100%"></a>
              <div class="caption">
                <div class="w3-center">
                  <p>Donut</p>
                  <?php
                      error_reporting(0);
                      $stock = '';

                      //$servername = "127.0.0.1:3306";
                      $servername = "localhost";
                      $username = "dhua3";
                      $password = "OpTicGen101";

                      // Create the connection
                      $connection = mysql_connect($servername, $username, $password);

                      // Check the connection
                      if(!$connection) {
                          die("Connection Failed");
                      }

                      mysql_select_db("delibrew_db");

                      $count = "SELECT COUNT(*) FROM donut_tbl";
                      $countquery = mysql_query($count, $connection);

                      $average = "SELECT AVG(rating) FROM donut_tbl";
                      $averagequery = mysql_query($average, $connection);

                      echo "
                      <div class='w3-panel'>";

                      if(mysql_result($averagequery, 0) == 0) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1 ||
                         (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                         (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2 ||
                         (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                         (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3 ||
                         (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                         (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4 ||
                         (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                         (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 5 ||
                         (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      if(mysql_result($averagequery, 0) == 0.5 ||
                         (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1.5 ||
                         (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                         (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2.5 ||
                         (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                         (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3.5 ||
                         (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                         (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4.5 ||
                         (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                         (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      echo "</div>";

                      mysql_close($connection);
                  ?>
                </div>
              </div>
            </div>
            <div class="cell">
              <a href="croissant.php"><img src="http://www.creationfood.ca/wp-content/uploads/2015/02/croissants-korea-AFPrelax-151113.jpg" class="responsive-image" alt="croissant" style="width:100%"></a>
              <div class="caption">
                <div class="w3-center">
                  <p>Croissant</p>
                  <?php
                      error_reporting(0);
                      $stock = '';

                      //$servername = "127.0.0.1:3306";
                      $servername = "localhost";
                      $username = "dhua3";
                      $password = "OpTicGen101";

                      // Create the connection
                      $connection = mysql_connect($servername, $username, $password);

                      // Check the connection
                      if(!$connection) {
                          die("Connection Failed");
                      }

                      mysql_select_db("delibrew_db");

                      $count = "SELECT COUNT(*) FROM croissant_tbl";
                      $countquery = mysql_query($count, $connection);

                      $average = "SELECT AVG(rating) FROM croissant_tbl";
                      $averagequery = mysql_query($average, $connection);

                      echo "
                      <div class='w3-panel'>";

                      if(mysql_result($averagequery, 0) == 0) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1 ||
                         (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                         (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2 ||
                         (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                         (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3 ||
                         (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                         (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4 ||
                         (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                         (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 5 ||
                         (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      if(mysql_result($averagequery, 0) == 0.5 ||
                         (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1.5 ||
                         (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                         (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2.5 ||
                         (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                         (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3.5 ||
                         (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                         (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4.5 ||
                         (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                         (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      echo "</div>";

                      mysql_close($connection);
                  ?>
                </div>
              </div>
            </div>
            <div class="cell">
              <a href="donut-bite.php"><img src="http://2.bp.blogspot.com/-z0qDwGGxAdQ/UYs3QKHCWiI/AAAAAAAAev4/4WMnlJjzY5A/s1600/photo+5.JPG" class="responsive-image" alt="donut-bite" style="width:100%"></a>
              <div class="caption">
                <div class="w3-center">
                  <p>Donut Bites</p>
                  <?php
                      error_reporting(0);
                      $stock = '';

                      //$servername = "127.0.0.1:3306";
                      $servername = "localhost";
                      $username = "dhua3";
                      $password = "OpTicGen101";

                      // Create the connection
                      $connection = mysql_connect($servername, $username, $password);

                      // Check the connection
                      if(!$connection) {
                          die("Connection Failed");
                      }

                      mysql_select_db("delibrew_db");

                      $count = "SELECT COUNT(*) FROM donutbite_tbl";
                      $countquery = mysql_query($count, $connection);

                      $average = "SELECT AVG(rating) FROM donutbite_tbl";
                      $averagequery = mysql_query($average, $connection);

                      echo "
                      <div class='w3-panel'>";

                      if(mysql_result($averagequery, 0) == 0) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1 ||
                         (mysql_result($averagequery, 0) > 0.8 && mysql_result($averagequery, 0) < 1) ||
                         (mysql_result($averagequery, 0) > 1 && mysql_result($averagequery, 0) < 1.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2 ||
                         (mysql_result($averagequery, 0) > 1.8 && mysql_result($averagequery, 0) < 2) ||
                         (mysql_result($averagequery, 0) > 2 && mysql_result($averagequery, 0) < 2.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3 ||
                         (mysql_result($averagequery, 0) > 2.8 && mysql_result($averagequery, 0) < 3) ||
                         (mysql_result($averagequery, 0) > 3 && mysql_result($averagequery, 0) < 3.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4 ||
                         (mysql_result($averagequery, 0) > 3.8 && mysql_result($averagequery, 0) < 4) ||
                         (mysql_result($averagequery, 0) > 4 && mysql_result($averagequery, 0) < 4.3)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 5 ||
                         (mysql_result($averagequery, 0) > 4.8 && mysql_result($averagequery, 0) < 5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      if(mysql_result($averagequery, 0) == 0.5 ||
                         (mysql_result($averagequery, 0) > 0.3 && mysql_result($averagequery, 0) < 0.5)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 1.5 ||
                         (mysql_result($averagequery, 0) > 1.3 && mysql_result($averagequery, 0) < 1.5) ||
                         (mysql_result($averagequery, 0) > 1.5 && mysql_result($averagequery, 0) < 1.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 2.5 ||
                         (mysql_result($averagequery, 0) > 2.3 && mysql_result($averagequery, 0) < 2.5) ||
                         (mysql_result($averagequery, 0) > 2.5 && mysql_result($averagequery, 0) < 2.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }  else if(mysql_result($averagequery, 0) == 3.5 ||
                         (mysql_result($averagequery, 0) > 3.3 && mysql_result($averagequery, 0) < 3.5) ||
                         (mysql_result($averagequery, 0) > 3.5 && mysql_result($averagequery, 0) < 3.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      } else if(mysql_result($averagequery, 0) == 4.5 ||
                         (mysql_result($averagequery, 0) > 4.3 && mysql_result($averagequery, 0) < 4.5) ||
                         (mysql_result($averagequery, 0) > 4.5 && mysql_result($averagequery, 0) < 4.8)) {
                             echo '<div class="rating">
                                  <span>' . mysql_result($countquery, 0) . '</span>
                                  <span><i class="fa fa-star-half-full" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                      }

                      echo "</div>";

                      mysql_close($connection);
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class=" footer-background fixed-bottom">
    <div class="container">
      <div class="grid">
        <div class="bottom-cell">
          <div class="w3-center">
            <h3>Store Location</h3>
            <p>London Ontario, Canada</p>

            <h3>Career Centre</h3>
            <p>Ready to join the team? Learn More <a href="career-centre.php">here</a></p>

            <h3>Media</h3>
            <p><a href="media.php">Media</a></p>

            <h5><a href="investor.php">Investors</a></h5>
          </div>
        </div>
        <div class="bottom-cell">
          <div class="w3-center">
            <h3>Want a Newsletter?</h3>
            <p>Sign up for updates, promos, special products, and more from the Deli Brew.</p>
            <form method="post" action="subscription.php">
              <input type="text" id="newsletter" name="newsletter" placeholder="Email Address">
              <input type="submit" id="submit" name="submit" value="Submit">
            </form>

            <h3>Follow Social Media</h3>
            <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
            <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
            <a class="w3-btn-floating w3-theme-l3" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
            <a class="w3-btn-floating w3-theme-l3 w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            <br>
            <a href="site-map.php" id="site-map" name="site-map">Site Map</a>
            <br>
            <a href="privacy-terms-conditions.php">Privacy & Terms and Conditions</a>
            <br>
            <a href="faq.php">FAQ</a>
          </div>
        </div>
        <div class="bottom-cell">
          <div class="w3-center">
            <h3>So Sweet</h3>
            <p>Pastries and Snacks would melt in the mouth because of how sweet and savory they could be.</p>

            <h3>Good to the Last Drop</h3>
            <p>Hot beverages can really lighten the mood and can really set the tone for the day, if you want to relax and hang out.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
