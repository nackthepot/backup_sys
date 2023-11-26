<?php
    include("php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="customer_id">
    <button type="submit">OK</button>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $customerID = $_POST["customer_id"];
        
            $customerSQL = "SELECT * FROM customer WHERE customer_id = '$customerID'";
            $customerResult = mysqli_query($conn, $customerSQL);
        
            if (mysqli_num_rows($customerResult) > 0) {
                $customerRow = mysqli_fetch_assoc($customerResult);
                $customerName = $customerRow["name"];
                $customerAddress = $customerRow["address"];
                $customerPhone = $customerRow["phone"];
        
                echo $customerName . " " . $customerAddress . " " . $customerPhone;
            } else {
                echo "ไม่พบลูกค้า";
            }
        
            mysqli_free_result($customerResult);
        }
        
    ?>
    
    <input type="text" name="customer_name" value="<?php 
    if(isset( $customerName)){
        echo  $customerName;
       } 
       else{
        echo"This variable is NOT empty";
       }?>">
       <br>
    <form action="" method="post">
    <input type="text" name="products_id">
    <input type="submit" value="ok">
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $productID = $_POST["products_id"];
        
            $productSQL = "SELECT * FROM products WHERE id = '$productID'";
            $productResult = mysqli_query($conn, $productSQL);
        
            if (mysqli_num_rows($productResult) > 0) {
                $productRow = mysqli_fetch_assoc($productResult);
                $productName = $productRow["products_name"];
        
                echo $productName;
            } else {
                echo "ไม่พบสินค้า";
            }
        
            mysqli_free_result($productResult);
            mysqli_close($conn);
        }
    ?>
    <input type="text" name="product_name" value="<?php 
    if(isset($productName)){
        echo $productName;
       } 
       else{
        echo"This variable is NOT empty";
       }?>">
</body>
</html>