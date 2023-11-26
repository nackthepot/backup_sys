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
    <h1> เพิ่ม Notebook </h1>
    <div class="add_main">
        <div class="left-col">
            <form action="" method="POST">
                <label>รหัส SKU : </label>
                <input type="text" name="sku" placeholder="SKU"><br>
                <label>ชื่อแบรนด์สินค้า : </label>
                <input type="text" name="brand" placeholder="brand"><br>
                <label>ชื่อรุ่นสินค้า </label>
                <input type="text" name="model" placeholder="ชื่อรุ่น"><br>
                <label>รหัส Serial Number </label>
                <input type="text" name="serial" placeholder="Serial Number"><br>
                <label>วันที่รับเข้า MM/DD/YYYY</label>
                <input type="date" name="date"><br>
                <label>ผู้รับประกัน </label>
                <select name="warranty_com_id"><br>
                    <?php
                    $sql = "SELECT * FROM warranty_com";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['warranty_com_id']}'>{$row['warranty_com_name']}</option>";
                    }
                    ?>
                </select>
                <br>
                <label>วันหมดประกัน MM/DD/YYYY</label>
                <input type="date" name="warranty"><br>
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
                <label>ราคารับเข้า</label>
                <input type="text" name="price_buy" placeholder="ราคารับเข้า"><br>
                <label>ราคาขาย </label>
                <input type="text" name="price_sell" placeholder="ราคาขาย"><br>
                <label>ราคาพิเศษ </label>
                <input type="text" name="price_net" placeholder="ราคาพิเศษ"><br>
                <label>ข้อมูลเพิ่มเติม</label>
                <input type="text" name="comment" placeholder="ข้อมูลเพิ่มเติม"><br>
                <label>ผู้รับเข้า</label>
                <select name="employee_id"><br>
                    <?php
                    $sql = "SELECT * FROM employee";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='{$row['employee_id']}'>{$row['employee_name']}</option>";
                    }
                    ?>
        </select>
                
        </div>
        <div class="right-col">
            <h2>SPEC</h2>
            <label>CPU : </label>
            <input type="text" name="cpu" placeholder="cpu"><br>
            <label>RAM : </label>
            <input type="text" name="ram" placeholder="ram"><br>
            <label>SSD1 :</label>
            <input type="text" name="ssd1" ><br>
            <label>SSD2 :</label>
            <input type="text" name="ssd2" ><br>
            <label>HDD :</label>
            <input type="text" name="hdd" ><br>
            <label>VGA :</label>
            <input type="text" name="vga" ><br>
            <label>DISPLAY :</label>
            <input type="text" name="display" ><br>
            <label>Adapter : </label>
            <input type="text" name="adapter" ><br>
            <label>ACC : </label>
            <input type="text" name="acc" ><br>
            <label>จำนวนสินค้า : </label>
            <input type="text" name="quantity" ><br>
            <br>
            <input type="submit" class="button button2" value="OK!" onclick="return confirm('คุณต้องการบันทึกข้อมูลนี้ใช่หรือไม่');">
        
        
        </div>
        <br>
        

    </form>

    </div>

</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = filter_input(INPUT_POST,"sku",
    FILTER_SANITIZE_NUMBER_INT);
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $serial = $_POST["serial"];
    $date = $_POST["date"];
    $warranty_com_id = $_POST["warranty_com_id"];
    $warranty = $_POST["warranty"];
    $dealer_id = $_POST["dealer_id"];
    $price_buy = $_POST["price_buy"];
    $price_sell = $_POST["price_sell"];
    $price_net = $_POST["price_net"];
    $comment = $_POST["comment"];
    $employee_id = $_POST["employee_id"];
    $cpu = $_POST["cpu"];
    $ram = $_POST["ram"];
    $ssd1 = $_POST["ssd1"];
    $ssd2 = $_POST["ssd2"];
    $hdd = $_POST["hdd"];
    $vga = $_POST["vga"];
    $display = $_POST["display"];
    $adapter = $_POST["adapter"];
    $acc = $_POST["acc"];
    $quantity = $_POST["quantity"];
    

    if (empty($sku)) {
        echo "โปรดกรอก SKU";
    } elseif (empty($brand)) {
        echo "โปรดกรอก brand";
    } elseif (empty($model)) {
        echo "โปรดกรอก model";
    } elseif (empty($serial)) {
        echo "โปรดกรอกรหัส SN";
    } elseif (empty($date)) {
        echo "โปรดใส่วันที่";
    } else {

        $sql = "SELECT * FROM products WHERE sku = '$sku'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "รหัสสินค้าซ้ำ";
            exit();
        } else {
            $sql = "INSERT INTO products(sku,brand,model,product_serial,product_date,warranty_com_id,warranty,dealer_id,price_buy,price_sell,price_net,comment,employee_id)
                    VALUES ('$sku','$brand','$model','$serial','$date','$warranty_com_id','$warranty','$dealer_id','$price_buy','$price_sell','$price_net','$comment','$employee_id')";
            $sql2 = "INSERT INTO spec_nb (sku,cpu,ram,ssd1,ssd2,hdd,vga,display,adapter,acc)
                    VALUES ('$sku','$cpu','$ram','$ssd1','$ssd2','$hdd','$vga','$display','$adapter','$acc')";
            $sql3 = "INSERT INTO stock (sku,quantity)
                    VALUES ('$sku','$quantity')";
            $sql4 = "INSERT INTO stockplace (sku)
                    VALUES ('$sku')";
    }

        mysqli_query($conn, $sql);
        mysqli_query($conn, $sql2);
        mysqli_query($conn, $sql3);
        mysqli_query($conn, $sql4);
        echo "เก็บเข้าระบบเรียบน้อย";
    }
}
mysqli_close($conn);

?>
