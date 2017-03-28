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

  $countuser = count($_GET['username']);
  $countpass = count($_GET['password']);

  $username = $_GET['username'];
  $password = $_GET['password'];

  if($_GET['password'] == $_GET['confirmation']) {
      $sqlsignup = "INSERT INTO account_tbl (username, password) VALUES ('$username', '$password')";
      $sqlquery = mysql_query($sqlsignup, $connection);
      $filew = fopen("data/account.txt", "w");
      fwrite($filew, $username);
      fclose($filew);
      header("Location: members.php");
  } else if($countuser > 12) {
      header("Location: accountuser.php");
  } else if($countpassword > 18) {
      header("Location: accountpass.php");
  } else if($_GET['password'] != $_GET['confirmation']) {
      header("Location: accountmatch.php");
  }

  mysql_close($connection);
?>
