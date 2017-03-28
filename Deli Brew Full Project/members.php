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
          <nav class="navbar navbar-default w3-theme-l2 navbar-fixed-top">
            <div class="container-fluid">
              <div class="nav-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Deli Brew</a>
              </div>
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                  <li class="active w3-white"><a href="#">Home</a></li>
                  <li class="w3-hover-white"><a href="products.php">Products</a></li>
                  <li class="w3-hover-white"><a href="contact.php">Contact Us</a></li>
                  <li class="w3-hover-white"><a href="cafe-location.php">Find the Cafe</a></li>
                  <li class="w3-hover-white"><a href="franchising.php">Franchising</a></li>
                  <li class="w3-hover-white"><span onclick="openNav()">Side Navigation</span></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <form method="post">
                      <input class="searching-margin" type="text" id="search" name="search" placeholder="Search Item">
                    </form>
                  </li>
                  <li><a href="shoppingcart.php" class="w3-hover-yellow" title="Shopping Cart"><i class="fa fa-shopping-cart"></i></a></li>
                  <li class="w3-hide-small w3-right"><form action="exit.php"><input type="submit" id="exit" name="exit" value="x"></form></li>
                  <li>Welcome
                    <?php
                      $filer = fopen("data/account.txt", "r");
                      $username = fgets($filer);
                      echo "$username";
                      fclose($filer);
                    ?></li>
                  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Sign Out</a></li>
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
          <!-- Indication of Sales and Menu Slider -->
          <div id="menu-sales" class="carousel slide" data-ride="carousel" data-interval="5000">
            <ol class="carousel-indicators">
              <li onclick="$('#imageDisplay1').attr('src','http://localhost/Deli%20Brew/menu1.gif' + '?' + new Date().getTime())" data-target="#menu-sales" data-slide-to="0" class="active"></li>
              <li onclick="$('#imageDisplay2').attr('src','http://localhost/Deli%20Brew/menu2.gif' + '?' + new Date().getTime())" data-target="#menu-sales" data-slide-to="1"></li>
              <li onclick="$('#imageDisplay3').attr('src','http://localhost/Deli%20Brew/menu3.gif' + '?' + new Date().getTime())" data-target="#menu-sales" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for the Slider -->
            <div class="carousel-inner content-margin" role="listbox">
              <div class="item active">
                <img id="imageDisplay1" src="http://localhost/Deli%20Brew/menu1.gif" onload="setTimeout('document.getElementById(\'imageDisplay1\').src=\'http://localhost/Deli%20Brew/menu1.gif?\'+new Date().getMilliseconds()',6000)">
              </div>
              <div class="item">
                <img id="imageDisplay2" src="http://localhost/Deli%20Brew/menu2.gif" onload="setTimeout('document.getElementById(\'imageDisplay2\').src=\'http://localhost/Deli%20Brew/menu2.gif?\'+new Date().getMilliseconds()',6000)">
              </div>
              <div class="item">
                <img id="imageDisplay3" src="http://localhost/Deli%20Brew/menu3.gif" onload="setTimeout('document.getElementById(\'imageDisplay3\').src=\'http://localhost/Deli%20Brew/menu3.gif?\'+new Date().getMilliseconds()',6000)">
              </div>
            </div>

            <!-- Left and Right controls -->
            <a class="left carousel-control" href="#menu-sales" role="button" data-slide="prev">
              <span class="glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#menu-sales" role="button" data-slide="next">
              <span class="glyphicon gllyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="w3-panel">
            <div class="w3-center">
              <video width="250" controls>
                <source src="http://localhost/Deli%20Brew/French%20Press%20Coffee%20-%20How%20to%20Brew.mp4" type="video/mp4">
                Video not available at the moment.
              </video>
            </div>
          </div>

          <div class="w3-panel">
            <div class="content-border content-padding">
              <h5 class="content-boldness">Popular Cafe Menu</h5>
            </div>

            <div class="container">
              <div class="grid">
                <div class="cell">
                  <a href="coffee.php">
                    <img src="http://atlantablackstar.com/wp-content/uploads/2012/07/Coffee-Cup-from-printshop_opt-300x250.jpg?w=240" class="responsive-image" alt="black-coffee" style="width:100%">
                    <div class="caption">
                      <div class="w3-center">
                        <p>Coffee</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="cell">
                  <a href="coffee.php">
                    <img src="http://www.medicallyyourssedona.com/wp-content/uploads/2015/02/Latte.jpg" class="responsive-image" alt="latte" style="width:100%">
                    <div class="caption">
                      <div class="w3-center">
                        <p>Latte</p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="cell">
                  <a href="coffee.php">
                    <img src="https://www.coffee.net/media/wysiwyg/espresso.jpg" class="responsive-image" alt="espresso" style="width:100%">
                    <div class="caption">
                      <div class="w3-center">
                        <p>Espresso</p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w3-panel">
          <div class="content-border content-padding">
            <h5 class="content-boldness">Baked Goods for your Satisfaction</h5>
          </div>

          <div class="container">
            <div class="grid">
              <div class="cell">
                <a href="snacks.php">
                  <img src="http://newyork.seriouseats.com/20110203TedandHoneymuffins/Muffinzz%20Serious%20Eats.jpg" class="responsive-image" alt="muffin" style="width:100">
                  <div class="caption">
                    <div class="w3-center">
                      <p>Muffin</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="cell">
                <a href="snacks.php">
                  <img src="http://vignette1.wikia.nocookie.net/cookieclicker/images/b/b9/Chocolate_Chip_Cookies_-_kimberlykv.jpg/revision/latest/scale-to-width-down/258?cb=20130925213259" class="responsive-image" alt="cookie" style="width:100%">
                  <div class="caption">
                    <div class="w3-center">
                      <p>Cookie</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="cell">
                <a href="pastry.php">
                  <img src="https://img.buzzfeed.com/buzzfeed-static/static/2016-05/31/15/asset/buzzfeed-prod-fastlane03/sub-buzz-11616-1464724089-2.jpg?resize=625:781" class="responsive-image" alt="pastry" style="width:100%">
                  <div class="caption">
                    <div class="w3-center">
                      <p>Pastry</p>
                    </div>
                  </div>
                </a>
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
