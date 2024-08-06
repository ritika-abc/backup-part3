<!DOCTYPE html>
<html lang="en">


<!-- molla/index-1.html  22 Nov 2019 09:55:06 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web 2 Export</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="assets/css/demos/demo-4.css">
</head>

<body>
     <style>
     .col-6{
         margin:0px;
         padding:5px;
     }
 </style>
    <div class="page-wrapper">
          <?php
          include "connection.php";
          
           if(isset($_GET['username']))
$username = $_GET["username"];
      $sql = "SELECT `supp_id`, `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`, `plan`, `date_created`, `plan_started`, `date_expire`, `filename`, `eid`, `about`, `custom_field`, `about_image` FROM `supplier` WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?> 
        <header class="header header-2 header-intro-clearance">
            <div class="header-middle bg-light">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.html" class="logo">
                            <img src="supplier/image/<?php echo $row['filename'];?>" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->
                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li><a href="supplier.php?username=<?php echo $_GET["username"];?>">Home</a></li>
                                     <?php
          include "connection.php";
          
          if(isset($_GET['username']))
$username = $_GET["username"];
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
    mco_category.filename as mcoimg,
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
 WHERE supplier.username='$username'  GROUP BY product.mco_id LIMIT 4";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>  
                                        <li> <a href="category.php?search=product&mco_id=<?php echo $row['mco_id'];?>&username=<?php echo $_GET["username"];?>"><?php echo $row['product'];?> </a></li>
                                        
                             <?php
                } }
          ?>            
                                        <li><a href="catalogue?username=<?php echo $_GET["username"];?>">Catalogue</a></li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->


                </div><!-- End .container -->
            </div><!-- End .header-middle -->

        </header><!-- End .header -->
<?php
                } }
          ?> 
        <main class="main">
            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

            <div class="mb-3 mb-lg-5"></div><!-- End .mb-3 mb-lg-5 -->

                      <div class="container for-you">

                <div class="products">
                    <div class="row justify-content-center">

           <?php
         include "connection.php";


 if(isset($_GET['username']))
$username = $_GET["username"];
      $sql = "SELECT `product_id`, `cat_id`, `sub_cat_id`, `mco_id`, `product`, `username`, `price`, `unit`, `Warranty`, `Diameter`, `Condition`, `Features`, `Supply_type`, `filename`, `date_created`, `search` FROM `product` WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
       

 ?>      

              <div class="col-6 col-md-4 col-lg-2">
                            <div class="product product-2 border">
                                <figure class="product-media">
                                    <a href="">
                                        <img src="supplier/image/<?php echo $row['filename'];?>" style="height:200px;" alt="Product image" class="product-image">
                                    </a>

                                  
                                </figure><!-- End .product-media -->

                                <div class="">
                                    <div class="product-cat">
                                        <!--<a href="#"><?php echo $row['product'];?></a>-->
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href=""><?php echo $row['product'];?></a></h3><!-- End .product-title -->
                                    <p>Warranty: <?php echo $row['Warranty'];?></p>
                                     <p>Supply: <?php echo $row['Supply_type'];?></p>
                                     <p>Minimum order:100 <?php echo $row['unit'];?></p>

                                               <form method="POST" action="order.php">
                                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>" >
                                                    <input type="hidden" name="qty"  value="100" >
                                                    <button type="submit" class=" btn-primary text-center" name="submit"> Send Requirement</button>
                                                </form>

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
  <?php
                   } }
              ?>   
                        
                    </div><!-- End .row -->
                </div><!-- End .products -->
            </div><!-- End .container -->


        </main><!-- End .main -->

        <footer class="footer footer-2">
            <div class="icon-boxes-container">
            </div><!-- End .icon-boxes-container -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2023 Web 2 Export. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<ul class="footer-menu">
	        			<li><a href="#">Terms Of Use</a></li>
	        			<li><a href="#">Privacy Policy</a></li>
	        		</ul><!-- End .footer-menu -->

	        		<div class="social-icons social-icons-color">
	        			<span class="social-label">Social Media</span>
    					<a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
    					<a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
    					<a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
    					<a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
    					<a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
    				</div><!-- End .soial-icons -->
	        	</div><!-- End .container -->
	        </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search product ..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>

            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                            <ul class="mobile-menu">
                                <li><a href="supplier.php?username=<?php echo $_GET["username"];?>">Home</a></li>
                                     <?php
          include "connection.php";
          
          if(isset($_GET['username']))
$username = $_GET["username"];
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
    mco_category.filename as mcoimg,
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
 WHERE supplier.username='$username'  GROUP BY product.mco_id LIMIT 4";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {

 ?>  
                        <li> <a href="category.php?search=product&mco_id=<?php echo $row['mco_id'];?>&username=<?php echo $_GET["username"];?>"><?php echo $row['product'];?> </a></li>
                                        
                             <?php
                } }
          ?>            
                                        <li><a href="catalogue.php?username=<?php echo $_GET["username"];?>">Catalogue</a></li>
                            </ul><!-- End .menu -->
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-2.js"></script>
</body>


<!-- molla/index-1.html  22 Nov 2019 09:55:32 GMT -->
</html>