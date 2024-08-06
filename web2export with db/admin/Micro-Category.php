        <?php include "header.php"; ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add a New Micro-Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Category</li>
          <li class="breadcrumb-item active">Micro-Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-6">

           <div class="card">
            <div class="card-body">
              <h5 class="card-title">No Labels / Placeholders as labels Form</h5>

              <!-- No Labels Form -->
                                          
   <?php
include "connection.php";
 
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image Updated successfully!</h3>";
	} else {
		if (isset($_POST['post'])) {
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
    $sub_cat_id =$_POST["sub_cat_id"];
    $mco_category =$_POST["mco_category"];
    $cat_id =$_POST["cat_id"];


$sql = "INSERT IGNORE INTO `mco_category`(`cat_id`, `sub_cat_id`, `mco_category`, `filename`) VALUES ('$cat_id','$sub_cat_id','$mco_category','$filename')";

mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
} 
	
} 
?>
            
              <form class="row g-3"  method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <input type="text" class="form-control"  name="mco_category" placeholder="Your Name">
                </div>
                <div class="col-md-12">
                 <input class="form-control" type="file" name="uploadfile" id="formFile">
                </div>
                <div class="col-md-12">
                 <select class="form-select" id="country-dropdown" name="cat_id">
                    <option value="">Select category</option>
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
                
                <div class="col-md-12">
                    <select  class="form-select"  name="sub_cat_id"  id="state-dropdown"></select>
                </div>
                
                <div class="text-center">
                  <button   type="post" value="post" name="post" class="btn btn-primary">Submit</button>
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
                    <th scope="col">Sub-Category</th>
                    <th scope="col">Micro Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
              <?php
      $sql = "SELECT sub_category.sub_cat_id, sub_category.sub_category, mco_category.mco_id, mco_category.sub_cat_id, mco_category.mco_category, mco_category.filename FROM mco_category INNER JOIN sub_category ON sub_category.sub_cat_id=mco_category.sub_cat_id ORDER By mco_id DESC";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
          
                                      <tr>
                                        <td class="border px-4 py-2" style="width:50px;"><img style="width: 50px; margin-left:5px; height:50px; " src="image/<?php echo $row['filename'];?>" alt="<?php echo $row['filename'];?>">
                                        
                                             <form method="POST" action="mcocategoryedit.php"  enctype="multipart/form-data">
                  <input type="hidden"  name ="mco_id" value="<?php echo $row['mco_id'];?>" placeholder="Your Name">
                 <input  type="file" style="width:100px;"   name="uploadfile" id="formFile">

                  <button   type="upload" value="upload" name="upload" class="btn btn-primary">Save</button>
              </form><!-- End No Labels Form -->

                                        
                                        </td>
                                        <td class="border px-4 py-2"><?php echo $row['sub_category'];?></td>
                                       <td class="border px-4 py-2"><?php echo $row['mco_category'];?></td>
                                        <td class="border px-4 py-2"><a href="mco_category_delete.php?type=delete&mco_id=<?php echo "$row[mco_id]";  ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">DELETE</a><br><br>
                                        <a href="edit_mco.php?type=data&mco_id=<?php echo "$row[mco_id]";?>#category" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">EDIT</a>
                                        </td>
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

