<?php
include "connection.php";

$supp_id = "";
if(isset($_GET['supp_id']))
$supp_id = $_GET["supp_id"];
$sql = "DELETE FROM `supplier` WHERE  supp_id =$supp_id";
$result =  $conn->query($sql);
echo '<script>alert("Record Deleted ")</script>';
echo "<script> location.href='All-Products.php'; </script>";
        exit;
?>