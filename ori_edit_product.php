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
        <?php 
        $id = $_GET['id'];
        $sku = $_GET['sku'];
        $name_nb = $_GET['name'];
        echo $id;
        ?>
        <input type="text" name="new_sku" value="<?php echo $sku ?>">
        <input type="text" name="new_name"  value="<?php echo $name_nb ?>">
        <input type="submit" value="OK"  onclick="return confirm('คุณต้องการแก้ไขข้อมูลนี้ใช่หรือไม่');">
    </form>
    <?php
        include("php/action_edit_product.php")
    ?>
</body>
</html>