               <?php include "header.php"; ?>
            <main id="main" class="main bg-light">

    <div class="pagetitle">
      <h1>Our Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Enquiry</li>
          <li class="breadcrumb-item active"> Products Enquiry</li>
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
                    <th>Product Name  </th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Address</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
         include "connection.php";
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}

      $sql = "SELECT product.product_id, product.product, product.price, product.unit, product.filename, product.username, requirement.order_id, requirement.product_id, requirement.order_qty, requirement.cutomer_username, customer.cus_id, customer.name, customer.number, customer.username, customer.address, customer.city, customer.state, customer.country, customer.zip FROM (( requirement INNER JOIN product ON product.product_id=requirement.product_id) INNER JOIN customer ON customer.username=requirement.cutomer_username) WHERE 1 ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?>         
                  <tr>
                   <td class="border px-4 py-2" style="width:50px;"><img style="width: 50px; margin-left:5px; height:50px; " src="../supplier/image/<?php echo $row['filename'];?>" alt="<?php echo $row['filename'];?>">
                    <td><?php echo $row['product'];?></td>
                    <td><?php echo $row['price'];?>/<?php echo $row['unit'];?></td>
                    <td><?php echo $row['order_qty'];?></td>
                    <td><?php echo $row['street'];?>, <?php echo $row['city'];?>, <?php echo $row['state'];?>, <?php echo $row['country'];?>, <?php echo $row['zip'];?></td>
                     <td><?php echo $row['username'];?></td>
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