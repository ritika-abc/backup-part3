<?php include "include/header.php"; ?>
<style>
    .border{
        border: solid #dadada 1px;
    }
     .line{
        border-bottom: solid #dadada 1px;
        height:auto;
        padding:10px;
    }
</style>
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Buyleads</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Buyleads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Buyleads</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">

                            <div class="products mb-3">
                                
                         <?php
          include "connection.php";
      $sql = "SELECT `buy_id`, `username`, COUNT(product) AS pro, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `date_created`, `cust_name`, `cust_number`, `address`, `purpose`, `search`, `date`, `feature` FROM `buyleads` WHERE 1 GROUP BY product order by pro DESC LIMIT 30";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>           
                                <div class="product product-list card">
                                    <h5 class="text-secondary">Looking for <?php echo $row['product'];?> </h5>
                                  <div class="row py-4">
                                      <div class="col-6 col-lg-3">
                   <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                   <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                   </svg> <?php echo $row['city'];?>, <?php echo $row['state'];?>, <?php echo $row['country'];?>, <?php echo $row['zip'];?></p>
                                      </div>
                                      <div class="col-6 col-lg-3">
                                          <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
</svg> <?php echo $row['date_created'];?></p>
                                      </div>
                                       </div>  
                                       <p>I am interested in buying <?php echo $row['product'];?>.</p>
                                   <div class="row">
                                      <div class="col-6 col-lg-6">
                                          <br>
                                             <p>Buyer name: <?php echo $row['cust_name'];?></p>
                                      </div>
                                      <div class="col-6 col-lg-6">
                                             <p>Quantity: <?php echo $row['qty'];?> <?php echo $row['unit'];?></p>

                                             <p>Purpose: <?php echo $row['purpose'];?></p>
                                      </div>
                                     </div> <br>
                                      <a href="category.php" class="btn  btn-primary ">
                                        <span>Contact Buyer</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>

                                </div><!-- End .product -->
 <?php
                } }
          ?>
                                
                            </div><!-- End .products -->

                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first border ">
                		    <h3>Buyleads</h3>
                		    <table>
    <?php
          include "connection.php";
      $sql = "SELECT `buy_id`, `username`, COUNT(product) AS pro, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `date_created`, `cust_name`, `cust_number`, `address`, `purpose`, `search`, `date`, `feature` FROM `buyleads` WHERE 1 GROUP BY product order by pro DESC LIMIT 30";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>   
            <a href=""><p class="line"><?php echo $row['product'];?></p></a>	    
          <?php
                } }
          ?> 
                </table>
                </aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
<?php include "include/footer.php"; ?>
