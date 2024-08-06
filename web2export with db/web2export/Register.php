<?php include "include/header.php"; ?>
<main class="main">
     <div class="container py-5">
     <?php
     include "connection.php";
     if (isset($_POST['submit'])) {
         $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "supplier/image/" . $filename;
     $name =$_POST["name"];
     $company_name =$_POST["company_name"];
     $contact =$_POST["contact"];
     $username =$_POST["username"];
     $password =$_POST["password"];
     $city =$_POST["city"];
     $state =$_POST["state"];
     $street =$_POST["street"];
     $country =$_POST["country"];
     $zip =$_POST["zip"];


$sql = "INSERT INTO `supplier`(`name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`,  `filename`) VALUES ('$name','$company_name','$contact','$username','$password','$city','$state','$street','$country','$zip', '$filename')";
 $result =  $conn->query($sql);
echo '<script>alert("Your business registered successfully ")</script>';
echo "<script> location.href=''; </script>";
        exit;

} 
?>
                                <h1 class="text-center">Supplier Registration</h1>
                                <p class="text-center">Welcome to Web 2 Export Portal! Join our global network of suppliers and showcase your products or services to
                                <br>international buyers. Please fill out the following registration form to get started.</p>
                                    <form action="#" method="POST" class="py-5">
			                				<div class="row">
			                					<div class="col-sm-6">
			                						<label>Your Name *</label>
			                						<input name="name" type="text" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->

			                					<div class="col-sm-6">
			                						<label>Company name</label>
			                						<input type="text" name="company_name" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->
			                				</div><!-- End .row -->
			                				
			                				
			                					<div class="row">
			                					<div class="col-sm-6">
			                						<label>Company Banner Or Logo*</label>
			                						<input name="uploadfile" type="file" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->

			                					<div class="col-sm-6">
			                						<label>Company Address</label>
			                						<input type="text" name="street" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->
			                				</div><!-- End .row -->
			                				
			                				
			                					<div class="row">
			                					<div class="col-sm-3">
			                						<label>Your city *</label>
			                						<input name="city" type="text" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->

			                					<div class="col-sm-3">
			                						<label>Company state</label>
			                						<input type="state" name="company_name" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->
			                					
			                						<div class="col-sm-3">
			                						<label>Your country *</label>
			                						<input name="country" type="text" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->

			                					<div class="col-sm-3">
			                						<label>ZIP</label>
			                						<input type="text" name="zip" class="form-control" required>
			                					</div><!-- End .col-sm-6 -->
			                				</div><!-- End .row -->

		            						<label>Phone Number</label>
		            						<input type="text" name="contact" class="form-control" required>

		                					<label>Email address *</label>
		        							<input type="email" name="username" class="form-control" required>

		            						<label>Password</label>
		            						<input type="password" name="password" class="form-control">


		                					<button name="submit" type="submit" class="btn btn-outline-primary-2">
			                					<span>REGISTER</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>
			                			</form>
	            		</div><!-- End .col-sm-6 col-lg-3 -->

</main>
<?php include "include/footer.php"; ?>
