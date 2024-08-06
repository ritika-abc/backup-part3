
<?php include "include/header.php"; ?>
   <main class="main ">
            <div class=" mb-5">
                     <div class="container2 py-5">
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


		                					<button name="submit" type="submit" class="btn btn-outline-primary-2">
			                					<span>SAVE CHANGES</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>
			                			</form>
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                   </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
</main>
<?php include "include/footer.php"; ?>
