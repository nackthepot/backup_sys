<?php
        $sql = "SELECT products.id,products.sku,products.name_pd,category.category_name,price.price_sell,price.price_net
                FROM products
                INNER JOIN price ON products.sku = price.sku
                INNER JOIN category ON products.category_id = category.category_id";
        $result = mysqli_query($conn,$sql);

        while($row = $result->fetch_assoc()){
            echo "
            <tr>
            <td>$row[sku]</td>
            <td>$row[name_pd]</td>
            <td>$row[category_name]</td>
            <td>$row[price_sell]</td>
            <td>$row[price_net]</td>
            <td>
                <a class='btn btn1' href='edit_product.php?id=$row[id]&sku=$row[sku]&name=$row[name_pd]'>edit</a>
                <a class='btn btn1' href='price_edit.php?sku=$row[sku]&price_sell=$row[price_sell]&price_net=$row[price_net]'>แก้ราคา</a>
                <a class='btn btn2' href='delete.php?id=$row[id]&sku=$row[sku]&name_pd=$row[name_pd]'>delete</a>
               
              

            </td>
        </tr>
        ";
        }
    

    ?>