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
    <a href="home.php">Home</a>
    <a href="#">Coffee</a>
    <a href="snacks.php">Snack</a>
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
            <h3>Thank you for your Purchase</h3>
          </div>

          <p>Thank you for shopping online at the Deli Brew. Here is your recipt. Please save a copy for your reference.</p>

          <div class="w3-panel">
              <?php
                  error_reporting(E_ALL ^ E_DEPRECATED);

                  $filer = fopen("data/things.txt", "r");
                  $sale = fopen("data/sale.txt", "a");
                  $buyer = fopen('data/buyer.txt', 'a');
                  $datebuy = date("M d, Y H:i:sa");
                  $dateday = date ("M d, Y");
                  $items_num = 0;

                  $quantity = '';
                  $file = fopen('data/cart.txt', 'a');
                  $purchase = fopen('data/purchase.txt', 'a');
                  $stuff = fopen("data/things.txt", "a");
                  $stock = '';
                  $sold_quantity = 0;

                  fwrite($buyer, $datebuy . PHP_EOL);
                  fwrite($sale, $datebuy . PHP_EOL);

                  while(!feof($filer)) {
                      $name = fgets($filer);
                      $quantity = fgets($filer);
                      $price = fgets($filer);

                      echo "<div class='w3-half'><div class='w3-left'>";
                      echo "$name($quantity)";
                      echo "</div></div>";
                      echo "<div class='w3-quarter'><div class='w3-right'>";
                      echo "$price";
                      echo "</div></div>";

                      fwrite($buyer, $name . PHP_EOL);
                      fwrite($buyer, $quantity . PHP_EOL);
                      fwrite($buyer, $price . PHP_EOL);

                      fwrite($sale, $name . PHP_EOL);
                      fwrite($sale, $quantity . PHP_EOL);
                      fwrite($sale, $price . PHP_EOL);

                      $items_num += $quantity;
                  }

                  $breaks = "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=";
                  fwrite($sale, $breaks . PHP_EOL);
                  fwrite($buyer, $breaks . PHP_EOL);

                  fclose($filer);
                  fclose($sale);
                  fclose($buyer);

              ?>
          </div>

          <div class="w3-panel">
              <div class="w3-container w3-right">
                  <?=
                      error_reporting(E_ALL ^ E_DEPRECATED);
                      $filemoney = fopen("data/money.txt", "r");

                      $submoney = fgets($filemoney);
                      $taxmoney = fgets($filemoney);
                      $totalmoney = fgets($filemoney);

                      //$servername = "127.0.0.1:3306";
                      $servername = "localhost";
                      $username = "root";
                      $password = "";

                      // Create the connection
                      $connection = mysql_connect($servername, $username, $password);

                      // Check the connection
                      if(!$connection) {
                          die("Connection Failed");
                      }

                      mysql_select_db("delibrew_db");

                      echo "Subtotal: $submoney <br>";
                      echo "HST: $taxmoney <br>";
                      echo "Total: $totalmoney <br>";

                      $sqlinsert = "INSERT INTO sales_tbl(total_items, total_price, total_tax, date_purchase) VALUES('$items_num','$totalmoney', '$taxmoney', '$datebuy')";

                      if(!mysql_query($sqlinsert, $connection)) {
                          die("New Record Creation Failed");
                      }

                      fclose($filemoney);
                      mysql_close($connection);
                  ?>
              </div>
          </div>

          <div class="w3-panel">
              <p>We'll email you the comfirmation right away. We'll also email you when it's available to pick up at your email (
              <?php
                  $fileemail = fopen("data/emails.txt", "r");
                  $email = fgets($fileemail);

                  echo "$email";

                  fclose($fileemail);
              ?>
              )</p>
          </div>

          <p>Done? Click the button to go back to the homepage.</p>
          <form action="close.php">
              <input type="submit" name="submit" value="Close">
          </form>
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
