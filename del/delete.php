<?php
    include("../php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("../php/menu.php") ?><br>
    <h1>ลบสินค้า</h1>
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
               echo "รายการที่ลบ : $brand $model" ;
             }
         }} 
         else {
           echo "";
         }
        ?>
        
        <input type="submit" value="Delete" style="background-color : red" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่');">
    </form>
        <?php
          if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $sql = "DELETE FROM products
                            WHERE sku = '$sku'";
                    $sql2 = "DELETE FROM spec_nb
                            WHERE sku = '$sku'";
                    $sql3 = "DELETE FROM stock
                            WHERE sku = '$sku'";
                    $sql4 = "DELETE FROM stockplace
                            WHERE sku = '$sku'";
                    $result = mysqli_query($conn, $sql);
                    $result = mysqli_query($conn, $sql2);
                    $result = mysqli_query($conn, $sql3);
                    $result = mysqli_query($conn, $sql4);
                    if ($result) {
                        echo "ลบข้อมูลแล้ว!";
                        echo "<a class='button button1' href='/result/products_notebook.php'>ย้อนกลับ</a>";
                    } else {
                        echo "ลบข้อมูลไม่สำเร็จ!";
                    }
                }
                    mysqli_close($conn);
           
    ?>
</body>
</html>