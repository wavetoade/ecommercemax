<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEOULADE - Admin Panel</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<style>
@font-face {
    font-family: interphases demibold;
    src: url(TT\ Interphases\ Pro\ Trial\ DemiBold.ttf);
}
@font-face {
    font-family: interphases medium;
    src: url(TT\ Interphases\ Pro\ Trial\ Medium.ttf);
}
@font-face {
    font-family: interphases extrabold;
    src: url(TT\ Interphases\ Pro\ Trial\ ExtraBold.ttf);
}

    header{
      background-color: beige;
      color: darkred;
      height: 50px;
      display: flex;
      top: 0;
      position: sticky;
      z-index: 99;
      box-shadow: 1px 5px 20px 2px grey;
      width: 100%;  
    }
    header span{
      font-family: interphases extrabold;
      font-size: 33px;
      margin-left: 20px;
      width: 50%;
    }
    header a{
      text-decoration: none;
      color: darkred;
    }
    .nav-main{
      margin: 13px 0px 0px 0px;
      width: 250%;
    }
    .nav-main span{
        font-family: interphases demibold;
        font-size: 15px;
    }
    .search-index{
      width: 100%;
      position: relative;
      bottom: 6px;
      align-content: right;
      justify-content: right;
      opacity: 0;
    }
    .search-table{
      width: 100%;
      position: relative;
      bottom: 6px;
      align-content: right;
      justify-content: right;
    }
    .search-table input[type=button]{
      background-color: darkred;
      color: beige;
      border: none;
      border-radius: 4px;
      font-family: interphases demibold;
    padding: 5px 10px; 
    }
    #search-index{
      border: 1px solid darkred;
      border-radius: 4px;
      width: 50%;
    }
    footer {
    margin-top: 50px;
    }
    .footer-text{
    font-family: interphases medium;
    font-size: 14px;
    background-color: darkred;
    color: #E3E3E3;
    height: 50px;
    text-align: center;
    padding-top: 15px;
    }
    .main{
        display: flex;
    }
    .form-insert-product{
        background-color: beige;
        margin: 50px 20px 0px 30px;
        padding: 20px;
        width: 100%;
        height: 100%;
        border: none;
        border-radius: 15px;
        box-shadow: 0px 0px 20px 1px rgba(128, 128, 128, 0.342);
    }
    .form-insert-product h2{
        font-family: interphases extrabold;
        text-align: center;
        color: darkred;
    }
    .table-main{
        width: 300%;
        margin-top: 50px;
        margin-right: 40px;
        font-family: interphases medium;

    }
    .table-main th{
        width: 10%;
        text-align: center;
        font-family: interphases extrabold;
        background-color: darkred;
        color: white;
    }
    .table-main tbody{
        text-align: center;
    }
    .table-main tbody tr{
        background-color: beige;
        border-bottom: 1px solid darkred;
        transition: 0.2s ease;
        height: 100%;
    }
    .table-main tbody tr:hover{
        background-color: white;
        border-bottom: 1px solid darkred;
    }
    #image-table{
        width: 50%;
        mix-blend-mode: darken;
    }
    label{
        font-family: interphases demibold;
    }
    input[type=text], input[type=number] {
      border: 1px solid darkred;
      border-radius: 4px;
      padding: 5px; 
      width: 100%;
    }
    input[type=submit]{
        margin-top: 20px;
        width: 100%;
        background-color: darkred;
        color: beige;
        border: 1px solid darkred;
        border-radius: 5px;
        font-family: interphases demibold;
        padding-top: 5px;
    }
</style>
<body>
        <header>
        <span id="main-logo">SEOULADE</span>
        <div class="nav-main">
           <span>| &nbsp&nbsp &nbsp Admin Panel</span> 
        </div>
        <div class="search-index">
        <input type="text" name="" id="search-index">
        <input type="button" value="SEARCH">
        <span><img src="" alt="" class="cart-logo"></span>
        </div>
    </header>
        <?php
    include 'db.php';

    $nextSID = 1;
    $result = $conn->query("SELECT MAX(product_id) AS product_id FROM products");
    if($result && $row = $result->fetch_assoc()) {
        $nextSID = $row["product_id"] + 1;
    }
    ?>
<div class="main">
    <div class="form-insert-product">
        <form method="post" action="insertadmin.php">
        <h2>Insert & Edit Product</h2>
        <hr>
        <label for="product_id">Product ID:</label> <br>
        <input type="number" name="product_id" id="product_id" value="<?php echo $nextSID; ?>" disabled> <br>

        <label for="product_name">Product Name:</label> <br>
        <input type="text" name="product_name" id="product_name"> <br>

        <label for="product_price">Price:</label> <br>
        <input type="number" name="product_price" id="product_price"> <br>

        <label for="product_stocks">Stocks:</label> <br>
        <input type="number" name="product_stocks" id="product_stocks"> <br>
        
        <label for="product_img">Upload Image:</label> <br>
        <input type="file" name="product_img" id="product_img"> <br>

        <input type="submit" value="Insert" name="Insert">
        <input type="submit" value="Edit" name="Edit">
        </form>
    </div>
    <div class="table-main">

        <div class="search-table">
        <input type="text" name="" id="search-index">
        <input type="button" value="SEARCH">
        <span><img src="" alt="" class="cart-logo"></span>
        </div>  
        <table class="table-inner" border="1">
            <thead>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Stocks</th>
                <th>Product Image</th>
            </thead>

            <tbody>
        <?php

            include 'db.php';
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                          <td>{$row["product_id"]}</td>
                          <td>{$row["name"]}</td>
                          <td>{$row["price"]}</td>
                          <td>{$row["stocks"]}</td>";
            ?>
                          <td><img id="image-table" src="image.php?id=<?php echo $row['product_id'];?>"></td>
                          
                          <?php
                          
                }
            } else {
                echo "<td colspan='5'>No products available.</td>";
            }
  ?>
            </tbody>
        </table>
    </div>
</div>

          <footer>
    <p class="footer-text">
        Copyright 2025 © SEOULADE.
    </p>
    <script>
            document.addEventListener("DOMContentLoaded", function () {
    const rows = document.querySelectorAll("table tbody tr");

  rows.forEach((row) => {
    row.addEventListener("click", function () {
      const cells = row.querySelectorAll("td");
      document.getElementById("product_id").value = cells[0].textContent;
      document.getElementById("product_name").value = cells[1].textContent;
      document.getElementById("product_price").value = cells[2].textContent;
      document.getElementById("product_stocks").value = cells[3].textContent;
    });
  });
});
    </script>
</footer>
</body>
</html>