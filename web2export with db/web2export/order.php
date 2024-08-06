<?php
 include "connection.php";

session_start();
 
// To check if session is started.
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}
else
{
    header("Location:pages-login.php");
}
?>

            <?php
            echo "$username";
     if (isset($_POST['submit'])) {
     $product_id =$_POST["product_id"];
     $qty =$_POST["qty"];


$sql = "INSERT INTO `requirement`( `product_id`, `order_qty`, `cutomer_username`) VALUES ('$product_id','$qty','$username')";
 $result =  $conn->query($sql);
echo '<script>alert("Your Requirement sent successfully ")</script>';
echo "<script> location.href='index.php'; </script>";
        exit;

} 
?>