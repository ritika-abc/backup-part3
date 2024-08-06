        <?php include "header.php"; ?>
 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Create a New Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Category</li>
          <li class="breadcrumb-item active">Category</li>
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
        

include "connection.php";
if (isset($_POST['upload'])) {
    $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;
$category =$_POST["category"];

$sql = "INSERT IGNORE INTO `category`(`category`, `filename`) VALUES ('$category','$filename')";

mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> New Category Created Successfully!</h3>";
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
} 
?>
              <form class="row g-3" method="POST"  enctype="multipart/form-data">
                <div class="col-md-12">
                  <input type="text" class="form-control" name ="category" placeholder="Your Name">
                </div>
                <div class="col-md-12">
                 <input class="form-control" type="file"   name="uploadfile" id="formFile">
                </div>
               
                <div class="text-center">
                  <button   type="upload" value="upload" name="upload" class="btn btn-primary">Submit</button>
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
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                       <?php
      $sql = "SELECT `cat_id`, `category`, `filename` FROM `category`   ORDER By cat_id DESC";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
                  <tr>
                                        <td class="border px-4 py-2" style="width:50px;"><img style="width: 50px; margin-left:5px; height:50px; " src="image/<?php echo $row['filename'];?>" alt="<?php echo $row['filename'];?>">
                                        
                                             <form method="POST" action="categoryedit.php"  enctype="multipart/form-data">
                  <input type="hidden"  name ="cat_id" value="<?php echo $row['cat_id'];?>" placeholder="Your Name">
                 <input  type="file" style="width:100px;"   name="uploadfile" id="formFile">

                  <button   type="upload" value="upload" name="upload" class="btn btn-primary">Save</button>
              </form><!-- End No Labels Form -->

                                        
                                        </td>
                                        <td class="border px-4 py-2"><?php echo $row['category'];?></td>
                                        <td class="border px-4 py-2"><a href="categorydelete.php?type=delete&cat_id=<?php echo "$row[cat_id]";  ?>" class="bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500">DELETE</a>

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

        <?php include "footer.php"; ?>

