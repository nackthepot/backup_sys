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
        <td>รายการ Notebook</td>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>ราคาขาย</th>
            <th>ราคา Net</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <?php
        include("php/home_preview.php")
    ?>
    
        <div class="wrapper">
        <table class="table">
             <thead>
             <td>รายการ อุปกรณ์</td>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>หมวดหมู่</th>
            <th>ราคาขาย</th>
            <th>ราคา Net</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <?php
        include("php/frist_preview.php")
    ?>
  

   

    
</body>
</html>