
        <footer class="footer">
        	<div class="footer-middle">
	            <div class="container">
	            	<div class="row">
	            		<div class="col-sm-6 col-lg-3">
	            			<div class="widget widget-about">
	            				<img src="image/logo.png" class="footer-logo" alt="Footer Logo"style="height:80px;">

	            				<div class="widget-call">
                                    <i class="icon-phone"></i>
                                    Got Question? Call us 24/7
                                    <a href="tel:#">+91 78275 14754</a>         
                                </div><!-- End .widget-call -->
	            			</div><!-- End .widget about-widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->

	            		<div class="col-sm-6 col-lg-6">
	            			<div class="widget">
	            				<h4 class="widget-title">About us</h4><!-- End .widget-title -->
                                 <p>B2b Portal is an online marketplace or online bazaar where manufacturers / suppliers / exporters can list their companies with products and then create an online catalog with the complete details like company overview, warehouse/factory details, certification, website and products listings.</p>
	            			</div><!-- End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->


	            		<div class="col-sm-6 col-lg-3">
	            		<div class="widget">
	            				<h4 class="widget-title">Get in Touch</h4>

	            				<ul class="widget-list">
	            					<li><span style="font-weight:600;">Branch 1st: </span> Commercial unit office bearing number 710 & 711 on seventh floor situated at amba tower , plot no - 2 DC chowk sector -9 rohini , delhi, New Delhi, Delhi 110085</li>
	            				 <li><span style="font-weight:600;">Branch 2nd: </span>  604, vishwa sadan building, janakpuri district centre,  110058</li>
	            				
	            				</ul>
	            			</div><!--End .widget -->
	            		</div><!-- End .col-sm-6 col-lg-3 -->
	            	</div><!-- End .row -->
	            </div><!-- End .container -->
	        </div><!-- End .footer-middle -->

	        <div class="footer-bottom">
	        	<div class="container">
	        		<p class="footer-copyright">Copyright © 2023 Web 2 Export. All Rights Reserved.</p><!-- End .footer-copyright -->
	        		<figure class="footer-payments">
	        			<img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
	        		</figure><!-- End .footer-payments -->
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
            

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li>
                                    <a href="index.php" >Home</a>
                                </li>
                                <li>
                                    <a href="" class="sf-with-ul">For Buyers</a>

                                                            <ul>
                                                                <li><a href="post_buylead.php">Post Your Buy Requirement</a></li>
                                                                <li><a href="product_suppliers.php?data&mco_id=442">Supplier Directory</a></li>
                                                                <li><a href="product_manufacture.php?data&mco_id=268">Manufacture Directory</a></li>
                                                                <li><a href="supplier_faq.php">Supplier FAQs</a></li>
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
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <ul class="mobile-menu">
                            <?php
                                         include "connection.php";
      $sql = "SELECT `cat_id`, `category`, `filename` FROM `category` WHERE 1 LIMIT 10";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
$cat_id=$row['cat_id'];
 ?> 
                            <li>
                                <a href="#"><?php echo $row['category'];?></a>
                                <ul>
                                    <?php
      include "connection.php";
      $sql2 = "SELECT `sub_cat_id`, `cat_id`, `sub_category`, `filename` FROM `sub_category` WHERE cat_id='$cat_id' LIMIT 3";
  $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
        // output data of each row
    while($row2 = $result2->fetch_assoc()) {
$sub_cat_id=$row2['sub_cat_id'];
 ?> 
                                    <li>
                                        <a href="about.html"><?php echo $row2['sub_category'];?></a>

                                        <ul>
              <?php
                  $sql3 = "SELECT `mco_id`, `cat_id`, `sub_cat_id`, `mco_category`, `filename`, `search` FROM `mco_category` WHERE sub_cat_id='$sub_cat_id' LIMIT 3";
                       $result3 = $conn->query($sql3);
                         if ($result3->num_rows > 0) {
                           // output data of each row
                            while($row3 = $result3->fetch_assoc()) {
                          $cat_id=$row3['cat_id'];
                       ?>
                                            <li><a href="product.php?data&mco_id=<?php echo $row3['mco_id'];?>"><?php echo $row3['mco_category'];?></a></li>
                                   <?php
                                         } }
                                      ?>
                                        </ul>
                                    </li>
                                <?php
                                         } }
                                      ?>    
                                </ul>
                            </li>
                   <?php
                                         } }
                                      ?>          
                        </ul>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">



<form  method="POST" action="validate.php" >
    <div class="form-group">
        <label for="singin-email">Username or email address *</label>
        <input type="text" class="form-control" id="singin-email" name="username" required>
    </div><!-- End .form-group -->

    <div class="form-group">
        <label for="singin-password">Password *</label>
        <input type="password" class="form-control" id="singin-password" name="password" required>
    </div><!-- End .form-group -->

    <?php if(isset($error)) { ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php } ?>

    <div class="form-footer">
        <button type="submit" class="btn btn-outline-primary-2">
            <span>LOG IN</span>
            <i class="icon-long-arrow-right"></i>
        </button>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="signin-remember">
            <label class="custom-control-label" for="signin-remember">Remember Me</label>
        </div><!-- End .custom-checkbox -->

        <a href="#" class="forgot-link">Forgot Your Password?</a>
    </div><!-- End .form-footer -->
</form>


                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
 <?php
     include "connection.php";
     if (isset($_POST['submit'])) {
     $firstname =$_POST["firstname"];
     $lastname =$_POST["lastname"];
     $contact =$_POST["contact"];
     $email =$_POST["email"];
     $password =$_POST["password"];
    

$sql = "INSERT INTO `users`( `firstname`, `lastname`, `contact`, `username`, `password`) VALUES ('$firstname','$lastname','$contact','$email','$password')";
 $result =  $conn->query($sql);
echo '<script>alert("your Buylead sent successfully ")</script>';
echo "<script> location.href='#'; </script>";
        exit;

} 
?>
        
                                    <form action="#" method="POST">
			                				<div class="row">
			                					<div class="col-sm-6">
			                						<label>First Name *</label>
			                						<input name="firstname" type="text" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->

			                					<div class="col-sm-6">
			                						<label>Last Name *</label>
			                						<input type="text" name="lastname" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->
			                				</div><!-- End .row -->

		            						<label>Phone Number</label>
		            						<input type="text" name="contact" class="form-control" required>

		                					<label>Email address *</label>
		        							<input type="email" name="email" class="form-control" required>

		            						<label>Password</label>
		            						<input type="password" name="password" class="form-control">
]

		                					<button name="submit" type="submit" class="btn btn-outline-primary-2">
			                					<span>SAVE CHANGES</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>
			                			</form>
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->


<!--
    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div>
                                </div>
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    -->
    
    
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.plugin.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/demos/demo-4.js"></script>
</body>


<!-- molla/index-4.html  22 Nov 2019 09:54:18 GMT -->
</html>