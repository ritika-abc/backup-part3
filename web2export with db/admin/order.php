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
           $username = $_SESSION["user"];
           }

      $sql = "SELECT product.product_id, product.username, product.price, quote.order_id, quote.product_name, quote.qty, quote.name, quote.number, quote.street, quote.city, quote.state, quote.country, quote.zip, quote.product_id, quote.date FROM quote INNER JOIN product ON product.product_id = quote.product_id WHERE product.username='$username' ORDER BY order_id DESC";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?>         
                  <tr>
                  
                    <td><?php echo $row['product_name'];?></td>
                    <td><?php echo $row['price'];?>/<?php echo $row['unit'];?></td>
                    <td><?php echo $row['qty'];?></td>
                    <td><?php echo $row['street'];?>, <?php echo $row['city'];?>, <?php echo $row['state'];?>, <?php echo $row['country'];?>, <?php echo $row['zip'];?></td>
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