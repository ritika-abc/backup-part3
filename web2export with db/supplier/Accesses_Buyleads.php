 
              
              
              
              <?php include "header.php"; ?>
               <main id="main" class="main bg-danger-subtle">

                   <div class="pagetitle">
                       <h1>All Buyleads</h1>
                       <nav>
                           <ol class="breadcrumb">
                               <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                               <li class="breadcrumb-item">Buyleads</li>
                               <li class="breadcrumb-item active">Accessed Buyleads</li>
                           </ol>
                       </nav>
                   </div><!-- End Page Title -->
                   <?php
                    include "connection.php";

                    if (isset($_SESSION["user"])) {
                        $username = $_SESSION["user"];
                    }

                    $sql = "SELECT buyleads.buy_id,buyleads.new_email_id, buyleads.username, buyleads.product, buyleads.qty, buyleads.unit, buyleads.country, buyleads.state, buyleads.city, buyleads.zip, buyleads.zip, buyleads.cust_name, buyleads.cust_number, buyleads.purpose, buyleads.city, buyleads.state, buyleads.country, buyleads.address, buyleads.zip, buyleads.date_created, limit_buleads.limit_id, limit_buleads.buy_id, limit_buleads.supp_username, supplier.username, supplier.plan FROM (( limit_buleads INNER JOIN buyleads ON buyleads.buy_id = limit_buleads.buy_id) INNER JOIN supplier ON supplier.username=limit_buleads.supp_username) WHERE limit_buleads.supp_username='$username' AND supplier.plan='prime' LIMIT 10";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>
                           <div class="row">
                               <div class="col-lg-12 ">
                                   <div class="card p-4">
                                       <div class="card-body">
                                           <h5> Looking for <?php echo $row['product']; ?></h5>
                                           <hr>
                                           <div class="row">
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Buyer Name:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_name']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Address:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['state']; ?>, <?php echo $row['country']; ?>, <?php echo $row['zip']; ?> </div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Quantity:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['qty']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Contact:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_number']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Email:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['new_email_id']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Purpose:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['purpose']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Date Posted:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['date_created']; ?></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                   <?php
                        }
                    }
                    ?>

                   <?php
                    include "connection.php";

                    if (isset($_SESSION["user"])) {
                        $username = $_SESSION["user"];
                    }

                    $sql = "SELECT buyleads.buy_id,buyleads.new_email_id, buyleads.username, buyleads.product, buyleads.qty, buyleads.unit, buyleads.country, buyleads.state, buyleads.city, buyleads.zip, buyleads.zip, buyleads.cust_name, buyleads.cust_number, buyleads.purpose, buyleads.city, buyleads.state, buyleads.country, buyleads.address, buyleads.zip, buyleads.date_created, limit_buleads.limit_id, limit_buleads.buy_id, limit_buleads.supp_username, supplier.username, supplier.plan FROM (( limit_buleads INNER JOIN buyleads ON buyleads.buy_id = limit_buleads.buy_id) INNER JOIN supplier ON supplier.username=limit_buleads.supp_username) WHERE limit_buleads.supp_username='$username' AND supplier.plan='Prime Pro' LIMIT 30";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>
                           <div class="row">
                               <div class="col-lg-12 ">
                                   <div class="card p-4">
                                       <div class="card-body">
                                           <h5> Looking for <?php echo $row['product']; ?></h5>
                                           <hr>
                                           <div class="row">
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Buyer Name:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_name']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Address:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['state']; ?>, <?php echo $row['country']; ?>, <?php echo $row['zip']; ?> </div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Quantity:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['qty']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Contact:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_number']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Email:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['new_email_id']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Purpose:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['purpose']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Date Posted:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['date_created']; ?></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                   <?php
                        }
                    }
                    ?>


                   <?php
                    include "connection.php";

                    if (isset($_SESSION["user"])) {
                        $username = $_SESSION["user"];
                    }

                    $sql = "SELECT buyleads.buy_id,buyleads.new_email_id, buyleads.username, buyleads.product, buyleads.qty, buyleads.unit, buyleads.country, buyleads.state, buyleads.city, buyleads.zip, buyleads.zip, buyleads.cust_name, buyleads.cust_number, buyleads.purpose, buyleads.city, buyleads.state, buyleads.country, buyleads.address, buyleads.zip, buyleads.date_created, limit_buleads.limit_id, limit_buleads.buy_id, limit_buleads.supp_username, supplier.username, supplier.plan FROM (( limit_buleads INNER JOIN buyleads ON buyleads.buy_id = limit_buleads.buy_id) INNER JOIN supplier ON supplier.username=limit_buleads.supp_username) WHERE limit_buleads.supp_username='$username' AND supplier.plan='Ultra' LIMIT 60";
                    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                             
                    ?>
                           <div class="row">
                               <div class="col-lg-12 ">
                                   <div class="card p-4">
                                       <div class="card-body">
                                           <h5> Looking for <?php echo $row['product']; ?></h5>
                                           <hr>
                                           <div class="row">
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Buyer Name:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_name']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Address:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['state']; ?>, <?php echo $row['country']; ?>, <?php echo $row['zip']; ?> </div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Quantity:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['qty']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Contact:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_number']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Email:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['new_email_id'] ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Purpose:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['purpose']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Date Posted:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['date_created']; ?></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                   <?php
                        }
                    }
                    ?>




                   <?php
                    include "connection.php";

                    if (isset($_SESSION["user"])) {
                        $username = $_SESSION["user"];
                    }

                    $sql = "SELECT buyleads.buy_id,buyleads.new_email_id, buyleads.username, buyleads.product, buyleads.qty, buyleads.unit, buyleads.country, buyleads.state, buyleads.city, buyleads.zip, buyleads.zip, buyleads.cust_name, buyleads.cust_number, buyleads.purpose, buyleads.city, buyleads.state, buyleads.country, buyleads.address, buyleads.zip, buyleads.date_created, limit_buleads.limit_id, limit_buleads.buy_id, limit_buleads.supp_username, supplier.username, supplier.plan FROM (( limit_buleads INNER JOIN buyleads ON buyleads.buy_id = limit_buleads.buy_id) INNER JOIN supplier ON supplier.username=limit_buleads.supp_username) WHERE limit_buleads.supp_username='$username' AND supplier.plan='Ultra Pro' LIMIT 90";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                    ?>
                           <div class="row">
                               <div class="col-lg-12 ">
                                   <div class="card p-4">
                                       <div class="card-body">
                                           <h5> Looking for <?php echo $row['product']; ?></h5>
                                           <hr>
                                           <div class="row">
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Buyer Name:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_name']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Address:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['address']; ?>, <?php echo $row['city']; ?>, <?php echo $row['state']; ?>, <?php echo $row['country']; ?>, <?php echo $row['zip']; ?> </div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Quantity:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['qty']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Contact:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['cust_number']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Email:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['new_email_id']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Purpose:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['purpose']; ?></div>
                                                   </div>
                                               </div>
                                               <div class="col-lg-6 p-2">
                                                   <div class="row">
                                                       <div class="col-lg-6 p-2">Date Posted:</div>
                                                       <div class="col-lg-6 p-2"><?php echo $row['date_created']; ?></div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                   <?php
                        }
                    }
                    ?>



               </main>
               <?php include "footer.php"; ?>