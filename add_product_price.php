<?php include("php/connectdb.php") ?><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("php/menu.php") ?><br>
<h1>เพิ่มราคาสินค้า</h1>
<form action="" method="POST">
        <input type="text" name="sku" placeholder="sku">
        <input type="text" name="price_buy" placeholder="ค่าเข้า">
        <input type="text" name="price_sell" placeholder="ราคาขาย">
        <input type="text" name="price_net" placeholder="ราคาเน็ต">
        <input type="submit" value="OK">
    </form>
    <?php
        include("php/add_price.php")
    ?>

</body>
</html>