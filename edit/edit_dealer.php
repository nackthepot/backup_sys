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
    <h1> แก้ข้อมูลที่มา </h1>
    <a class='button button1' href='/add/add_warranty_com.php'>เพิ่มแหล่งที่มา</a>
    <br>
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
                echo "<br>รายการที่แก้ไข : $brand $model " ;
              }
          }} 
          else {
            echo "";
          }
        ?>
        <br>
        <label>แหล่งที่มา </label>
        <select name="dealer_id"><br>
                    <?php
                    $sql = "SELECT * FROM dealer";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['dealer_id']}'>{$row['dealer_name']}</option>";
                    }
                    ?>
                </select>
                <input type="submit" class="button button2" value="OK!" onclick="return confirm('คุณต้องการบันทึกข้อมูลนี้ใช่หรือไม่');">
            
    
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $dealer_id = $_POST["dealer_id"];
    $sql = "UPDATE products
            SET dealer_id = '$dealer_id'
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
