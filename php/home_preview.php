<?php
        $sql = "SELECT product_nb.id,product_nb.sku,product_nb.name_nb,price.price_sell,price.price_net
                FROM product_nb
                INNER JOIN price ON product_nb.sku = price.sku";
        $result = mysqli_query($conn,$sql);

        while($row = $result->fetch_assoc()){
            echo "
            <tr>
       
            <td>$row[sku]</td>
            <td>$row[name_nb]</td>
            <td>$row[price_sell]</td>
            <td>$row[price_net]</td>
            <td>
                <a class='btn btn1' href='edit_product.php?id=$row[id]&sku=$row[sku]&name=$row[name_nb]'>edit</a>
                <a class='btn btn1' href='price_edit.php?sku=$row[sku]&price_sell=$row[price_sell]&price_net=$row[price_net]'>แก้ราคา</a>
                <a class='btn btn2' href='delete.php?id=$row[id]&sku=$row[sku]&name_nb=$row[name_nb]'>delete</a>
               
              

            </td>
        </tr>
        ";
        }
    

    ?>