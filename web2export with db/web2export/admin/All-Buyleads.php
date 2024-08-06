               <?php include "header.php"; ?>
                       <main id="main" class="main bg-danger-subtle">

    <div class="pagetitle">
      <h1>All Buyleads</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Buyleads</li>
          <li class="breadcrumb-item active">All Buyleads</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             
              <!-- Table with stripped rows -->
              <table class="table datatable bg-primary">
                <thead class="bg-primary text-white">
                  <tr class="bg-primary text-white">
                    <th class="bg-primary text-white">Name </th>
                    <th class="bg-primary text-white">Requirement</th>
                    <th class="bg-primary text-white">Quantity</th>
                    <th class="bg-primary text-white">Purpose</th>
                    <th class="bg-primary text-white">Address</th>
                  </tr>
                </thead>
                <tbody >
                     <?php
         include "connection.php";

   if(isset($_SESSION["user"])){
           $username = $_SESSION["user"];
           }

      $sql = "SELECT `buy_id`, `username`, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `date_created`, `cust_name`, `cust_number`, `address`, `purpose`, `search` FROM `buyleads` WHERE 1 ORDER BY buy_id DESC ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?>         
                  <tr>
                    <td><?php echo $row['cust_name'];?></td>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['qty'];?>/<?php echo $row['unit'];?></td>
                    <td><?php echo $row['purpose'];?></td>
                    <td><?php echo $row['state'];?>, <?php echo $row['country'];?></td>
                    <td>
                     <a href="delete1_buylead.php?delete&buy_id=<?php echo $row['buy_id'];?>">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a></td>
                  </tr>
                   <?php
                   } }
              ?>      
                
                 
                
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

               <?php include "footer.php"; ?>