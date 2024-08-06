<?php
include "connection.php";

$sub_cat_id = "";
if(isset($_GET['sub_cat_id']))
$sub_cat_id = $_GET["sub_cat_id"];
$sql = "DELETE FROM `sub_category` WHERE  sub_cat_id =$sub_cat_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='Sub-Category.php'; </script>";
        exit;
?>