<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);

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

    $name = $_GET['name'];
    $rating = $_GET['rating'];
    $comment = $_GET['comment'];
    $entered = date("M d, Y");

    $sql = "INSERT INTO muffin_tbl(name, rating, comment, entered) VALUES('$name', '$rating', '$comment', '$entered')";
    mysql_query($sql, $connection);

    header("Location: muffin.php");

    mysql_close($connection);
?>
