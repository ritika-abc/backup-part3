<?php
include "connection.php";

$cat_id = "";
if(isset($_GET['mco_id']))
$mco_id = $_GET["mco_id"];
$sql = "DELETE FROM `mco_category` WHERE  mco_id =$mco_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='Micro-Category.php'; </script>";
        exit;
?>