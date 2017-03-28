<?php
  include 'database_setup.php';
?>

<!DOCTYPE html>
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
    <a href="#">Home</a>
    <a href="coffee.php">Coffee</a>
    <a href="snacks.php">Snack</a>
    <a href="pastry.php">Pastry</a>
    <a href="contact.php">Contact Us</a>
  </div>

  <!-- Main Page -->
  <div id="content" class="w3-main">
    <!-- Top Navigation -->
    <div class="row top-margin-main-navigation">
      <div class="col-xs-12">
        <div class="w3-panel">
          <nav class="navbar navbar-default w3-theme-l2 navbar-fixed-top" id="navigation">
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
                  <li><a href="#" class="active w3-white" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
                  <li><a href="account-signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li class="w3-hide-small w3-right"><form action="exit.php"><input type="submit" id="exit" name="exit" value="x"></form></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="row">
      <div class="col-xs-12">
        <div class="w3-panel top-margin-content">
          <div class="w3-center">
              <h1>Shopping Cart</h1>
          </div>

          <div class="w3-threequarter border">
          <?php
              error_reporting(0);

              $x = 0;
              $y = 0;
              $sub = 0.00;
              $choices = array();

              echo "<div class='w3-threequarter'><div class='w3-center'>";
              echo "item";
              echo "</div></div>";
              echo "<div class='w3-quarter'><div class='w3-center'>";
              echo "price";
              echo "</div></div>";

              if (file_exists("data/cart.txt")) {
                  $file = fopen("data/cart.txt", "r");

                  while(!feof($file)) {
                      $sourceA = fgets($file);
                      $nameA = fgets($file);
                      $quantityA = fgets($file);
                      $priceA = fgets($file);

                      echo "<div class='w3-threequarter'><div class='w3-left'>";
                      echo "<img id='stuff' src=$sourceA style='width: 50%'> $nameA($quantityA)";
                      echo "</div></div>";
                      echo "<div class='w3-quarter'><div class='w3-left'>";
                      echo "$priceA";
                      echo "</div></div>";
                  }

                  fclose($file);
              }

              $list = file("data/purchase.txt");

              $sub = array_sum($list);
          ?>
          </div>
          <div class="w3-quarter border">
              <div class="w3-center">
                  <h5>Invoice</h5>
              </div>
              <div class="w3-twothird">
                  <p>Subtotal:</p>
              </div>
              <div class="w3-third">
                  <div class='w3-right'>
                  <p>$
                  <?=
                      $sub;

                      $filemoney = fopen("data/money.txt", "a");
                      $subtotal = "$" . $sub;
                      fputs($filemoney, $subtotal . PHP_EOL);
                      fclose($filemoney);
                  ?></p>
                  </div>
              </div>
              <div class="w3-twothird">
                  <p>HST:</p>
              </div>
              <div class="w3-third">
                  <div class='w3-right'>
                  <p>$
                  <?=
                      $tax = $sub * 0.13;

                      $filemoney = fopen("data/money.txt", "a");
                      $taxes = "$" . $tax;
                      fputs($filemoney, $taxes . PHP_EOL);
                      fclose($filemoney);

                      $filetax = fopen("data/tax.txt", "a");
                      $taxes1 = "$" . $tax;
                      $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                      fputs($filetax, $taxes1 . PHP_EOL);
                      fputs($filetax, $breaks . PHP_EOL);
                      fclose($filetax);
                  ?></p>
                  </div>
              </div>
              <div class="w3-twothird">
                  <p>Total:</p>
              </div>
              <div class="w3-third">
                  <div class='w3-right'>
                  <p>$
                  <?=
                      $total = $sub + $tax;

                      $filemoney = fopen("data/money.txt", "a");
                      $totaltotal = "$" . $total;
                      fputs($filemoney, $totaltotal . PHP_EOL);
                      fclose($filemoney);
                  ?></p>
                  </div>
              </div>
          </div>
          <div class="w3-quarter border">
              <div class="w3-center">
                  <h5>Method of payment</h5>
                  <a href="mastercard.php"><img src="https://usshortcodedirectory.com/wp-content/uploads/2016/03/www.mastercard.com_.png" id="mastercard" name="mastercard"></a>
                  <a href="visa.php"><img src="https://cdn3.iconfinder.com/data/icons/flat-icons-web/40/Visa-128.png" id="visa" name="visa"></a>
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
