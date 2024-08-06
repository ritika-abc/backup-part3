<?php
include "connection.php";

$buy_id = "";
if(isset($_GET['buy_id']))
$buy_id = $_GET["buy_id"];
$sql = "DELETE FROM `buyleads` WHERE  buy_id =$buy_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='All-Buyleads.php'; </script>";
        exit;
?>