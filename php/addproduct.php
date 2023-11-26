<?php
                        if($_SERVER["REQUEST_METHOD"] == "POST"){
                                $sku = $_POST["sku"];
                                $name_nb = $_POST["name"];
                                $stock_id = $_POST["stock_id"];
                                $price_buy = $_POST["price_buy"];
                                
                                
                                $sql = "SELECT * FROM product_nb WHERE sku = '$sku'";
                                $result = mysqli_query($conn,$sql);

                                        if(mysqli_num_rows($result) > 0){
                                            echo "รหัสสินค้าซ้ำ";
                                            exit();
                                        }
                                        $sql = "INSERT product_nb (sku,name_nb,stock_id)
                                                VALUES ('$sku','$name_nb','$stock_id')";
                                         $sql2 = "INSERT INTO price (sku,price_buy)
                                                VALUES ('$sku','$price_buy')";
                                
                                        mysqli_query($conn,$sql);
                                        mysqli_query($conn,$sql2);
                                        echo "เก็บเข้าระบบเรียบน้อย";    
                                        
                                    }
                            mysqli_close($conn);
                        ?>