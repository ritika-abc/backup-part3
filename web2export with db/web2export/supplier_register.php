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
       
<div class="container py-5">
    <h1 class="text-center">Register your business with us</h1>
    <p  class="text-center">Welcome to our Supplier Registration! Join our platform and unlock a world of opportunities for your business. By becoming a registered supplier, you gain access to a global marketplace where you can showcase your products or services to a vast audience of potential buyers. Whether you're a manufacturer, wholesaler, or service provider, our platform offers the tools and resources you need to expand your reach, increase sales, and streamline your export processes. Registration is quick and easy – simply fill out the form below to get started. Experience the benefits of joining our platform today and take your business to new heights!</p><hr>
     <?php
           include "connection.php";
     if (isset($_POST['upload'])) {
           $filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./../supplier/image/" . $filename;
     $name =$_POST["name"];
     $state =$_POST["state"];
     $city =$_POST["city"];
     $zip =$_POST["zip"];
     $company_name =$_POST["company_name"];
     $contact =$_POST["contact"];
     $street =$_POST["street"];
     $country =$_POST["country"];
    $password =$_POST["password"]; 
     $username =$_POST["username"]; 

$sql = "INSERT INTO `supplier`( `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`,  `filename`) VALUES ('$name','$company_name','$contact','$username','$password','$city','$state','$street','$country','$zip','$filename')";
 $result =  $conn->query($sql);
echo '<script>alert("Registered successfully")</script>';
echo "<script> location.href='supplier_register.php'; </script>";
        exit;

} 
?>
                 <form class="row g-3"  method="POST"  enctype="multipart/form-data">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Supplier Name" name="name">
                </div>
                
                 <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Supplier Email" name="username">
                </div>
                
                 <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                </div>
                
                 <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Supplier contact no." name="contact">
                </div>
               
                
                <div class="col-md-6">
                  <input type="file" class="form-control" name="uploadfile">
                </div>
          
                <div class="col-md-6">
                   <input type="text" class="form-control" placeholder="password" name="password">
                </div>
               
              
                
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Street Address" name="street">
                </div>
                
                
                
                
                <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="  city name" name="city" >
                </div>
                
                 <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="  state name" name="state" >
                </div>
                
                <div class="col-md-3">
                     <input type="text" class="form-control" placeholder="  country name" name="country" >
                </div>
                
                  <div class="col-md-3">
                     <input type="text" class="form-control" placeholder=" zip code" name="zip" >
                </div>
                
               
                 
             
                
                <div class="text-center">
                  <button  type="upload"  type="upload" value="upload" name="upload" class="btn btn-primary">Post Your Requirement</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

</div>
                </main><!-- End .main -->
<?php include "include/footer.php"; ?>
    
