<?php
include "connection.php";

$cat_id = "";
if(isset($_GET['cat_id']))
$cat_id = $_GET["cat_id"];
$sql = "DELETE FROM `category` WHERE  cat_id =$cat_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='Category.php'; </script>";
        exit;
?>