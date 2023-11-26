<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../php/connectdb.php") ?>
    <?php include("../php/menu.php") ?>
    <h1> แก้ไขข้อมูลสินค้า </h1>
    <form action="" method="POST">
        <?php 
        $sku = $_GET['sku'];
        if ($sku) {
            $query = "SELECT * FROM products WHERE sku = '$sku'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                //echo $row['sku'] . " " . $row['model']. " " . $row['brand'];
                $brand = $row['brand'];
                $model = $row['model'];
                $price_buy = $row['price_buy'];
                $price_sell = $row['price_sell'];
                $price_net = $row['price_net'];
                echo "รายการที่แก้ไข : $brand $model" ;
              }
          }} 
          else {
            echo "";
          }
        ?>
        <br>
        <br>
        <label>ราคาเข้า : </label>
        <input type="text" name="new_price_buy" value="<?php echo $price_buy ?>">
        <label>ราคาขาย : </label>
        <input type="text" name="new_price_sell" value="<?php echo $price_sell ?>">
        <label>ราคา NET : </label>
        <input type="text" name="new_price_net" value="<?php echo $price_net ?>">
        <input type="submit" value="แก้ไข"  onclick="return confirm('คุณต้องการแก้ไขข้อมูลนี้ใช่หรือไม่');">
    </form>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_price_buy = $_POST['new_price_buy'];    
    $new_price_sell = $_POST['new_price_sell'];
    $new_price_net = $_POST['new_price_net'];
    $sql = "UPDATE products
            SET price_buy = '$new_price_buy', 
            price_sell = '$new_price_sell',
            price_net = '$new_price_net'
            WHERE sku = '$sku'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "ข้อมูลได้รับการอัปเดตแล้ว! <br>";
                echo "<a class='button button1' href='/result/products_notebook.php'>ย้อนกลับ</a>";
            } else {
                echo "เกิดข้อผิดพลาดในการอัปเดตข้อมูล!";
            }
        }
            mysqli_close($conn);
            ?>