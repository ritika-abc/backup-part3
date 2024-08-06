               <?php include "header.php"; ?>
            <main id="main" class="main bg-light">

    <div class="pagetitle">
      <h1>Our Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    <th>Product Name  </th>
                    <th>Price</th>
                    <th>Condition</th>
                    <th>Size</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
         include "connection.php";
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}
      $sql = "SELECT `product_id`, `cat_id`, `sub_cat_id`, `mco_id`, `product`, `username`, `price`, `unit`, `Warranty`, `Diameter`, `Condition`, `Features`, `Supply_type`, `filename`, `date_created`, `search` FROM `product`  WHERE username='$username'";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?>         
                  <tr>
                     <td class="border px-4 py-2" style="width:50px;"><img style="width: 50px; margin-left:5px; height:50px; " src="image/<?php echo $row['filename'];?>" alt="<?php echo $row['filename'];?>">
                   
                     </td>
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['price'];?>/<?php echo $row['unit'];?></td>
                    <td><?php echo $row['Condition'];?></td>
                    <td><?php echo $row['Diameter'];?></td>
                    <td>
                    <a href="delete.php?delete&product_id=<?php echo $row['product_id'];?>">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                     <a href="edit_product.php?edit&product_id=<?php echo $row['product_id'];?>">
                        <button type="button" class="btn btn-primary">Edit</button>
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