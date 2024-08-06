
<?php 
include "include/header.php"; ?>
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
        			<h1 class="page-title">Shop</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a  >Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">products</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">

                            <div class="products mb-3">
                                
                                 <?php
 if(isset($_GET['mco_id']))
$mco_id = $_GET["mco_id"];
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
 WHERE  product.mco_id= '$mco_id'";
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
                                                    <a href="catalogue.php" class="btn-product btn-quickview" title="Quick view"><span>Contact</span></a>
                                                    <a  href="supplier_contact.php" class="btn-product btn-compare" title="Compare"><span>Catalogue</span></a>
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
      $sql = "SELECT product.product_id, product.cat_id, product.sub_cat_id, product.mco_id, product.product, product.username, product.price, product.unit, product.Warranty, product.Diameter, product.Condition, product.Features, product.Supply_type, product.filename, product.date_created, product.search, mco_category.mco_id, COUNT(product.product_id) AS count, mco_category.mco_category, mco_category.filename AS mco FROM product INNER JOIN mco_category ON mco_category.mco_id = product.mco_id GROUP BY product.mco_id";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>   
            <a href="product.php?data&mco_id=<?php echo $row['mco_id'];?>"><p class="line"><?php echo $row['mco_category'];?>  (<?php echo $row['count'];?> Products)</p></a>	    
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
