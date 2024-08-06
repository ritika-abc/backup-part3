<?php
include "connection.php";

// Check if product ID is provided in the URL
if(isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    
    // Fetch the product data based on the product ID
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    $result = $conn->query($sql);
    
    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        // Product not found, handle error (redirect, show message, etc.)
        // For example:
        echo "Product not found!";
        exit();
    }
} else {
    // No product ID provided, handle error (redirect, show message, etc.)
    // For example:
    echo "Product ID not provided!";
    exit();
}

// Handle form submission to update product details
if(isset($_POST['submit'])) {
    // Retrieve edited form data
    $product = $_POST['product'];
    $username = $_POST['username'];
    $price = $_POST['price'];
    $unit = $_POST['unit'];
    $warranty = $_POST['warranty'];
    $diameter = $_POST['diameter'];
    $condition = $_POST['condition'];
    
    // Check if a new image file is uploaded
    if($_FILES['uploadfile']['name'] != "") {
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "./../supplier/image/" . $filename;

        // Move the uploaded image file to the destination folder
        if(move_uploaded_file($tempname, $folder)) {
            // Update the filename in the database
            $sql_update = "UPDATE product SET filename = '$filename' WHERE product_id = $product_id";
            $conn->query($sql_update);
            echo "Image updated successfully!";
        } else {
            echo "Failed to upload image!";
        }
    }
    
    // Update the other product details in the database
    $sql = "UPDATE product SET product = '$product', username = '$username', price = '$price', unit = '$unit', Warranty = '$warranty', Diameter = '$diameter', Condition = '$condition' WHERE product_id = $product_id";
    if($conn->query($sql) === TRUE) {
        echo "Product details updated successfully!";
    } else {
        echo "Error updating product: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <!-- Include your CSS and JS files -->
</head>
<body>
    <h1>Edit Product</h1>
    <form method="POST" enctype="multipart/form-data">
        <!-- Populate form fields with fetched data -->
        <!-- For example: -->
        <input type="text" name="product" value="<?php echo $row['product']; ?>">
        <input type="text" name="username" value="<?php echo $row['username']; ?>">
        <input type="text" name="price" value="<?php echo $row['price']; ?>">
        <input type="text" name="unit" value="<?php echo $row['unit']; ?>">
        <input type="text" name="warranty" value="<?php echo $row['Warranty']; ?>">
        <input type="text" name="diameter" value="<?php echo $row['Diameter']; ?>">
        <input type="text" name="condition" value="<?php echo $row['Condition']; ?>">
        <!-- Image upload field -->
        <input type="file" name="uploadfile">
        <!-- Other form fields -->
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
