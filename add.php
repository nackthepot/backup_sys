<?php
    include("php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("php/menu.php") ?><br>
    <h1>เพิ่มสินค้า</h1>
    <form action="" method="POST">
        <input type="text" name="sku" placeholder="sku">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="stock_id" placeholder="stock">
        <input type="text" name="price_buy" placeholder="price_buy">
        <input type="submit" value="OK">
    </form>
    <?php
        include("php/addproduct.php")
    ?>
</body>
</html>