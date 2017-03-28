<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    unlink('data/cart.txt');
    unlink('data/purchase.txt');
    unlink('data/money.txt');
    unlink('data/emails.txt');
    unlink('data/things.txt');

    unlink("data/item1_backup.txt");
    unlink("data/item2_backup.txt");
    unlink("data/item3_backup.txt");
    unlink("data/item4_backup.txt");
    unlink("data/item5_backup.txt");
    unlink("data/item6_backup.txt");
    unlink("data/item7_backup.txt");
    unlink("data/item8_backup.txt");
    unlink("data/item9_backup.txt");
    unlink("data/item10_backup.txt");
    unlink("data/item11_backup.txt");
    unlink("data/item12_backup.txt");
    unlink("data/item13_backup.txt");
    unlink("data/item14_backup.txt");
    unlink("data/item15_backup.txt");
    unlink("data/item16_backup.txt");

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

    $sqldropping1 = "DROP TABLE products_backup_tbl";
    $sqldroptable1 = mysql_query($sqldropping1, $connection);

    mysql_close($connection);

    header('Location: home.php');
?>
