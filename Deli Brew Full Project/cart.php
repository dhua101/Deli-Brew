<?php
    session_start();
    error_reporting(E_ALL ^ E_DEPRECATED);
    $quantity = '';
    $file = fopen('data/cart.txt', 'a');
    $purchase = fopen('data/purchase.txt', 'a');
    $stuff = fopen("data/things.txt", "a");
    $stock = '';

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
    echo "Connection Successful<br>";

    mysql_select_db("delibrew_db");

    if(isset($_GET['quantity1'])) {
        $quantity = $_GET['quantity1'];
        $image = 'https://gj-aus-prod.s3.amazonaws.com/production/spark/product_pictures/10/large/Coffee_-_Blends_-_Special_Espresso.jpg?1357747274';
        $name = 'Original Blend';
        $price = 1.99 * $quantity;

        $file1r = fopen("data/item1.txt", "r");
        $stock = fgets($file1r);
        $stock -= $quantity;
        $_SESSION['stock1'] = $stock;
        fclose($file1r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='1'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='1'";
        mysql_query($sqlupdate, $connection);

        $file1w = fopen("data/item1.txt", "w");
        fwrite($file1w, $stock);
        fclose($file1w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity2'])) {
        $quantity = $_GET['quantity2'];
        $image = 'http://stirrific.com/wp-content/uploads/2014/10/cafe-americano-fresh-roasted-beans.jpg';
        $name = 'Americano';
        $price = 2.99 * $quantity;

        $file2r = fopen("data/item2.txt", "r");
        $stock = fgets($file2r);
        $stock -= $quantity;
        $_SESSION['stock2'] = $stock;
        fclose($file2r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='2'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='2'";
        mysql_query($sqlupdate, $connection);

        $file2w = fopen("data/item2.txt", "w");
        fwrite($file2w, $stock);
        fclose($file2w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity3'])) {
        $quantity = $_GET['quantity3'];
        $image = 'https://image.shutterstock.com/z/stock-photo-coffee-beans-and-a-cup-of-coffee-with-beautiful-latte-art-260919488.jpg';
        $name = 'Latte';
        $price = 1.79 * $quantity;

        $file3r = fopen("data/item3.txt", "r");
        $stock = fgets($file3r);
        $stock -= $quantity;
        $_SESSION['stock3'] = $stock;
        fclose($file3r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='3'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='3'";
        mysql_query($sqlupdate, $connection);

        $file3w = fopen("data/item3.txt", "w");
        fwrite($file3w, $stock);
        fclose($file3w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity4'])) {
        $quantity = $_GET['quantity4'];
        $image = 'http://beanboyscoffee.com/coffeeBean300.png';
        $name = 'Cappuccino';
        $price = 1.45 * $quantity;

        $file4r = fopen("data/item4.txt", "r");
        $stock = fgets($file4r);
        $stock -= $quantity;
        $_SESSION['stock4'] = $stock;
        fclose($file4r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='4'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='4'";
        mysql_query($sqlupdate, $connection);

        $file4w = fopen("data/item4.txt", "w");
        fwrite($file4w, $stock);
        fclose($file4w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity5'])) {
        $quantity = $_GET['quantity5'];
        $image = 'http://thesmickle.com/wp-content/uploads/2011/12/espresso-beans.jpg';
        $name = 'Espresso';
        $price = 4.45 * $quantity;

        $file5r = fopen("data/item5.txt", "r");
        $stock = fgets($file5r);
        $stock -= $quantity;
        $_SESSION['stock5'] = $stock;
        fclose($file5r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='5'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='5'";
        mysql_query($sqlupdate, $connection);

        $file5w = fopen("data/item5.txt", "w");
        fwrite($file5w, $stock);
        fclose($file5w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity6'])) {
        $quantity = $_GET['quantity6'];
        $image = 'http://makegoodcoffee.com/coffee-talk/wp-content/uploads/2012/09/cafemocha.jpg';
        $name = 'Caffe Mocha';
        $price = 2.79 * $quantity;

        $file6r = fopen("data/item6.txt", "r");
        $stock = fgets($file6r);
        $stock -= $quantity;
        $_SESSION['stock6'] = $stock;
        fclose($file6r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='6'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='6'";
        mysql_query($sqlupdate, $connection);

        $file6w = fopen("data/item6.txt", "w");
        fwrite($file6w, $stock);
        fclose($file6w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity7'])) {
        $quantity = $_GET['quantity7'];
        $image = 'http://newyork.seriouseats.com/20110203TedandHoneymuffins/Muffinzz%20Serious%20Eats.jpg';
        $name = 'Muffin';
        $price = 3.99 * $quantity;

        $file7r = fopen("data/item7.txt", "r");
        $stock = fgets($file7r);
        $stock -= $quantity;
        $_SESSION['stock7'] = $stock;
        fclose($file7r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='7'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='7'";
        mysql_query($sqlupdate, $connection);

        $file7w = fopen("data/item7.txt", "w");
        fwrite($file7w, $stock);
        fclose($file7w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity8'])) {
        $quantity = $_GET['quantity8'];
        $image = 'http://vignette1.wikia.nocookie.net/cookieclicker/images/b/b9/Chocolate_Chip_Cookies_-_kimberlykv.jpg/revision/latest/scale-to-width-down/258?cb=2013092521325';
        $name = 'Cookie';
        $price = 1.99 * $quantity;

        $file8r = fopen("data/item8.txt", "r");
        $stock = fgets($file8r);
        $stock -= $quantity;
        $_SESSION['stock8'] = $stock;
        fclose($file8r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='8'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='8'";
        mysql_query($sqlupdate, $connection);

        $file8w = fopen("data/item8.txt", "w");
        fwrite($file8w, $stock);
        fclose($file8w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity9'])) {
        $quantity = $_GET['quantity9'];
        $image = 'http://www.mapledonuts.com/uploads/donut%20platter.jpg';
        $name = 'Donut';
        $price = 2.99 * $quantity;

        $file9r = fopen("data/item9.txt", "r");
        $stock = fgets($file9r);
        $stock -= $quantity;
        $_SESSION['stock9'] = $stock;
        fclose($file9r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='9'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='9'";
        mysql_query($sqlupdate, $connection);

        $file9w = fopen("data/item9.txt", "w");
        fwrite($file9w, $stock);
        fclose($file9w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity10'])) {
        $quantity = $_GET['quantity10'];
        $image = 'http://www.creationfood.ca/wp-content/uploads/2015/02/croissants-korea-AFPrelax-151113.jpg';
        $name = 'Croissant';
        $price = 2.59 * $quantity;

        $file10r = fopen("data/item10.txt", "r");
        $stock = fgets($file10r);
        $stock -= $quantity;
        $_SESSION['stock10'] = $stock;
        fclose($file10r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='10'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='10'";
        mysql_query($sqlupdate, $connection);

        $file10w = fopen("data/item10.txt", "w");
        fwrite($file10w, $stock);
        fclose($file10w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity11'])) {
        $quantity = $_GET['quantity11'];
        $image = 'http://2.bp.blogspot.com/-z0qDwGGxAdQ/UYs3QKHCWiI/AAAAAAAAev4/4WMnlJjzY5A/s1600/photo+5.JPG';
        $name = 'Donut Bites';
        $price = 2.99 * $quantity;

        $file11r = fopen("data/item11.txt", "r");
        $stock = fgets($file11r);
        $stock -= $quantity;
        $_SESSION['stock11'] = $stock;
        fclose($file11r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='11'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='11'";
        mysql_query($sqlupdate, $connection);

        $file11w = fopen("data/item11.txt", "w");
        fwrite($file11w, $stock);
        fclose($file11w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity12'])) {
        $quantity = $_GET['quantity12'];
        $image = 'http://cookdiary.net/wp-content/uploads/images/Apple-Strudel.jpg';
        $name = 'Apple Strudel';
        $price = 3.45 * $quantity;

        $file12r = fopen("data/item12.txt", "r");
        $stock = fgets($file12r);
        $stock -= $quantity;
        $_SESSION['stock12'] = $stock;
        fclose($file12r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='12'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='12'";
        mysql_query($sqlupdate, $connection);

        $file12w = fopen("data/item12.txt", "w");
        fwrite($file12w, $stock);
        fclose($file12w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity13'])) {
        $quantity = $_GET['quantity13'];
        $image = 'http://divascancook.com/wp-content/uploads/2015/12/homemade-cinnamon-rolls-recipe.jpg';
        $name = 'Cinnamon Rolls';
        $price = 5.97 * $quantity;

        $file13r = fopen("data/item13.txt", "r");
        $stock = fgets($file13r);
        $stock -= $quantity;
        $_SESSION['stock13'] = $stock;
        fclose($file13r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='13'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='13'";
        mysql_query($sqlupdate, $connection);

        $file13w = fopen("data/item13.txt", "w");
        fwrite($file13w, $stock);
        fclose($file13w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity14'])) {
        $quantity = $_GET['quantity14'];
        $image = 'http://www.bakepedia.com/wp-content/uploads/2013/08/eclair-inside-of-eclair.jpg';
        $name = 'Eclair';
        $price = 5.49 * $quantity;

        $file14r = fopen("data/item14.txt", "r");
        $stock = fgets($file14r);
        $stock -= $quantity;
        $_SESSION['stock14'] = $stock;
        fclose($file14r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='14'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='14'";
        mysql_query($sqlupdate, $connection);

        $file14w = fopen("data/item14.txt", "w");
        fwrite($file14w, $stock);
        fclose($file14w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity15'])) {
        $quantity = $_GET['quantity15'];
        $image = 'http://comendocomosolhos.com/wp-content/uploads/2015/04/macaron.jpg';
        $name = 'Macaron';
        $price = 4.89 * $quantity;

        $file15r = fopen("data/item15.txt", "r");
        $stock = fgets($file15r);
        $stock -= $quantity;
        $_SESSION['stock15'] = $stock;
        fclose($file15r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='15'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='15'";
        mysql_query($sqlupdate, $connection);

        $file15w = fopen("data/item15.txt", "w");
        fwrite($file15w, $stock);
        fclose($file15w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity16'])) {
        $quantity = $_GET['quantity16'];
        $image = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Mooncake.jpg/250px-Mooncake.jpg';
        $name = "Mooncake";
        $price = 2.78 * $quantity;

        $file16r = fopen("data/item16.txt", "r");
        $stock = fgets($file16r);
        $stock -= $quantity;
        $_SESSION['stock16'] = $stock;
        fclose($file16r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='16'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='16'";
        mysql_query($sqlupdate, $connection);

        $file16w = fopen("data/item16.txt", "w");
        fwrite($file16w, $stock);
        fclose($file16w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity17'])) {
        $quantity = $_GET['quantity17'];
        $image = 'http://demandware.edgesuite.net/sits_pod20-adidas/dw/image/v2/aaqx_prd/on/demandware.static/-/Sites-adidas-products/default/dwa8b868d7/zoom/S99320_21_model.jpg?sw=500&sfrm=jpg';
        $name = "Women's adidas Reigning Champ Fleece Jacket";
        $price = 150 * $quantity;

        $file17r = fopen("data/item17.txt", "r");
        $stock = fgets($file17r);
        $stock -= $quantity;
        $_SESSION['stock17'] = $stock;
        fclose($file17r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='17'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='17'";
        mysql_query($sqlupdate, $connection);

        $file17w = fopen("data/item17.txt", "w");
        fwrite($file17w, $stock);
        fclose($file17w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity18'])) {
        $quantity = $_GET['quantity18'];
        $image = 'http://demandware.edgesuite.net/sits_pod20-adidas/dw/image/v2/aaqx_prd/on/demandware.static/-/Sites-adidas-products/default/dwb63ad037/zoom/AY0085_21_model.jpg?sw=500&sfrm=jpg';
        $name = "Women's Climaheat Light Jacket";
        $price = 300 * $quantity;

        $file18r = fopen("data/item18.txt", "r");
        $stock = fgets($file18r);
        $stock -= $quantity;
        $_SESSION['stock18'] = $stock;
        fclose($file18r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='18'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='18'";
        mysql_query($sqlupdate, $connection);

        $file18w = fopen("data/item18.txt", "w");
        fwrite($file18w, $stock);
        fclose($file18w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity19'])) {
        $quantity = $_GET['quantity19'];
        $image = 'http://shoptommy.scene7.com/is/image/ShopTommy/DW01231_078_BCK?wid=218&hei=326&fmt=jpeg&qlt=90%2c0&op_sharpen=1&resMode=trilin&op_usm=0.8%2c1.0%2c6%2c0&iccEmbed=0&cropN=0.165,0,0.67,1';
        $name = 'Hilfiger Denim Sequin Combo Dress';
        $price = 169.50 * $quantity;

        $file19r = fopen("data/item19.txt", "r");
        $stock = fgets($file19r);
        $stock -= $quantity;
        $_SESSION['stock19'] = $stock;
        fclose($file19r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='19'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='19'";
        mysql_query($sqlupdate, $connection);

        $file19w = fopen("data/item19.txt", "w");
        fwrite($file19w, $stock);
        fclose($file19w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity20'])) {
        $quantity = $_GET['quantity20'];
        $image = 'http://shoptommy.scene7.com/is/image/ShopTommy/WW17392_901_FNT?wid=218&hei=326&fmt=jpeg&qlt=90%2c0&op_sharpen=1&resMode=trilin&op_usm=0.8%2c1.0%2c6%2c0&iccEmbed=0&cropN=0.165,0,0.67,1';
        $name = 'Sequin Stripe Sweater Gigi Hadid';
        $price = 199.50 * $quantity;

        $file20r = fopen("data/item20.txt", "r");
        $stock = fgets($file20r);
        $stock -= $quantity;
        $_SESSION['stock20'] = $stock;
        fclose($file20r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='20'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='20'";
        mysql_query($sqlupdate, $connection);

        $file20w = fopen("data/item20.txt", "w");
        fwrite($file20w, $stock);
        fclose($file20w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    } else if(isset($_GET['quantity21'])) {
        $quantity = $_GET['quantity21'];
        $image = 'http://images.nike.com/is/image/DotCom/PDP_COPY/777269_421/fc-barcelona-sportswear-authentic-n98-track-jacket.jpg';
        $name = 'FC Barcelona Nike Sportswear Authentic N98';
        $price = 120 * $quantity;

        $file21r = fopen("data/item21.txt", "r");
        $stock = fgets($file21r);
        $stock -= $quantity;
        $_SESSION['stock21'] = $stock;
        fclose($file21r);

        $sqlstock = "SELECT product_quantity FROM products_tbl WHERE stock_id='21'";
        $sqlstock -= $quantity;
        $sqlupdate = "UPDATE products_tbl SET product_quantity='$stock' WHERE stock_id='21'";
        mysql_query($sqlupdate, $connection);

        $file21w = fopen("data/item21.txt", "w");
        fwrite($file21w, $stock);
        fclose($file21w);

        fwrite($file, $image . PHP_EOL);
        fwrite($file, $name . PHP_EOL);
        fwrite($file, $quantity . PHP_EOL);
        fwrite($file, $price . PHP_EOL);

        fwrite($purchase, $price . PHP_EOL);

        fwrite($stuff, $name . PHP_EOL);
        fwrite($stuff, $quantity . PHP_EOL);
        fwrite($stuff, $price . PHP_EOL);
    }

    fclose($file);
    fclose($purchase);
    fclose($stuff);
    mysql_close($connection);

    header('Location: home.php');
?>
