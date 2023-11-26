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
<h1>แก้ไขราคา</h1>
<form action="" method="POST">
        <?php 
        $sku = $_GET['sku'];
        $price_sell = $_GET['price_sell'];
        $price_net = $_GET['price_net'];
        echo $sku;
        ?>
        <input type="text" name="new_price_sell" value="<?php echo $price_sell ?>">
        <input type="text" name="new_price_net" value="<?php echo $price_net ?>">
        <input type="submit" value="OK"  onclick="return confirm('คุณต้องกาแก้ไขข้อมูลนี้ใช่หรือไม่');">
    </form>
    <?php
        include("php/action_edit_price.php")
    ?>

</body>
</html>