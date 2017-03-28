delibrew<!DOCTYPE html>
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
            <h3>Americano</h3>
          </div>
        </div>

        <div class="w3-panel content-border">
          <div class="col-xs-5">
            <img src="http://stirrific.com/wp-content/uploads/2014/10/cafe-americano-fresh-roasted-beans.jpg" class="responsive-image" alt="original" style="width:100%">
          </div>
          <div class="col-xs-7">
            <p>Americano</p>
            <form method="get" action="cart.php">
              Price: $2.99<br>
              <?php
                  error_reporting(E_ALL ^ E_DEPRECATED);
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

                  $sqlstock = "SELECT product_quantity FROM products_tbl WHERE product_id='2'";
                  $sqlquery = mysql_query($sqlstock, $connection);
                  $stock = mysql_fetch_assoc($sqlquery, MYSQL_ASSOC);

                  if($stock['product_quantity'] != 0) {
                      echo "<font color='green'><i class='fa fa-check'></i> In stock online</font><br>";
                  } else {
                      echo "<font color='red'><i class='fa fa-close'></i> out of stock</font><br>";
                  }

                  mysql_close($connection);
              ?>
              Quantiity:
              <select id ="quantity2" name="quantity2">
                  <option id="select" name="select" value="select">Select Quantity</option>
                  <option id="1" name="1" value="1">1</option>
                  <option id="1" name="2" value="2">2</option>
                  <option id="3" name="3" value="3">3</option>
                  <option id="4" name="4" value="4">4</option>
                  <option id="5" name="5" value="5">5</option>
                  <option id="6" name="6" value="6">6</option>
                  <option id="7" name="7" value="7">7</option>
                  <option id="8" name="8" value="8">8</option>
                  <option id="9" name="9" value="9">9</option>
                  <option id="10" name="10" value="10">10</option>
              </select><br>
              <input type="submit" name="submit" id="submit" value="Add to Cart">
            </form>
            <p>FREE SHIPPING on orders over $10 for all products in the shop.</p>
          </div>
        </div>

        <div class="w3-panel">
          <h1 style="font-size:25px;"><b>Customer Reviews</b></h1>

          <?php
              error_reporting(E_ALL ^ E_DEPRECATED);

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

              $sql = "SELECT * FROM americano_tbl ORDER BY id DESC";
              $query = mysql_query($sql, $connection);

              $count = "SELECT COUNT(*) FROM americano_tbl";
              $countquery = mysql_query($count, $connection);

              $average = "SELECT AVG(rating) FROM americano_tbl";
              $averagequery = mysql_query($average, $connection);

              $count1 = "SELECT COUNT(*) FROM americano_tbl WHERE rating=1";
              $count1query = mysql_query($count1, $connection);
              $row1 = mysql_fetch_array($count1query);
              $count2 = "SELECT COUNT(*) FROM americano_tbl WHERE rating=2";
              $count2query = mysql_query($count2, $connection);
              $row2 = mysql_fetch_array($count2query);
              $count3 = "SELECT COUNT(*) FROM americano_tbl WHERE rating=3";
              $count3query = mysql_query($count3, $connection);
              $row3 = mysql_fetch_array($count3query);
              $count4 = "SELECT COUNT(*) FROM americano_tbl WHERE rating=4";
              $count4query = mysql_query($count4, $connection);
              $row4 = mysql_fetch_array($count4query);
              $count5 = "SELECT COUNT(*) FROM americano_tbl WHERE rating=5";
              $count5query = mysql_query($count5, $connection);
              $row5 = mysql_fetch_array($count5query);

              $average1 = $row1[0] / $countquery * 100;
              $average2 = $row2[0] / $countquery * 100;
              $average3 = $row3[0] / $countquery * 100;
              $average4 = $row4[0] / $countquery * 100;
              $average5 = $row5[0] / $countquery * 100;

              echo "
              <div class='w3-panel'>
                  <div class='w3-quarter'>
                      <h1>" . mysql_result($averagequery, 0) . "</h1><h5>out of " . mysql_result($countquery, 0) . "</h5>
                  </div>
                  <div class='w3-quarter'>
                      <br>
                      5 Stars
                      <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                          <div class='w3-progressbar w3-yellow' style='width:" . $average5 . "%'></div>
                      </div>" . $row5[0] .
                      "<br>
                      4 Stars
                      <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                          <div class='w3-progressbar w3-yellow' style='width:" . $average4 . "%'></div>
                      </div>" . $row4[0] .
                      "<br>
                      3 Stars
                      <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                          <div class='w3-progressbar w3-yellow' style='width:" . $average3 . "%'></div>
                      </div>" . $row3[0] .
                      "<br>
                      2 Stars
                      <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                          <div class='w3-progressbar w3-yellow' style='width:" . $average2 . "%'></div>
                      </div>" . $row2[0] .
                      "<br>
                      1 Stars
                      <div class='w3-progress-container' style='display:inline-block; width:250px;'>
                          <div class='w3-progressbar w3-yellow' style='width:" . $average1 . "%'></div>
                      </div>" . $row1[0] .
                  "</div>
                  <div class='w3-quarter'>
                  </div>
                  <div class='w3-quarter'>
                  </div>
              </div>";

              while($row1 = mysql_fetch_assoc($query, MYSQL_ASSOC)) {
                  echo "
                      <div class='w3-panel'>
                          <div class='w3-right'>" . $row1['entered'] . "</div>";
                          if($row1['rating'] == 1) {
                              echo '<div class="rating1">
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                          } else if($row1['rating'] == 2) {
                              echo ' <div class="rating1">
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                          } else if($row1['rating'] == 3) {
                              echo '<div class="rating1">
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                          } else if($row1['rating'] == 4) {
                              echo '<div class="rating1">
                                  <span><i class="fa fa-star-o"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                          } else if($row1['rating'] == 5) {
                              echo '<div class="rating1">
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                                  <span><i class="fa fa-star" style="color:#ff9900"></i></span>
                              </div>';
                          }
                      echo "by " . $row1['name'] . "</div>
                      <div class='w3-panel'>
                          <p>" . $row1['comment'] . "</p>
                      </div>";
              }

              mysql_close($connection);
          ?>
        </div>

        <div class="w3-panel">
            <h1 style="font-size:25px;"><b>Write a Review!</b></h1>

            <form action="americanoreview.php" method="GET">
                Name<br>
                <input type="text" name="name" id="name"><br><br>
                Rating<br>
                <div class="rating">
                    <span><input type="radio" name="rating" id="str5" value="5"><label for="str5"></label></span>
                    <span><input type="radio" name="rating" id="str4" value="4"><label for="str4"></label></span>
                    <span><input type="radio" name="rating" id="str3" value="3"><label for="str3"></label></span>
                    <span><input type="radio" name="rating" id="str2" value="2"><label for="str2"></label></span>
                    <span><input type="radio" name="rating" id="str1" value="1"><label for="str1"></label></span>
                </div><br><br>
                Comment<br>
                <textarea rows="5" cols="50" name="comment" id="comment"></textarea><br><br>
                <input type="submit" name="submit" value="Submit">
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
