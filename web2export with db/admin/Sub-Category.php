        <?php include "header.php"; ?>
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add a New Sub-category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Category</li>
          <li class="breadcrumb-item active">Sub-category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

           <div class="card">
            <div class="card-body">
              <h5 class="card-title">No Labels / Placeholders as labels Form</h5>
 <?php
include "connection.php";
        
if(isset($_SESSION["user"])){
  $username = $_SESSION["user"];
}
include "connection.php";
if (isset($_POST['submit'])) {
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/subcategory/" . $filename;
    $sub_category =$_POST["sub_category"];
    $cat_id =$_POST["cat_id"];

$sql = "INSERT IGNORE INTO `sub_category`( `cat_id`, `sub_category`, `filename`) VALUES ('$cat_id','$sub_category','$filename')";

mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
} 
?>
                                
              
              <!-- No Labels Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <input type="text" class="form-control"  name="sub_category" placeholder="Your Name">
                </div>
                <div class="col-md-12">
                 <input class="form-control" type="file" name="uploadfile" id="formFile">
                </div>
                <div class="col-md-12">
                 <select class="form-select" name="cat_id"  required>
                      <?php
                       $sql = "SELECT `cat_id`, `category`, `filename` FROM `category` WHERE 1";
                       $result = $conn->query($sql);
                       if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                      echo " Product Category: 
                     <option >" . $row["cat_id"]. " - " . $row["category"]. " </option>
                       ";
                    }
                      } else {
                    echo "0 results";
                     }
                   ?>  

         </select> 
                </div>
                <div class="text-center">
                  <button  type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">
                           <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Sub-Category</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                   <?php
      $sql = "SELECT category.cat_id, category.category, sub_category.sub_cat_id, sub_category.cat_id, sub_category.sub_category, sub_category.filename FROM sub_category INNER JOIN category ON category.cat_id=sub_category.cat_id ORDER By sub_cat_id DESC";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
          
                                      <tr>
                                        <td class="border px-4 py-2" style="width:50px;"><img style="width: 50px; margin-left:5px; height:50px; " src="image/subcategory/<?php echo $row['filename'];?>" alt="<?php echo $row['filename'];?>">
         <form method="POST" action="subcategoryedit.php"  enctype="multipart/form-data">
                  <input type="hidden"  name ="sub_cat_id" value="<?php echo $row['sub_cat_id'];?>" placeholder="Your Name">
                 <input  type="file" style="width:100px;"   name="uploadfile" id="formFile">

                  <button   type="upload" value="upload" name="upload" class="btn btn-primary">Save</button>
              </form><!-- End No Labels Form -->

                                        
                                        </td>
                                        <td class="border px-4 py-2"><?php echo $row['category'];?></td>
                                       <td class="border px-4 py-2"><?php echo $row['sub_category'];?></td>
                                        <td class="border px-4 py-2"><a href="sub_category_delete.php?type=delete&sub_cat_id=<?php echo "$row[sub_cat_id]";  ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">DELETE</a></td>
                                      </tr>
                                      <?php
                                         } }
                                      ?>
                 
                </tbody>
              </table>

        </div>
      </div>
    </section>

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

