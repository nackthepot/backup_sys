<?php
    include("php/connectdb.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include("php/menu.php") ?><br>
    <h1>แก้ไขข้อมูลลูกค้า</h1>
    <?php
            $query = "SELECT customer_id FROM customers";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                  //echo $row['name'] . " " . $row['address']. " " . $row['phone'];
                  $id= $row['customer_id'];
                }
                }
            
            
    ?>
    
    <form action="" method="POST">
        <input type="text" name="customer_id" value="<?php echo $id+1; ?>">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="address" placeholder="address">
        <input type="text" name="town" placeholder="town">
        <input type="text" name="phone" placeholder="phone">
        <input type="submit" value="OK">
    </form>
    <?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $customer_id = $_POST["customer_id"];
                                $name = $_POST["name"];
                                $address = $_POST["address"];
                                $town = $_POST["town"];
                                $phone = $_POST["phone"];
                                
                                
                                $sql = "SELECT * FROM customers WHERE customer_id = '$customer_id'";
                                $result = mysqli_query($conn,$sql);

                                        if(mysqli_num_rows($result) > 0){
                                            echo "รหัสลูกค้าซ้ำ";
                                            exit();
                                        }
                                        $sql = "INSERT customers (customer_id,customer_name,customer_address,customer_town,customer_phone)
                                                VALUES ('$customer_id','$name','$address','$town','$phone')";
                                                mysqli_query($conn,$sql);
                                                echo "เก็บเข้าระบบเรียบน้อย";    
                                                header('Location: customer.php');
                                    }
                            mysqli_close($conn);
                        ?>
</body>
</html>