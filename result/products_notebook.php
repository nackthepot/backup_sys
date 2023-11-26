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
    <h1> สินค้าทั้งหมด </h1>
    <div style="overflow-x: auto;">
        <table class="customers">
            <thead>
                <tr>
                    <th>รหัสสินค้า</th>
                    <th>ชื่อสินค้า</th>
                    <th>สเปคเครื่อง</th>
                    <th>ราคาเข้า</th>
                    <th>ราคาขาย</th>
                    <th>ราคาพิเศษ</th>
                    <th>Serial Number</th>
                    <th>วันที่รับเข้า</th>
                    <th>ผู้รับประกัน</th>
                    <th>วันหมดประกัน</th>
                    <th>แหล่งที่มา</th>
                    <th>คนเพิ่มข้อมูล</th>
                    <th>COMMENT</th>
                    <th>Action</th>
                </tr>
            </thead>
    <?php
         $sql = "SELECT products.sku,
         products.brand,
         products.model,
         products.product_serial,
         products.product_date,
         products.warranty_com_id,
         products.warranty,
         products.dealer_id,
         products.price_buy,
         products.price_sell,
         products.price_net,
         products.comment,
         products.employee_id,
         spec_nb.cpu,
         spec_nb.ram,
         spec_nb.ssd1,
         spec_nb.ssd2,
         spec_nb.hdd,
         spec_nb.vga,
         spec_nb.display,
         spec_nb.adapter,
         spec_nb.acc,
         warranty_com.warranty_com_name,
         dealer.dealer_name,
         employee.employee_name
         FROM products
         INNER JOIN spec_nb ON products.sku = spec_nb.sku
         INNER JOIN warranty_com ON products.warranty_com_id = warranty_com.warranty_com_id 
         INNER JOIN dealer ON products.dealer_id = dealer.dealer_id
         INNER JOIN employee ON products.employee_id = employee.employee_id";
        $result = mysqli_query($conn,$sql);
        while($row = $result->fetch_assoc()){
            echo "
            <tr>
            <td>$row[sku] </td>
            <td>$row[brand] $row[model] </td>
            <td width='300px'>CPU : $row[cpu] <br>
            RAM : $row[ram] <br>
            SSD1 : $row[ssd1] <br>
            SSD2 : $row[ssd2] <br>
            HDD : $row[hdd] <br>
            VGA : $row[vga] <br>
            Display : $row[display] <br>
            Adapter : $row[adapter] <br>
            Acc : $row[acc] 
            </td>
            <td>$row[price_buy]</td>
            <td>$row[price_sell]</td>
            <td>$row[price_net]</td>
            <td>$row[product_serial]</td>
            <td>$row[product_date]</td>
            <td>$row[warranty_com_name]</td>
            <td>$row[warranty]</td>
            <td>$row[dealer_name]</td>
            <td>$row[employee_name]</td>
            <td>$row[comment]</td>
            <td>
                <a class='button button1' href='/edit/edit_products.php?sku=$row[sku]'>แก้ไขข้อมูลสินค้า</a>
                <a class='button button1' href='/edit/edit_notebook.php?sku=$row[sku]'>แก้ไขสเปค Notebook</a>
                <a class='button button1' href='/edit/edit_product_price.php?sku=$row[sku]'>แก้ไขราคา</a>
                <a class='button button1' href='/edit/edit_warranty_com.php?sku=$row[sku]'>แก้ไขผู้รับประกัน</a>
                <a class='button button1' href='/edit/edit_dealer.php?sku=$row[sku]'>แก้ไขที่มา</a>
                <a class='button button3' href='/del/delete.php?sku=$row[sku]'>ลบสินค้า</a>
            </td>
        </tr>
        ";
        }

    ?>
</body>
</html>