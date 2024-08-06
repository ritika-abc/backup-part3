    <?php
                  include "connection.php";
       

if (isset($_POST['submit'])) {
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./../supplier/image/" . $filename;
    $product_id =$_POST["product_id"];
     

$sql = "UPDATE `product` SET `filename`='$filename' WHERE product_id='$product_id'";

mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> New Category Created Successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
} 
?>
   