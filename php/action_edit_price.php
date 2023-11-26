<?php
// รับค่าจากฟอร์ม
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_price_sell = $_POST['new_price_sell'];    
    $new_price_net = $_POST['new_price_net'];
       
            // สร้างคำสั่ง SQL UPDATE
            $sql = "UPDATE price
                    SET price_sell = '$new_price_sell' , price_net = '$new_price_net'
                    WHERE sku = '$sku'";

            // ดำเนินการคำสั่ง SQL
            $result = mysqli_query($conn, $sql);
            // ตรวจสอบผลลัพธ์
            if ($result) {
                // อัปเดตสำเร็จ
                echo "ข้อมูลได้รับการอัปเดตแล้ว!";
                header("Location: home.php");
            } else {
                // อัปเดตล้มเหลว
                echo "เกิดข้อผิดพลาดในการอัปเดตข้อมูล!";
            }
        }
    

            // ปิดการเชื่อมต่อกับฐานข้อมูล
            mysqli_close($conn);

            ?>