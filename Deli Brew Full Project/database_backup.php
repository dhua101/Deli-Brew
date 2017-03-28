<?php
  error_reporting(E_ALL ^ E_DEPRECATED);

  copy("data/item1.txt", "data/item1_backup.txt");
  copy("data/item2.txt", "data/item2_backup.txt");
  copy("data/item3.txt", "data/item3_backup.txt");
  copy("data/item4.txt", "data/item4_backup.txt");
  copy("data/item5.txt", "data/item5_backup.txt");
  copy("data/item6.txt", "data/item6_backup.txt");
  copy("data/item7.txt", "data/item7_backup.txt");
  copy("data/item8.txt", "data/item8_backup.txt");
  copy("data/item9.txt", "data/item9_backup.txt");
  copy("data/item10.txt", "data/item10_backup.txt");
  copy("data/item11.txt", "data/item11_backup.txt");
  copy("data/item12.txt", "data/item12_backup.txt");
  copy("data/item13.txt", "data/item13_backup.txt");
  copy("data/item14.txt", "data/item14_backup.txt");
  copy("data/item15.txt", "data/item15_backup.txt");
  copy("data/item16.txt", "data/item16_backup.txt");

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
  mysql_select_db("delibrew_db");

  /* Make a backup for databases just in case if anyone cancels the order */
  $sqlrename1 = "CREATE TABLE products_backup_tbl LIKE products_tbl";
  $sqlnewname1 = mysql_query($sqlrename1, $connection);

  $sqlnewdata1 = "INSERT INTO products_backup_tbl SELECT * FROM products_tbl";
  $sqlinsert1 = mysql_query($sqlnewdata1, $connection);

  mysql_close($connection);
?>
