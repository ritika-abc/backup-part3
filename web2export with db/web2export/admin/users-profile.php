               <?php include "header.php"; ?>

               <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Supplier</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<?php
   include "connection.php";
$cat_id = "";
if(isset($_GET['username']))
$username = $_GET["username"];

      $sql = "SELECT `supp_id`, `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`, `plan`, `date_created`, `plan_started`, `date_expire`, `filename`, `eid`, `about`, `custom_field`, `about_image` FROM `supplier` WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?> 
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">
            <div class="card">
                
                     <?php
                        include "connection.php";

               
        if(isset($_GET['username']))
$username = $_GET["username"];
     if (isset($_POST['upload'])) {
     $plan =$_POST["plan"];
     $plan_started =$_POST["plan_started"];
     $date_expire =$_POST["date_expire"];
    
   
$sql = "UPDATE
    `supplier`
SET
  
    `plan` = '$plan',
    `plan_started` = '$plan_started',
    `date_expire` = '$date_expire'
WHERE
    username='$username'";
 $result =  $conn->query($sql);
echo '<script>alert("Plan updated successfully ")</script>';
echo "<script> location.href='All-Suppliers.php'; </script>";
        exit;

} 
?>
            <form class="row g-3 mb-5 py-5 p-5"  method="POST" enctype="multipart/form-data">
                <div class="col-md-12">
                  <select class="form-control"  name="plan" >
                      <option>select A Plan</option>
                       <option>Free</option>
                      <option>Prime</option>
                      <option>Prime Pro</option>
                      <option>Ultra</option>
                      <option>Ultra Pro</option>

                  </select>
                </div>
                <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Plan Started</label>
                  <input type="date" class="form-control"  name="plan_started" placeholder="Your Name">
                </div>
                <div class="col-md-12">
                <label for="exampleInputEmail1" class="form-label">Plan Expiry</label>
                  <input type="date" class="form-control"  name="date_expire" placeholder="Your Name">
                </div>
               
                
                
                
                <div class="text-center">
                  <button  type="upload"  type="upload" value="upload" name="upload" class="btn btn-primary">Submit</button>
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
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic"><?php echo $row['details'];?></p>

                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['name'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['company_name'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Plan</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['plan'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['country'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['street'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['contact'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['username'];?></div>
                  </div>

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