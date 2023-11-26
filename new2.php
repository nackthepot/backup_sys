<?php
    include("php/connectdb.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <title>สร้างบิล</title>
</head>
<body>
<?php include("php/menu.php") ?><br>
  <h1>สร้างบิล</h1>

  <form action="new.php" method="post">
<?php
// รับค่าจาก URL
$customer_id = isset($_GET['customer_id']) ? $_GET['customer_id'] : "ไม่มีเลข";

// ตรวจสอบว่ามีค่าหรือไม่
if ($customer_id) {
  // มีค่า ให้ echo 55
  $query = "SELECT * FROM customers WHERE customer_id = '$customer_id'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
      //echo $row['name'] . " " . $row['address']. " " . $row['phone'];
      $name = $row['customer_name'];
      $address = $row['customer_address'];
      $phone = $row['customer_phone'];
    }
} else {
  // ไม่มีค่า ให้ echo ค่าเริ่มต้น
  echo "";
}
}

?>
    <input type="text" name="customer_id" value="<?php echo $customer_id ?>">
    <input type="text" name="customer_name" value="<?php  if(isset($name)){echo $name; } else{echo"This variable is NOT empty";} ?>">
    <input type="text" name="address" value="<?php  if(isset($address)){echo $address; } else{echo"This variable is NOT empty";} ?>">
    <input type="text" name="phone" value="<?php  if(isset($phone)){echo $phone; } else{echo"This variable is NOT empty";} ?>"><br>
    <br>
    <a class='btn1' href='add_customer.php'>เพิ่มผู้ใช้งาน</a>
    <a class='btn2' href='customer.php'>ค้นหา</a>
    <br>
    <br>
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

 