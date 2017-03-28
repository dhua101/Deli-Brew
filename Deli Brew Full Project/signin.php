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

  $username = $_GET['username'];
  $password = $_GET['password'];

  $sqlsignin = "SELECT * FROM account_tbl WHERE username='$username' AND password='$password'";
  $sqlquery = mysql_query($sqlsignin, $connection);

  if(mysql_fetch_array($sqlquery) !== false) {
      $filew = fopen("data/account.txt", "w");
      fwrite($filew, $username);
      fclose($filew);
      header("Location: members.php");
  } else {
      header("Location: accountretry.php");
  }

  mysql_close($connection);
?>
