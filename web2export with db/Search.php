     <?php include "include/header.php"; ?>
          <main class="main ">
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
           <div class="container">
                	<div class="row">
                		<div class="col-lg-9">

                            <div class="products mb-3">
                                
                                 <?php
 if(isset($_GET['search']))
$search = $_GET["search"];
$product = $_GET["product"];

          include "connection.php";
      $sql = "SELECT
    product.product_id,
    product.cat_id,
    product.sub_cat_id,
    product.mco_id,
    product.product,
    product.username,
    product.price,
    product.unit,
    product.Warranty,
    product.Diameter,
    product.Condition,
    product.Features,
    product.Supply_type,
    product.filename,
    product.date_created,
    product.search,
    mco_category.mco_id,
    mco_category.sub_cat_id,
    mco_category.cat_id,
    sub_category.sub_cat_id,
    sub_category.cat_id,
    sub_category.sub_category,
    category.cat_id,
    category.category,
    supplier.username,
    supplier.company_name,
    supplier.city,
    supplier.state,
    supplier.country,
    supplier.zip,
    supplier.street,
    mco_category.mco_category,
    mco_category.filename AS mco
FROM
((((
    product
INNER JOIN mco_category ON mco_category.mco_id = product.mco_id)
INNER JOIN sub_category ON sub_category.sub_cat_id = product.sub_cat_id)
INNER JOIN category ON category.cat_id=product.cat_id)
INNER JOIN supplier ON supplier.username=product.username)
 WHERE  product.search= '$search' AND product.product LIKE '$product'";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>   
                                <div class="product product-list">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <figure class="product-media">
                                                <span class="product-label label-new"><?php echo $row['Supply_type'];?></span>
                                                <a href="product.html">
                                                    <img src="supplier/image/<?php echo $row['filename'];?>" alt="Product image" class="product-image">
                                                </a>
                                            </figure><!-- End .product-media -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        <div class="col-6 col-lg-3 order-lg-last">
                                            <div class="product-list-action">
                                                <div class="product-price">
                                                     <a href="supplier.php?data&username=<?php echo $row['username'];?>"> <?php echo $row['company_name'];?></a>
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( 2 Reviews )</span>
                                                </div><!-- End .rating-container -->

                                                <div class="product-action">
                                                    <a href="catalogue.php" class="btn-product" ><span>Contact</span></a>
                                                    <a  href="supplier_contact.php" class="btn-product btn-compare" ><span>Catalogue</span></a>
                                                </div><!-- End .product-action -->
                                               
                                                <form method="POST" action="order.php">
                                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>" >
                                                    <input type="number" name="qty" style="width:200px;" placeholder="Quantity" required>
                                                    <button type="submit" class="btn btn-primary text-center" style="width:200px;" name="submit"> Send Requirement</button>
                                                </form>

                                            </div><!-- End .product-list-action -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->

                                        <div class="col-lg-6">
                                            <div class="product-body product-action-inner">
                                                <a   class="btn-product btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <div class="product-cat">
                                                    <a  ><?php echo $row['category'];?></a> /  <a  ><?php echo $row['sub_category'];?></a> /  <a  ><?php echo $row['mco_category'];?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a  ><?php echo $row['product'];?></a></h3><!-- End .product-title -->

                                                  <div class="product-content">
                                                    <p><?php echo $row['Features'];?></p>
                                                    <p>Price: <?php echo $row['price'];?>/<?php echo $row['unit'];?></p>
                                    <p>Warranty: <?php echo $row['Warranty'];?></p>
                                     <p>Supply: <?php echo $row['Supply_type'];?></p>
                                                </div><!-- End .product-content -->
                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .product -->
  <?php
                } }
          ?> 
                            </div><!-- End .products -->

                		</div><!-- End .col-lg-9 -->
                			<aside class="col-lg-3 order-lg-first bg-white border">
                		    <table>
    <?php
          include "connection.php";
          
           if(isset($_GET['search']))
$search = $_GET["search"];
$product = $_GET["product"];
      $sql = "SELECT `product_id`, COUNT(product_id) AS pro, `cat_id`, `sub_cat_id`, `mco_id`, `product`, `username`, `price`, `unit`, `Warranty`, `Diameter`, `Condition`, `Features`, `Supply_type`, `filename`, `date_created`, `search` FROM `product` WHERE product.search='$search' GROUP BY product ORDER BY pro DESC";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>   
            <a href="Search.php?search=product&product=<?php echo $row['product'];?>"><p class="line"><?php echo $row['product'];?>  (<?php echo $row['pro'];?> Products)</p></a>	    
          <?php
                } }
          ?> 
                </table>
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                	 <div class="row">
                		<div class="col-lg-9">

                            <div class="products mb-3">
                                
                                 <?php
 if(isset($_GET['search']))
$search = $_GET["search"];
$product = $_GET["product"];

          include "connection.php";
      $sql = "SELECT `buy_id`, `username`, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `date_created`, `cust_name`, `cust_number`, `address`, `purpose`, `search`, `date`, `feature` FROM `buyleads` WHERE search= '$search' AND product LIKE '$product'";
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
                                      <a href="category.php" class="btn py-5 btn-primary ">
                                        <span>Contact Buyer</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>

                                </div><!-- End .product -->
  <?php
                } }
          ?> 
                            </div><!-- End .products -->

                		</div><!-- End .col-lg-9 -->
                			<aside class="col-lg-3 order-lg-first bg-white border">
                		    <table>
    <?php
          include "connection.php";
          
           if(isset($_GET['search']))
$search = $_GET["search"];
$product = $_GET["product"];
      $sql = "SELECT `buy_id`, `username`, COUNT(product) AS pro, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `date_created`, `cust_name`, `cust_number`, `address`, `purpose`, `search`, `date`, `feature` FROM `buyleads` WHERE search= '$search' GROUP BY product order by pro DESC ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>   
            <a href="Search.php?search=Buylead&product=<?php echo $row['product'];?>"><p class="line"><?php echo $row['product'];?> (<?php echo $row['pro'];?> Buyleads)</p></a>	    
          <?php
                } }
          ?>     </table>
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->

           </div>
          </main>
     <?php include "include/footer.php"; ?>
