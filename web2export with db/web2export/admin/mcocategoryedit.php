      <?php
include "connection.php";
        

include "connection.php";
if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
$mco_id =$_POST["mco_id"];

$sql = "UPDATE
    `mco_category`
SET
  
    `filename` = '$filename'
WHERE
    mco_id='$mco_id'";

mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3>  Category updates Successfully!</h3>";
		header("Location: Micro-Category.php");

	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
} 
?>