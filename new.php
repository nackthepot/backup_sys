<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>สร้างบิล</title>
</head>
<body>
  <h1>สร้างบิล</h1>

  <form action="new.php" method="post">
<?php
// รับค่าจาก URL
$customer_id = isset($_GET['customer_id']) ? $_GET['customer_id'] : "ไม่มีเลข";
$name = isset($_GET['name']) ? $_GET['name'] : "ไม่มีชื่อ";
// ตรวจสอบว่ามีค่าหรือไม่
if ($name) {
  // มีค่า ให้ echo 55
  echo "";
} else {
  // ไม่มีค่า ให้ echo ค่าเริ่มต้น
  echo $name;
}


?>
    <input type="text" name="customer_id" value="<?php echo $customer_id ?>">
    <input type="text" name="customer_name" value="<?php echo $name ?>">
    <a class='btn btn1' href='customer.php'>เพิ่มผู้ใช้งาน</a>
    <a class='btn btn1' href='customer.php'>ค้นหา</a>
    <input type="date" name="date_of_issue" placeholder="วันที่ออกบิล">

    <h2>รายการสินค้า</h2>

    <table>
      <tr>
        <th>ชื่อสินค้า</th>
        <th>จำนวน</th>
        <th>ราคาต่อหน่วย</th>
      </tr>

      <tr>
        <td><input type="text" name="item_name_1" placeholder="ชื่อสินค้า 1"></td>
        <td><input type="number" name="quantity_1" placeholder="จำนวน 1"></td>
        <td><input type="number" name="unit_price_1" placeholder="ราคาต่อหน่วย 1"></td>
      </tr>

      <tr>
        <td><input type="text" name="item_name_2" placeholder="ชื่อสินค้า 2"></td>
        <td><input type="number" name="quantity_2" placeholder="จำนวน 2"></td>
        <td><input type="number" name="unit_price_2" placeholder="ราคาต่อหน่วย 2"></td>
      </tr>

      <tr>
        <td><input type="text" name="item_name_3" placeholder="ชื่อสินค้า 3"></td>
        <td><input type="number" name="quantity_3" placeholder="จำนวน 3"></td>
        <td><input type="number" name="unit_price_3" placeholder="ราคาต่อหน่วย 3"></td>
      </tr>

    </table>

    <input type="submit" value="สร้างบิล">
  </form>

 