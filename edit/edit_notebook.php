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
    <h1> แก้ไขสเปค Notebook </h1>
    <form action="" method="POST">
        <?php 
        $sku = $_GET['sku'];
        if ($sku) {
            $query = "SELECT * FROM spec_nb WHERE sku = '$sku'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_array($result)) {
                //echo $row['sku'] . " " . $row['model']. " " . $row['brand'];
                $cpu = $row['cpu'];
                $ram = $row['ram'];
                $ssd1 = $row['ssd1'];
                $ssd2 = $row['ssd2'];
                $hdd = $row['hdd'];
                $vga = $row['vga'];
                $display = $row['display'];
                $adapter = $row['adapter'];
                $acc = $row['acc'];          
              }
          }
        } 
          else {
            echo "";
          }
        
        if ($sku) {
            $sql = "SELECT * FROM products WHERE sku = '$sku'";
            $result_ = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result_) > 0) {
              while ($row = mysqli_fetch_array($result_)) {
                //echo $row['sku'] . " " . $row['model']. " " . $row['brand'];
                $brand = $row['brand'];
                $model = $row['model'];
                echo "รายการที่แก้ไข : $brand $model" ;
              }
          }
        } 
          else {
            echo "";
          }

        ?>
            <label>CPU : </label>
            <input type="text" name="new_cpu" value="<?php echo $cpu ?>"<br>
            <label>RAM : </label>
            <input type="text" name="new_ram" value="<?php echo $ram ?>"<br>
            <label>SSD1 :</label>
            <input type="text" name="new_ssd1" value="<?php echo $ssd1 ?>"><br>
            <label>SSD2 :</label>
            <input type="text" name="new_ssd2" value="<?php echo $ssd2 ?>"><br>
            <label>HDD :</label>
            <input type="text" name="new_hdd" value="<?php echo $hdd ?>"><br>
            <label>VGA :</label>
            <input type="text" name="new_vga" value="<?php echo $vga ?>"><br>
            <label>DISPLAY :</label>
            <input type="text" name="new_display" value="<?php echo $display ?>"><br>
            <label>Adapter : </label>
            <input type="text" name="new_adapter" value="<?php echo $adapter ?>"><br>
            <label>ACC : </label>
            <input type="text" name="new_acc" value="<?php echo $acc ?>"><br>
        <input type="submit" value="แก้ไข"  onclick="return confirm('คุณต้องการแก้ไขข้อมูลนี้ใช่หรือไม่');">
    </form>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_cpu = $_POST['new_cpu'];    
    $new_ram = $_POST['new_ram'];
    $new_ssd1 = $_POST['new_ssd1'];
    $new_ssd2 = $_POST['new_ssd2'];
    $new_hdd = $_POST['new_hdd'];    
    $new_vga = $_POST['new_vga'];
    $new_display = $_POST['new_display'];
    $new_adapter = $_POST['new_adapter'];
    $new_acc = $_POST['new_acc'];
    $sql = "UPDATE spec_nb
            SET cpu = '$new_cpu', 
            ram = '$new_ram',
            ssd1 = '$new_ssd1',
            ssd2 = '$new_ssd2',
            hdd = '$new_hdd' , 
            vga = '$new_vga',
            display = '$new_display',
            adapter = '$new_adapter',
            acc = '$new_acc'
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