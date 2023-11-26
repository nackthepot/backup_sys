<?php
    include("php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table {
  border: 1px solid black;
}
th {
  color: white;
  padding: 20px;
  background-color: blue;
  border: 1px solid black;
}
td {
  width: 300px;
  border: 1px solid black;
  height: 40px;
}
tr {
    
}

.btn{
    background-color: red;
    padding: 2px 5px;
    border-radius: 5px;
    text-decoration: none;
    color : white;
}

.btn1{
    background-color: green;
    margin-left: 10px;
}

.btn2{
    background-color: red;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("php/menu.php") ?><br>
    <h1>หน้าหลัก</h1>
    
    <div class="wrapper">
<table class="table">
    <thead>
        <td>รายการลูกค้า</td>
        <tr>
            <th>รหัสลูกค้า</th>
            <th>ชื่อ</th>
            <th>ที่อยู่</th>
            <th>จังหวัด</th>
            <th>เบอร์ติดต่อ</th>
            <th>ACTION</th>
        </tr>
    </thead>
    
        <?php
        $sql = "SELECT *
                FROM customers
                ";
        $result = mysqli_query($conn,$sql);

        while($row = $result->fetch_assoc()){
            echo "
            <tr>
       
            <td>$row[customer_id]</td>
            <td>$row[customer_name]</td>
            <td>$row[customer_address]</td>
            <td>$row[customer_town]</td>
            <td>$row[customer_phone]</td>
            <td>
                <a class='btn btn1' href='new2.php?customer_id=$row[customer_id]'>เลือก</a>

            </td>
        </tr>
        ";
        }
    

    ?>
    

    
</body>
</html>