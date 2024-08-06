               <?php include "header.php"; ?>
               <!-- include libraries(jQuery, bootstrap) -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


                       <main id="main" class="main bg-light">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

         <div class="card">
            <div class="card-body">
              <h5 class="card-title">No Labels / Placeholders as labels Form</h5>

              <!-- No Labels Form -->
                <?php
                  include "connection.php";
       

if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./../supplier/image/" . $filename;
    $cat_id =$_POST["cat_id"];
     $sub_cat_id =$_POST["sub_cat_id"];
     $mco_id =$_POST["mco_id"];
     $product =$_POST["product"];
     $details =$_POST["details"];
     $price =$_POST["price"];
     $unit =$_POST["unit"];
     $Warranty =$_POST["Warranty"];
     $Diameter =$_POST["Diameter"];
     $Condition =$_POST["Condition"];
     $Supply_type =$_POST["Supply_type"];
        $username =$_POST["username"];

$sql = "INSERT INTO `product`(`cat_id`, `sub_cat_id`, `mco_id`, `product`, `details`, `username`, `price`, `unit`, `Warranty`, `Diameter`, `Condition`, `Supply_type`, `filename`, `search`) VALUES ('$cat_id','$sub_cat_id','$mco_id','$product','$details', '$username', '$price','$unit','$Warranty','$Diameter','$Condition','$Supply_type','$filename','product')";

mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> New Category Created Successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
} 
?>
              <form class="row g-3"  method="POST"  enctype="multipart/form-data">
                <div class="col-md-8">
                  <input type="text" class="form-control" placeholder="Product Name" name="product">
                </div>
                
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Supplier username" name="username">
                </div>
                
                <div class="col-md-4">
                  <select id="country-dropdown"  class="form-select form-control" name="cat_id">
                    <option >Select Category</option>
                    <?php
                             require_once "connection.php";
                              $result = mysqli_query($conn,"SELECT * FROM category");
                                 while($row = mysqli_fetch_array($result)) {
                             ?>
                         <option value="<?php echo $row['cat_id'];?>"><?php echo $row["category"];?></option>
                         <?php
                         }
                       ?>
                  </select>
                </div>
          
                <div class="col-md-4">
                  <select id="state-dropdown" class="form-select form-control" name="sub_cat_id">
                  </select>
                </div>
               
               <div class="col-md-4">
                  <select  id="city-dropdown" class="form-select form-control" name="mco_id">
                     </select>
                </div>
                
                <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Price" name="price">
                </div>
                
                 <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Unit" name="unit">
                </div>
                
                <div class="col-md-6">
                    <input class="form-control" type="file" id="formFile"  name="uploadfile">
                </div>
                
                 <div class="col-md-6">
                     <select id="inputState" class="form-select form-control"  name="Warranty">
                    <option selected>Select Warranty</option>
                    <option>1 Year</option>
                     <option>2 Year</option>
                      <option>3 Year</option>
                       <option>4 Year</option>
                        <option>5 Year</option>
                  </select>
                </div>
                
                 <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="Product Size"  name="Diameter">
                </div>
                
                 <div class="col-md-6">
                    <select id="inputState" class="form-select form-control"  name="Condition">
                    <option >Product Condition</option>
                    <option>New</option>
                     <option>Used</option>
                  </select>
                </div>
                
                 <div class="col-md-6">
                   <select id="inputState" class="form-select form-control"  name="Supply_type">
                    <option >Supply Type</option>
                    <option>Manufacture</option>
                     <option>Supplier</option>
                  </select>
                </div>
                
                
                <div class="col-md-12">
                     <textarea class="form-control" placeholder="Details" name="details" id="floatingTextarea" style="height: 100px;"></textarea>
                </div>
                 
             
                
                <div class="text-center">
                  <button  type="upload" value="upload" name="upload"  class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
  </main><!-- End #main -->

 <script>
$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var cat_id = this.value;
$.ajax({
url: "subcategory-by-category.php",
type: "POST",
data: {
cat_id: cat_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
$('#city-dropdown').html('<option value="">Select Sub Category First</option>'); 
}
});
});    
$('#state-dropdown').on('change', function() {
var sub_cat_id = this.value;
$.ajax({
url: "micro_category-by-subcategory.php",
type: "POST",
data: {
sub_cat_id: sub_cat_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
}
});
});
});
</script>
               <?php include "footer.php"; ?>