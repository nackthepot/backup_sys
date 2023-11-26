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
                $product_serial = $row['product_serial'];
                $comment = $row['comment'];
              }
          }} 
          else {
            echo "";
          }
        ?>
        <label>ชื่อแบรนด์สินค้า : </label>
        <input type="text" name="new_brand" value="<?php echo $brand ?>"><br>
        <label>ชื่อรุ่นสินค้า </label>
        <input type="text" name="new_model" value="<?php echo $model ?>"><br>
        <label>รหัส Serial Number </label>
        <input type="text" name="new_serial" value="<?php echo $product_serial ?>"><br>
        <label>ข้อมูลเพิ่มเติม</label>
        <input type="text" name="new_comment" value="<?php echo $comment ?>"><br>
        <input type="submit" value="แก้ไข"  onclick="return confirm('คุณต้องการแก้ไขข้อมูลนี้ใช่หรือไม่');">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_brand = $_POST['new_brand'];    
    $new_model = $_POST['new_model'];
    $new_serial = $_POST['new_serial'];
    $new_comment = $_POST['new_comment'];
    $sql = "UPDATE products
            SET brand = '$new_brand' , 
            model = '$new_model',
            product_serial = '$new_serial',
            comment = '$new_comment'
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