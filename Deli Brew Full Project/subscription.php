<?php
  error_reporting(E_ALL ^ E_DEPRECATED);

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

  /* Select the database */
  $database_select = mysql_select_db("delibrew_db");

  $email = $_POST['newsletter'];

  $sqlemailselection = "SELECT * FROM subscriber_tbl WHERE email='$email'";
  $sqlemailselectionquery = mysql_query($sqlemailselection, $connection);

  $num_rows = mysql_num_rows($sqlemailselectionquery);

  if($num_rows == 0) {
    $sqlinsertemail = "INSERT INTO subscriber_tbl(email) VALUES ('$email')";
    $sqlinsertemailquery = mysql_query($sqlinsertemail, $connection);
  }

  mysql_close($connection);
  header("Location:" . $_SERVER['HTTP_REFERER']);
?>
