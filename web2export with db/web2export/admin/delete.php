<?php
include "connection.php";

$product_id = "";
if(isset($_GET['product_id']))
$product_id = $_GET["product_id"];
$sql = "DELETE FROM `product` WHERE  product_id =$product_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='All-Products.php'; </script>";
        exit;
?>

