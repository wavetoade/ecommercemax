<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

$product_id = $_POST['product_id'];
$quantity = $_POST['total_order'];
$name = $_POST['name-customer'];
$address = $_POST['address-customer'];
$contact = $_POST['contact-customer'];

$sql = "SELECT * FROM products WHERE product_id = '$product_id'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

if($quantity > $row['stocks']){
    echo "<script>alert('Order exceeds available stocks! Only {$row['stocks']} left.'); window.location.href='index.php';</script>";
    exit(); 
} else {
    $stocksremain = $row['stocks'] - $quantity;

    $sql_update = "UPDATE products SET stocks='$stocksremain' WHERE product_id='$product_id'";
    $result_sql = $conn->query($sql_update);

    $sql_customer = "INSERT INTO customers (name, address, contact, product_id, order_quantity)
    VALUES ('$name','$address','$contact','$product_id','$quantity')";
    $result_customer = $conn->query($sql_customer);

    echo "<script>alert('Order placed successfully!'); window.location.href='index.php';</script>";
    exit(); 

}
}
?>
