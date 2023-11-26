<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&family=Kanit:ital,wght@1,100&family=Noto+Sans+Thai:wght@200;500;900&family=Playfair+Display:wght@400;500&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Rammetto+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/main.css">
</head>
<body>
  </div>
  <div class="navbar">
    <a href="/index.php">home</a>
    <div class="dropdown">
      <button class="dropbtn">เพิ่มสินค้า
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/add/add_notebook.php">เพิ่ม Notebook</a>
        <a href="/add/add_monitor.php">เพิ่ม Monitor</a>
        <a href="/add/add.php">เพิ่ม อุปกรณ์ทั่วไป</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">เพิ่มข้อมูล
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/add/add_customer.php">เพิ่มข้อมูลลูกค้า</a>
        <a href="/add/add_dealer.php">เพิ่มข้อมูลที่มา</a>
        <a href="/add/add_category.php">เพิ่มหมวดหมู่</a>
        <a href="/add/add_warranty_com.php">เพิ่มผู้รับประกัน</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">ใบเบิก-คืนสินค้า
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/doc/bill.php">เปิดบิล</a>
        <a href="/doc/pickup.php">ใบเบิกของ</a>
        <a href="/doc/reture.php">ใบคืนของ</a>
        <a href="/doc/po.php">ใบ po</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">ดูข้อมูล
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/result/products.php">ข้อมูลสินค้าทั่วไป</a>
        <a href="/result/products_monitor.php">ข้อมูลสินค้า Monitor</a>
        <a href="/result/products_notebook.php">ข้อมูลสินค้า Notebook</a>
        <a href="/result/customer.php">ข้อมูลลูกค้า</a>
        <a href="/result/stockplace.php">ข้อมูลที่จัดเก็บ</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">แก้ไขข้อมูล
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="/edit/edit_products.php">แก้ชื่อสินค้า</a>
        <a href="/edit/edit_notebook.php">แก้สเปค Notebook</a>
        <a href="/edit/edit_monitor.php">แก้สเปค Monitor</a>
        <a href="/edit/edit_product_price.php">แก้ราคาสินค้า</a>
        <a href="/edit/edit_customer.php">แก้ข้อมูลลูกค้า</a>
        <a href="/edit/edit_dealer.php">แก้ข้อมูลที่มา
          <a href="/edit/edit_warranty_com.php">แก้ข้อมูลผู้รับประกัน</a>
          <a href="/del/delete.php">ลบสินค้า</a>
        </a>
      </div>
    </div>
  </div>

</body>

</html>