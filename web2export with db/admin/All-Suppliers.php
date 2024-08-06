               <?php include "header.php"; ?>
            <main id="main" class="main bg-light">

    <div class="pagetitle">
      <h1>Our Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Our Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
             
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th> Product Image  </th>
                    <th>company_name</th>
                    <th>Owner</th>
                    <th>username</th>
                    <th>password</th>
                       <th>address</th>
                          <th>plan</th>
                             <th>Plan validity</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
         include "connection.php";

   if(isset($_SESSION["user"])){
           $username = $_SESSION["user"];
           }

      $sql = "SELECT `supp_id`, `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`, `plan`, `date_created`, `plan_started`, `date_expire`, `filename`, `eid`, `about`, `custom_field`, `about_image` FROM `supplier` WHERE 1";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
 ?>         
                  <tr>
                     <td class="border px-4 py-2" style="width:50px;"><img style="width: 50px; margin-left:5px; height:50px; " src="../supplier/image/<?php echo $row['filename'];?>" alt="<?php echo $row['filename'];?>">
                        <form method="POST" action="suppimgedit.php"  enctype="multipart/form-data">
                  <input type="hidden"  name ="supp_id" value="<?php echo $row['supp_id'];?>" placeholder="Your Name">
                 <input  type="file" style="width:100px;"   name="uploadfile" id="formFile">

                  <button   type="upload" value="upload" name="upload" class="btn btn-primary">Save</button>
              </form><!-- End No Labels Form -->

                     
                     </td>
                    <td><?php echo $row['company_name'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['password'];?></td>
                     <td><?php echo $row['street'];?>, <?php echo $row['city'];?>, <?php echo $row['state'];?>, <?php echo $row['country'];?>, <?php echo $row['zip'];?></td>
                     <td><?php echo $row['plan'];?></td>
                      <td><?php echo $row['plan_started'];?> to 
                                          <?php echo $row['date_expire'];?></td>

                      <td>
                     <a href="delete1_supp.php?delete&supp_id=<?php echo $row['supp_id'];?>">
                        <button type="button" class="btn btn-danger ">Delete</button>
                    </a>
                     <a href="users-profile.php?data&username=<?php echo $row['username'];?>">
                        <button type="button" class="btn btn-primary mb-5">edit</button>
                    </a>
                    </td>
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