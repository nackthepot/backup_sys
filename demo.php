<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Invoice Generator</title>
</head>
<body>
<?php include("php/menu.php") ?><br>
<?php include("php/connectdb.php") ?><br>
  <h1>ใบกำกับภาษี</h1>

  <form action="" method="post">
    <label for="name">ชื่อลูกค้า</label>
    <input type="text" name="name" id="name">
    <input type="text" name="sku" id="sku">
    <input type="submit" value="click">

    <label for="date">วันที่</label>
    <input type="date" name="date" id="date">

    <label for="product">สินค้า</label>
    <select name="product" id="product">
      <option value="">เลือกสินค้า</option>
      <?php
        $sku = $_POST['sku'];
        
        // แสดงรายการสินค้าจาก MySQL
        $connection = new mysqli("localhost", "root", "", "test");
        $query = "SELECT * FROM products WHERE sku = '$sku'";
        $result = $connection->query($query);

        while ($row = $result->fetch_assoc()) {
          echo "<option value=\"{$row['id']}\">{$row['name']} ({$row['sku']} บาท)</option>";
        }

        $connection->close();
      ?>
    </select>

    <label for="quantity">จำนวน</label>
    <input type="number" name="quantity" id="quantity" min="1">

    <button type="submit">สร้างใบกำกับภาษี</button>
  </form>

  <?php

    // ตรวจสอบว่ามีการกดปุ่มสร้างใบกำกับภาษีหรือไม่
    if (isset($_POST['submit'])) {

      // ดึงข้อมูลจากฟอร์ม
      $name = $_POST['name'];
      $date = $_POST['date'];
      $productId = $_POST['product'];
      $quantity = $_POST['quantity'];

      // เชื่อมต่อกับ MySQL
      $connection = new mysqli("localhost", "root", "", "test");

      // ดึงข้อมูลสินค้า
      $query = "SELECT * FROM products WHERE id = $productId";
      $result = $connection->query($query);

      // ตรวจสอบว่าสินค้ามีอยู่หรือไม่
      if ($result->num_rows > 0) {

        // ดึงข้อมูลสินค้า
        $row = $result->fetch_assoc();

        // คำนวณราคารวม
        $total = $row['sku'] * $quantity;

        // แสดงใบกำกับภาษี
        echo "<h2>ใบกำกับภาษี</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>ชื่อลูกค้า</th>";
        echo "<td>$name</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>วันที่</th>";
        echo "<td>$date</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>สินค้า</th>";
        echo "<td>$row[name]</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>จำนวน</th>";
        echo "<td>$quantity</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>ราคา</th>";
        echo "<td>" . number_format($row['sku'], 2) . " บาท</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>ราคารวม</th>";
        echo "<td>" . number_format($total, 2) . " บาท</td>";
        echo "</tr>";
        echo "</table>";

      } else {
        echo "สินค้านี้ไม่มีอยู่";
      }

      $connection->close();
    }

  ?>

</body>
</html>
