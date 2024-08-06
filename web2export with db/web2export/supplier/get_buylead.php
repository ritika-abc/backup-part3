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
     $buy_id =$_POST["buy_id"];

$sql = "INSERT INTO `limit_buleads`(`buy_id`, `supp_username`) VALUES ('$buy_id','$username')";
 $result =  $conn->query($sql);
echo '<script>alert("Your Requirement sent successfully ")</script>';
echo "<script> location.href='Accesses_Buyleads.php'; </script>";
        exit;

} 
?>