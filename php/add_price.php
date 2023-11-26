<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sku = $_POST["sku"];
    $price_buy = $_POST["price_buy"];
    $price_sell = $_POST["price_sell"];
    $price_net = $_POST["price_net"];

    $sql = "SELECT * FROM price WHERE sku = '$sku'";
    $result = mysqli_query($conn,$sql);

    if(empty($sku)){
        echo"กรุณากรอกข้อมูล";
    }
    elseif(mysqli_num_rows($result) > 0){
      echo "รหัสสินค้าซ้ำ";
      exit();
  }
    else{
      $sql = "INSERT INTO price (sku,price_buy,price_sell,price_net) 
            VALUES ('$sku','$price_buy','$price_sell','$price_net')";
                mysqli_query($conn,$sql);
                echo "เพิ่มข้อมูลเรียบร้อย";    

    }
            
    }

mysqli_close($conn);
?>