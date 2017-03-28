<?php
  error_reporting(0);

  /* Database Server info and details */
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

  /* Attempt to select the database */
  $database_select = mysql_select_db("delibrew_db");

  /* Check if the database selected exist, if not - Create one */
  if(!$database_select) {
    $sqldatabase = "CREATE DATABASE delibrew_db";
    mysql_query($sqldatabase, $connection);
  }

  /* Select the database */
  mysql_select_db("delibrew_db");

  /* Check if the newsletter subscription table exists, if not - create it */
  $sqlsubscriber = "SELECT * FROM subscriber_tbl";
  $subscriberquery = mysql_query($sqlsubscriber, $connection);

  if(empty($subscriberquery)) {
    $subscribertable = "CREATE TABLE subscriber_tbl(
      subscription_id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      email varchar(32) NULL
    )";
    $subscribertablequery = mysql_query($subscribertable, $connection);
  }

  /* Check if the products table exists, if not - create it */
  $sqlproducts = "SELECT * FROM products_tbl";
  $productsquery = mysql_query($sqlproducts, $connection);

  if(empty($productsquery)) {
    $producttable = "CREATE TABLE products_tbl (
      product_id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      product_image varchar(10000) NULL,
      product_type varchar(36) NULL,
      product_name varchar(1000) NULL,
      product_price varchar(30) NULL,
      product_quantity int(6) NULL
    )";
    $producttablequery = mysql_query($producttable, $connection);
  }

  /* Product Insert */
  /* Item: Original Blend */
  $productsitem1 = "SELECT * FROM products_tbl WHERE product_name='Original Blend'";
  $item1query = mysql_query($productsitem1, $connection);

  $num_rows1 = mysql_num_rows($item1query);

  $file1r = fopen("data/item1.txt", "r");
  $products1 = fgets($file1r);
  fclose($file1r);

  $src1 = 'https://gj-aus-prod.s3.amazonaws.com/production/spark/product_pictures/10/large/Coffee_-_Blends_-_Special_Espresso.jpg?1357747274';

  if($num_rows1 == 0) {
      $item1insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src1', 'coffee', 'Original Blend', '1.99', '$products1')";
      $item1insertquery = mysql_query($item1insert, $connection);
  }

  /* Item: Americano */
  $productsitem2 = "SELECT * FROM products_tbl WHERE product_name='Americano'";
  $item2query = mysql_query($productsitem2, $connection);

  $num_rows2 = mysql_num_rows($item2query);

  $file2r = fopen("data/item2.txt", "r");
  $products2 = fgets($file2r);
  fclose($file2r);

  $src2 = 'http://stirrific.com/wp-content/uploads/2014/10/cafe-americano-fresh-roasted-beans.jpg';

  if($num_rows2 == 0) {
      $item2insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src2', 'coffee', 'Americano', '2.99', '$products2')";
      $item2insertquery = mysql_query($item2insert, $connection);
  }

  /* Item: Latte */
  $productsitem3 = "SELECT * FROM products_tbl WHERE product_name='Latte'";
  $item3query = mysql_query($productsitem3, $connection);

  $num_rows3 = mysql_num_rows($item3query);

  $file3r = fopen("data/item3.txt", "r");
  $products3 = fgets($file3r);
  fclose($file3r);

  $src3 = 'https://image.shutterstock.com/z/stock-photo-coffee-beans-and-a-cup-of-coffee-with-beautiful-latte-art-260919488.jpg';

  if($num_rows3 == 0) {
      $item3insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src3', 'coffee', 'Latte', '1.79', '$products3')";
      $item3insertquery = mysql_query($item3insert, $connection);
  }

  /* Item: Cappuccino */
  $productsitem4 = "SELECT * FROM products_tbl WHERE product_name='Cappuccino'";
  $item4query = mysql_query($productsitem4, $connection);

  $num_rows4 = mysql_num_rows($item4query);

  $file4r = fopen("data/item4.txt", "r");
  $products4 = fgets($file4r);
  fclose($file4r);

  $src4 = 'http://beanboyscoffee.com/coffeeBean300.png';

  if($num_rows4 == 0) {
      $item4insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src4', 'coffee', 'Cappuccino', '1.45', '$products4')";
      $item4insertquery = mysql_query($item4insert, $connection);
  }

  /* Item: Espresso*/
  $productsitem5 = "SELECT * FROM products_tbl WHERE product_name='Espresso'";
  $item5query = mysql_query($productsitem5, $connection);

  $num_rows5 = mysql_num_rows($item5query);

  $file5r = fopen("data/item5.txt", "r");
  $products5 = fgets($file5r);
  fclose($file5r);

  $src5 = 'http://thesmickle.com/wp-content/uploads/2011/12/espresso-beans.jpg';

  if($num_rows5 == 0) {
      $item5insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src5', 'coffee', 'Espresso', '4.45', '$products5')";
      $item5insertquery = mysql_query($item5insert, $connection);
  }

  /* Item: Caffe Mocha */
  $productsitem6 = "SELECT * FROM products_tbl WHERE product_name='Caffe Mocha'";
  $item6query = mysql_query($productsitem6, $connection);

  $num_rows6 = mysql_num_rows($item6query);

  $file6r = fopen("data/item6.txt", "r");
  $products6 = fgets($file6r);
  fclose($file6r);

  $src6 = 'https://globalassets.starbucks.com/assets/7e2d6987b7404f13ab8eae0b2712dde9.jpg';

  if($num_rows6 == 0) {
      $item6insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src6', 'coffee', 'Caffe Mocha', '1.79', '$products6')";
      $item6insertquery = mysql_query($item6insert, $connection);
  }

  /* Item: Muffin */
  $productsitem7 = "SELECT * FROM products_tbl WHERE product_name='Muffin'";
  $item7query = mysql_query($productsitem7, $connection);

  $num_rows7 = mysql_num_rows($item7query);

  $file7r = fopen("data/item7.txt", "r");
  $products7 = fgets($file7r);
  fclose($file7r);

  $src7 = 'http://newyork.seriouseats.com/20110203TedandHoneymuffins/Muffinzz%20Serious%20Eats.jpg';

  if($num_rows7 == 0) {
      $item7insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src7', 'snack', 'Muffin', '3.99', '$products7')";
      $item7insertquery = mysql_query($item7insert, $connection);
  }

  /* Item: Cookie */
  $productsitem8 = "SELECT * FROM products_tbl WHERE product_name='Cookie'";
  $item8query = mysql_query($productsitem8, $connection);

  $num_rows8 = mysql_num_rows($item8query);

  $file8r = fopen("data/item8.txt", "r");
  $products8 = fgets($file8r);
  fclose($file8r);

  $src8 = 'http://vignette1.wikia.nocookie.net/cookieclicker/images/b/b9/Chocolate_Chip_Cookies_-_kimberlykv.jpg/revision/latest/scale-to-width-down/258?cb=2013092521325';

  if($num_rows8 == 0) {
      $item8insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src8', 'snack', 'Cookie', '1.99', '$products8')";
      $item8insertquery = mysql_query($item8insert, $connection);
  }

  /* Item: Donut */
  $productsitem9 = "SELECT * FROM products_tbl WHERE product_name='Donut'";
  $item9query = mysql_query($productsitem9, $connection);

  $num_rows9 = mysql_num_rows($item9query);

  $file9r = fopen("data/item9.txt", "r");
  $products9 = fgets($file9r);
  fclose($file9r);

  $src9 = 'http://www.mapledonuts.com/uploads/donut%20platter.jpg';

  if($num_rows9 == 0) {
      $item9insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src9', 'snack', 'Donut', '2.99', '$products9')";
      $item9insertquery = mysql_query($item9insert, $connection);
  }

  /* Item: Croissant */
  $productsmooncake0 = "SELECT * FROM products_tbl WHERE product_name='Croissant'";
  $item10query = mysql_query($productsmooncake0, $connection);

  $num_rows10 = mysql_num_rows($item10query);

  $file10r = fopen("data/item10.txt", "r");
  $products10 = fgets($file10r);
  fclose($file10r);

  $src10 = 'http://divascancook.com/wp-content/uploads/2015/12/homemade-cinnamon-rolls-recipe.jpg';

  if($num_rows10 == 0) {
      $item10insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src10', 'snack', 'Croissant', '5.97', '$products10')";
      $item10insertquery = mysql_query($item10insert, $connection);
  }

  /* Item: Donut Bite */
  $productsmooncake1 = "SELECT * FROM products_tbl WHERE product_name='Donut Bites'";
  $item11query = mysql_query($productsmooncake1, $connection);

  $num_rows11 = mysql_num_rows($item11query);

  $file11r = fopen("data/item11.txt", "r");
  $products11 = fgets($file11r);
  fclose($file11r);

  $src11 = 'http://2.bp.blogspot.com/-z0qDwGGxAdQ/UYs3QKHCWiI/AAAAAAAAev4/4WMnlJjzY5A/s1600/photo+5.JPG';

  if($num_rows11 == 0) {
      $item11insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src11', 'snack', 'Donut Bites', '2.99', '$products11')";
      $item11insertquery = mysql_query($item11insert, $connection);
  }

  /* Item: Apple Strudel */
  $productsmooncake2 = "SELECT * FROM products_tbl WHERE product_name='Apple Strudel'";
  $item12query = mysql_query($productsmooncake2, $connection);

  $num_rows12 = mysql_num_rows($item12query);

  $file12r = fopen("data/item12.txt", "r");
  $products12 = fgets($file12r);
  fclose($file12r);

  $src12 = 'http://cookdiary.net/wp-content/uploads/images/Apple-Strudel.jpg';

  if($num_rows12 == 0) {
      $item12insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src12', 'pastry', 'Apple Strudel', '5.97', '$products12')";
      $item12insertquery = mysql_query($item12insert, $connection);
  }

  /* Item: Cinnamon Roll */
  $productsmooncake3 = "SELECT * FROM products_tbl WHERE product_name='Cinnamon Roll'";
  $item13query = mysql_query($productsmooncake3, $connection);

  $num_rows13 = mysql_num_rows($item13query);

  $file13r = fopen("data/item13.txt", "r");
  $products13 = fgets($file13r);
  fclose($file13r);

  $src13 = 'http://divascancook.com/wp-content/uploads/2015/12/homemade-cinnamon-rolls-recipe.jpg';

  if($num_rows13 == 0) {
      $item13insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src13', 'pastry', 'Cinnamon Roll', '5.97', '$products13')";
      $item13insertquery = mysql_query($item13insert, $connection);
  }

  /* Item: Eclair */
  $productsmooncake4 = "SELECT * FROM products_tbl WHERE product_name='Eclair'";
  $item14query = mysql_query($productsmooncake4, $connection);

  $num_rows14 = mysql_num_rows($item14query);

  $file14r = fopen("data/item14.txt", "r");
  $products14 = fgets($file14r);
  fclose($file14r);

  $src14 = 'http://www.bakepedia.com/wp-content/uploads/2013/08/eclair-inside-of-eclair.jpg';

  if($num_rows14 == 0) {
      $item14insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src14', 'pastry', 'Eclair', '5.49', '$products14')";
      $item14insertquery = mysql_query($item14insert, $connection);
  }

  /* Item: Macaron */
  $productsmooncake5 = "SELECT * FROM products_tbl WHERE product_name='Macaron'";
  $item15query = mysql_query($productsmooncake5, $connection);

  $num_rows15 = mysql_num_rows($item15query);

  $file15r = fopen("data/item15.txt", "r");
  $products15 = fgets($file15r);
  fclose($file15r);

  $src15 = 'http://comendocomosolhos.com/wp-content/uploads/2015/04/macaron.jpg';

  if($num_rows15 == 0) {
      $item15insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src15', 'pastry', 'Macaron', '4.89', '$products15')";
      $item15insertquery = mysql_query($item15insert, $connection);
  }

  /* Item: Mooncake */
  $productsmooncake6 = "SELECT * FROM products_tbl WHERE product_name='Mooncake'";
  $item16query = mysql_query($productsmooncake6, $connection);

  $num_rows16 = mysql_num_rows($item16query);

  $file16r = fopen("data/item16.txt", "r");
  $products16 = fgets($file16r);
  fclose($file16r);

  $src16 = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Mooncake.jpg/250px-Mooncake.jpg';

  if($num_rows16 == 0) {
      $item16insert = "INSERT INTO products_tbl (product_image, product_type, product_name, product_price, product_quantity)
      VALUES ('$src16', 'pastry', 'Mooncake', '2.78', '$products16')";
      $item16insertquery = mysql_query($item16insert, $connection);
  }

  /* Check if the accounts table exists, if not - create it */
  $sqlaccounts = "SELECT * FROM accounts_tbl";
  $accountsquery = mysql_query($sqlaccounts, $connection);

  if(empty($accountsquery)) {
    $accounttable = "CREATE TABLE accounts_tbl(
      account_id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username varchar(50) NULL,
      password varchar(32) NULL
    )";
    $accounttablequery = mysql_query($accounttable, $connection);
  }

  /* Check if the sales table exists, if not - create it */
  $sqlsales = "SELECT * FROM sales_tbl";
  $salesquery = mysql_query($sqlsales, $connection);

  if(empty($salesquery)) {
    $salestable = "CREATE TABLE sales_tbl(
      customer_num int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      total_items varchar(30) NULL,
      total_price varchar(30) NULL,
      total_tax varchar(30) NULL,
      date_purchase varchar(30) NULL
    )";
    $salestablequery = mysql_query($salestable, $connection);
  }

  /* Check if each ratings table exists, if not - create it */
  /* Original Blend Ratings */
  $sqloriginal = "SELECT * FROM original_tbl";
  $originalquery = mysql_query($sqloriginal, $connection);

  if(empty($originalquery)) {
    $originaltable = "CREATE TABLE original_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $originaltablequery = mysql_query($originaltable, $connection);
  }

  /* Americano Ratings */
  $sqlamericano = "SELECT * FROM americano_tbl";
  $americanoquery = mysql_query($sqlamericano, $connection);

  if(empty($americanoquery)) {
    $americanotable = "CREATE TABLE americano_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $americanotablequery = mysql_query($americanotable, $connection);
  }

  /* Latte Ratings */
  $sqllatte = "SELECT * FROM latte_tbl";
  $lattequery = mysql_query($sqllatte, $connection);

  if(empty($lattequery)) {
    $lattetable = "CREATE TABLE latte_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $lattetablequery = mysql_query($lattetable, $connection);
  }

  /* Cappuccino Ratings */
  $sqlcappuccino = "SELECT * FROM cappuccino_tbl";
  $cappuccinoquery = mysql_query($sqlcappuccino, $connection);

  if(empty($cappuccinoquery)) {
    $cappuccinotable = "CREATE TABLE cappuccino_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $cappuccinotablequery = mysql_query($cappuccinotable, $connection);
  }

  /* Espresso Ratings */
  $sqlespresso = "SELECT * FROM espresso_tbl";
  $espressoquery = mysql_query($sqlespresso, $connection);

  if(empty($espressoquery)) {
    $espressotable = "CREATE TABLE espresso_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $espressotablequery = mysql_query($espressotable, $connection);
  }

  /* Caffe Mocha Ratings */
  $sqlcaffemocha = "SELECT * FROM caffemocha_tbl";
  $caffemochaquery = mysql_query($sqlcaffemocha, $connection);

  if(empty($caffemochaquery)) {
    $caffemochatable = "CREATE TABLE caffemocha_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $caffemochatablequery = mysql_query($caffemochatable, $connection);
  }

  /* Muffin Ratings */
  $sqlmuffin = "SELECT * FROM muffin_tbl";
  $muffinquery = mysql_query($sqlmuffin, $connection);

  if(empty($muffinquery)) {
    $muffintable = "CREATE TABLE muffin_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $muffintablequery = mysql_query($muffintable, $connection);
  }

  /* Cookie Ratings */
  $sqlcookie = "SELECT * FROM cookie_tbl";
  $cookiequery = mysql_query($sqlcookie, $connection);

  if(empty($cookiequery)) {
    $cookietable = "CREATE TABLE cookie_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $cookietablequery = mysql_query($cookietable, $connection);
  }

  /* Donut Ratings */
  $sqldonut = "SELECT * FROM donut_tbl";
  $donutquery = mysql_query($sqldonut, $connection);

  if(empty($donutquery)) {
    $donuttable = "CREATE TABLE donut_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $donuttablequery = mysql_query($donuttable, $connection);
  }

  /* Croisssant Ratings */
  $sqlcroissant = "SELECT * FROM croissant_tbl";
  $croissantquery = mysql_query($sqlcroissant, $connection);

  if(empty($croissantquery)) {
    $croissanttable = "CREATE TABLE croissant_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $croissanttablequery = mysql_query($croissanttable, $connection);
  }

  /* Donut Bite Ratings */
  $sqldonutbite = "SELECT * FROM donutbite_tbl";
  $donutbitequery = mysql_query($sqldonutbite, $connection);

  if(empty($donutbitequery)) {
    $donutbitetable = "CREATE TABLE donutbite_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $donutbitetablequery = mysql_query($donutbitetable, $connection);
  }

  /* Apple Strudel Ratings */
  $sqlapplestrudel = "SELECT * FROM applestrudel_tbl";
  $applestrudelquery = mysql_query($sqlapplestrudel, $connection);

  if(empty($applestrudelquery)) {
    $applestrudeltable = "CREATE TABLE applestrudel_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $applestrudeltablequery = mysql_query($applestrudeltable, $connection);
  }

  /* Cinnamon Roll Ratings */
  $sqlcinnamonroll = "SELECT * FROM cinnamonroll_tbl";
  $cinnamonrollquery = mysql_query($sqlcinnamonroll, $connection);

  if(empty($cinnamonrollquery)) {
    $cinnamonrolltable = "CREATE TABLE cinnamonroll_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $cinnamonrolltablequery = mysql_query($cinnamonrolltable, $connection);
  }

  /* Eclair Ratings */
  $sqleclair = "SELECT * FROM eclair_tbl";
  $eclairquery = mysql_query($sqleclair, $connection);

  if(empty($eclairquery)) {
    $eclairtable = "CREATE TABLE eclair_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $eclairtablequery = mysql_query($eclairtable, $connection);
  }

  /* Macaron Ratings */
  $sqlmacaron = "SELECT * FROM macaron_tbl";
  $macaronquery = mysql_query($sqlmacaron, $connection);

  if(empty($macaronquery)) {
    $macarontable = "CREATE TABLE macaron_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $macarontablequery = mysql_query($macarontable, $connection);
  }

  /* Mooncake Ratings */
  $sqlmooncake = "SELECT * FROM mooncake_tbl";
  $item1query = mysql_query($sqlmooncake, $connection);

  if(empty($item1query)) {
    $mooncaketable = "CREATE TABLE mooncake_tbl(
      id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(25) NULL,
      rating int(6) NULL,
      comment longtext NULL,
      entered varchar(12)
    )";
    $mooncaketablequery = mysql_query($mooncaketable, $connection);
  }

  mysql_close($connection);
?>
