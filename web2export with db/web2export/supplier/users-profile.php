               <?php include "header.php"; ?>

               <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Profile</li>
          <li class="breadcrumb-item active">Edit Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    
    
                  <?php
                  include "connection.php";
       
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}
if (isset($_POST['upload'])) {
  
     $name =$_POST["name"];
     $company_name =$_POST["company_name"];
     $street =$_POST["street"];
     $contact =$_POST["contact"];

$sql = "UPDATE
    `supplier`
SET
    `name` = '$name',
    `company_name` = '$company_name',
    `contact` = '$contact',
    `street` = '$street'
WHERE
    username='$username'";

mysqli_query($conn, $sql);


} 
?>


<?php
   include "connection.php";
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}
      $sql = "SELECT * FROM `supplier`  WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?> 
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
            <div class="card">
                
                    
            <form class="row g-3 mb-5 py-5 p-5"  method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <input type="text" class="form-control"  name="plan" Value="<?php echo $row['plan'];?>" readonly>
                </div>
                <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Plan Started</label>
                  <input type="date" class="form-control"  name="plan_started" Value="<?php echo $row['plan_started'];?>" readonly>
                </div>
                <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Plan Expiry</label>
                  <input type="date" class="form-control"  name="date_expire"  Value="<?php echo $row['date_expire'];?>" readonly>
                </div>
               
                
              </form><!-- End No Labels Form -->

            </div>


        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
           <form class="row g-3 mb-5 py-5 p-5"  method="POST" >
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8">
                        <input type="text" class="form-control" name="name"  value="<?php echo $row['name'];?>"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-4 label"> <input type="text" name="company_name"  class="form-control"  value="<?php echo $row['company_name'];?>"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-4 label">  <input type="text" name="street"  class="form-control"  value="<?php echo $row['street'];?>"></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-4 label">  <input type="text" name="contact"  class="form-control"  value="<?php echo $row['contact'];?>"></div>
                  </div>

                  
                    <div class="text-center">
                  <button  type="upload"  type="upload" value="upload" name="upload" class="btn btn-primary">Submit</button>
                </div>
</form>
                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                           
                </div>

              
              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
           <?php
                   } }
              ?>      
                
  </main><!-- End #main -->
  <script>
      var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
};

  </script>
               <?php include "footer.php"; ?>