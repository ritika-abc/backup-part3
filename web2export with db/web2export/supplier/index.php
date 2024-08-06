
<?php include "header.php"; ?>
  <main id="main" class="main bg-danger-subtle">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card bg-danger text-white">
                <div class="card-body">
                  <h5 class="card-title text-white">Total <span class="text-white">Accessed Buyleads</span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                         <?php
         include "connection.php";

   if(isset($_SESSION["user"])){
           $username = $_SESSION["user"];
           }

      $sql = "SELECT `limit_id`, COUNT(limit_id) AS buyleads, `buy_id`, `supp_username` FROM `limit_buleads` WHERE supp_username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>  
                      <h6><?php echo $row['buyleads'];?></h6>
  <?php
                   } }
              ?> 
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card bg-success text-white">
                <div class="card-body">
                  <h5 class="card-title text-white">Total <span class="text-white">Product</span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                         <?php
         include "connection.php";

   if(isset($_SESSION["user"])){
           $username = $_SESSION["user"];
           }

      $sql = "SELECT `product_id`, `cat_id`, `sub_cat_id`, `mco_id`, `product`, `username`, `price`, `unit`, `Warranty`, `Diameter`, `Condition`, `Features`, `Supply_type`, `filename`, `date_created`, `search`, COUNT(product_id) AS productnum FROM `product` WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>  
                      <h6><?php echo $row['productnum'];?></h6>
  <?php
                   } }
              ?> 
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card bg-success text-white">
                <div class="card-body">
                  <h5 class="card-title text-white">Total <span class="text-white">Buyleads</span></h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                         <?php
         include "connection.php";

   if(isset($_SESSION["user"])){
           $username = $_SESSION["user"];
           }

      $sql = "SELECT `buy_id`, `username`, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `date_created`, `cust_name`, `cust_number`, `address`, `purpose`, `search`, `date`, `feature`, COUNT(buy_id) AS buyleads FROM `buyleads` WHERE 1";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>  
                      <h6><?php echo $row['buyleads'];?></h6>
  <?php
                   } }
              ?> 
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

<?php include "footer.php"; ?>