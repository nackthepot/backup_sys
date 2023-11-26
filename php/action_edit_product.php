<?php
// รับค่าจากฟอร์ม
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_sku = $_POST['new_sku'];    
    $new_name = $_POST['new_name'];
       
            // สร้างคำสั่ง SQL UPDATE
            $sql = "UPDATE product_nb
                    SET sku = '$new_sku' , name_nb = '$new_name'
                    WHERE id = '$id'";

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