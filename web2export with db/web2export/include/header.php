
<!DOCTYPE html>
<html lang="en">


<!-- molla/index-4.php  22 Nov 2019 09:53:08 GMT -->
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
    <link rel="manifest" href="assets/images/icons/site.php">
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
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-4">
            <div class="header-top bg-secondary">
                <div class="container">
                    <div class="header-left ">
                        <a href="tel:#" class="text-white"> Call: +91 78275 14754</a>
                    </div><!-- End .header-left -->

                 <div class="header-center bg-danger">
                                  <a href="post_buylead.php" class=" hidedesktop hidedesktop btn-danger p-2  text-white">
                                        <span>POST YOUR   REQUIREMENT</span>
                                    </a></div>

                       <div class="header-right hidedesktop">
                           <a href="#signin-modal" class="text-white" data-toggle="modal">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle text-white" viewBox="0 0 16 16">
                             <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                              <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg>
                           </a>
                       </div>
                    <div class="header-right hidemobile">
                                     
                        <ul class="top-menu ">
                            <li>
                                <a class=" text-white" href="#">Link</a>
                                <ul>
                                    <li>
                                        <div class="text-white ">
                                            <a href="#"><i class="fa fa-envelope-o text-white" aria-hidden="true"></i>info@web2export.com</a>
                                           
                                        </div>
                                    </li>
                                  
                                    <li><a href="#signin-modal" class="text-white" data-toggle="modal">Sign in / Sign up</a></li>
                                      <li  class="bg-danger p-2">
                                        <div class="">
                                            <a class="text-white" href="supplier">Login Supplier</a>
                                          
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->

                </div><!-- End .container -->
            </div><!-- End .header-top -->
          <form  action="Search.php" class="mobile-search hidedesktop">
                <label for="mobile-search" class="sr-only">Search</label>
                  <select style="height:40px;" name="search" class="form-control bg-light border text-dark" required >
                     <option > Buylead</option>
                     <option > product</option>
                </select>
                <input type="search" style="height:40px;"  class="form-control bg-white border text-dark" name="product" id="mobile-search" placeholder="Search in..." required>
                <button style="height:40px;"  class="btn btn-primary border" type="submit"><i class="icon-search"></i></button>
            </form>
            <div class="header-middle border-bottom bg-light" style="height:100px; margin-top:0px;">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.php" class="logo">
                            <img src="image/logo.png" alt="Molla Logo" style="height:60px;">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center ">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="Search.php" >
                                <div class="header-search-wrapper search-wrapper-wide bg-light">
                                        <select name="search" class="form-control bg-light text-center" required  style="width:200px;">
                                        <option > Buylead</option>
                                        <option > product</option>
                                    </select>
                                    <input type="search" class="form-control border-start" name="product" id="q" placeholder="Search product ..." required>
                                     <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary bg-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

<style>
    @media only screen and (min-width: 960px) {
.hidedesktop{display:none;}
}

  @media only screen and (max-width: 600px) {
.hidemobile{display:none;}
}
</style>
                    <div class="header-right ">
                        
                   
                        <a class="hidedesktop text-center" href="advertise.php">
                        <i class="la la-lightbulb-o"></i><h6 class="text-dark">Advertise<br> with us</h6>
                        </a>             
                                    
                       <a href="post_buylead.php" class="btn hidemobile btn-primary btn-round ">
                                        <span>POST YOUR BUY REQUIREMENT</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header bg-secondary">
                <div class="container">
                        <div class="header-left ">
                            <div class="dropdown category-dropdown ">
                                <a href="#" class="dropdown-toggle bg-primary text-white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                    Browse Categories
                                </a>

                                <div class="dropdown-menu">
                                    <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        
   <?php
                                         include "connection.php";
      $sql = "SELECT `cat_id`, `category`, `filename` FROM `category` WHERE 1 LIMIT 12";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
$cat_id=$row['cat_id'];
 ?> 
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#"><?php echo $row['category'];?></a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-12">
                                                        <div class="menu-col">
                                                            <div class="row">
<?php
      include "connection.php";
      $sql2 = "SELECT `sub_cat_id`, `cat_id`, `sub_category`, `filename` FROM `sub_category` WHERE cat_id='$cat_id' LIMIT 3";
  $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        // output data of each row
    while($row2 = $result2->fetch_assoc()) {
$sub_cat_id=$row2['sub_cat_id'];
 ?>  
                                                                <div class="col-md-4">
                                                                    <div class="menu-title"><?php echo $row2['sub_category'];?></div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <?php
                  $sql3 = "SELECT `mco_id`, `cat_id`, `sub_cat_id`, `mco_category`, `filename`, `search` FROM `mco_category` WHERE sub_cat_id='$sub_cat_id' LIMIT 3";
                       $result3 = $conn->query($sql3);
                         if ($result3->num_rows > 0) {
                           // output data of each row
                            while($row3 = $result3->fetch_assoc()) {
                          $cat_id=$row3['cat_id'];
                       ?>
                                <li><a href="product.php?data&mco_id=<?php echo $row3['mco_id'];?>"><?php echo $row3['mco_category'];?></a> </li>
                                     <?php
                                         } }
                                      ?>
                                                                    </ul>
                                                            </div><!-- End .row -->
                                     <?php
                                         } }
                                      ?>          
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->
                                                  </div>
                                                </div><!-- End .row -->
                                            </div><!-- End .megamenu -->
                                        </li>
                          <?php
                                         } }
                                      ?>   
              
                                    </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li>
                                    <a href="index.php" >Home</a>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">For Buyers</a>

                                                            <ul>
                                                                <li><a href="post_buylead.php">Post Your Buy Requirement</a></li>
                                                                <li><a href="product_suppliers.php?data&mco_id=442">Supplier Directory</a></li>
                                                                <li><a href="product_manufacture.php?data&mco_id=268">Manufacture Directory</a></li>
                                                            </ul>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">For Sellers</a>

                                                    <ul>
                                                        <li><a href="Register.php">Sell Your Products</a></li>
                                                        <li><a href="buyleads.php">Buyleads</a></li>
                                                        <li><a href="supplier_faq.php">Supplier FAQs</a></li>
                                                      
                                                    </ul>
                                </li>
                               <li><a href="contact.php">Contact Us</a></li>

                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right bg-danger px-5">
                        <a href="advertise.php">
                       <p class="text-white">Advertise with us</p>
                        </a>
                    </div>
                </div><!-- End .container -->
                
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
