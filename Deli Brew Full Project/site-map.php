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
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <!-- Content -->
    <div class="row">
      <div class="w3-panel top-margin-content">
        <div class="w3-panel">
          <div class="w3-center">
            <h1>Site Directory</h1>
            <p>Have trouble finding your way around the site? Here are the full directory for you to go through the site and help you look around.</p>
          </div>
        </div>

        <!-- The Main Home directory -->
        <div class="col-xs-12">
          <div class="w3-panel bottomline">
            <h4>Home</h4>
          </div>
          <ul>
            <li><a href="home.php">Home</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Site Directories in Alphabetical Order A-Z  -->
    <div class="row">
      <div class="w3-panel top-margin-content">
        <div class="col-xs-12">
          <h3>Site Map</h3>
        </div>
        <div class="col-xs-4">
          <div class="w3-panel bottomline">
            <h4>A</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>B</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>C</h4>
          </div>
          <ul>
            <li><a href="cafe-location.php">Cafe Location</a></li>
            <li><a href="career-centre.php">Career Centre</a></li>
            <li><a href="career-perks.php">Career Perks</a></li>
            <li><a href="career-purpose.php">Career Purpose</a></li>
            <li><a href="coffee.php">Coffee</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>D</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>E</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>F</h4>
          </div>
          <ul>
            <li><a href="faq.php">Frequently Asked Questions (FAQ)</a></li>
            <li><a href="franchising.php">Franchising</a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>G</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>H</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>I</h4>
          </div>
          <ul>
            <li><a href="investor.php">Investor</a></li>
            <li><a href=""></a></li>
          </ul>
        </div>
        <div class="col-xs-4">
          <div class="w3-panel bottomline">
            <h4>J</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>K</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>L</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>M</h4>
          </div>
          <ul>
            <li><a href="media.php">Media</a></li>
            <li><a href="multimedia.php">Multimedia</a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>N</h4>
          </div>
          <ul>
            <li><a href="newsroom.php">News</a></li>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>O</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>P</h4>
          </div>
          <ul>
            <li><a href="pastry.php">Pastries</a></li>
            <li><a href="privacy-terms-conditions.php">Privacy + Terms and Conditions</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>Q</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>R</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
        </div>
        <div class="col-xs-4">
          <div class="w3-panel bottomline">
            <h4>S</h4>
          </div>
          <ul>
            <li><a href="snacks.php">Snacks</a></li>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>T</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>U</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>V</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>W</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>X</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>Y</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>Z</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
          <div class="w3-panel bottomline">
            <h4>Others</h4>
          </div>
          <ul>
            <li><a href=""></a></li>
          </ul>
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
            <a href="#" id="site-map" name="site-map">Site Map</a>
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
