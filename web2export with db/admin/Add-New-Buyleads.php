               <?php include "header.php"; ?>
               <!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                       <main id="main" class="main bg-light">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Buyleads</li>
          <li class="breadcrumb-item active">Add New Buyleads</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<div class="card">
            <div class="card-body">
              <h5 class="card-title">Add A new buylead</h5>

              <!-- No Labels Form -->
                              <?php
                        include "connection.php";

               
        
     if (isset($_POST['upload'])) {
     $country =$_POST["country"];
     $state =$_POST["state"];
     $city =$_POST["city"];
     $zip =$_POST["zip"];
     $cust_name =$_POST["cust_name"];
     $cust_number =$_POST["cust_number"];
     $address =$_POST["address"];
       $product =$_POST["product"];   
      $qty = $_POST["qty"];   
    $unit =$_POST["unit"];   
    $purpose =$_POST["purpose"]; 
     $username =$_POST["username"]; 
   

$sql = "INSERT IGNORE INTO `buyleads`( `username`, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `cust_name`, `cust_number`, `address`, `purpose`, `search`) VALUES ('$username','$product','$qty','$unit','$country','$state','$city','$zip','$cust_name','$cust_number','$address','$purpose','buylead')";
 $result =  $conn->query($sql);
echo '<script>alert("your Buylead sent successfully ")</script>';
echo "<script> location.href='Add-New-Buyleads.php'; </script>";
        exit;

} 
?>
              <form class="row g-3" Method="POST">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Product Name" name="product">
                </div>
                
                 <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Product Email" name="username">
                </div>
                
                 <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Buyer Name" name="cust_name">
                </div>
                
                 <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Buyer contact no." name="cust_number">
                </div>
               
                
                <div class="col-md-4">
                  <input type="text" class="form-control" placeholder="Product Qty" name="qty">
                </div>
          
                <div class="col-md-4">
                   <input type="text" class="form-control" placeholder="unit" name="unit">
                </div>
               
               <div class="col-md-4">
                  	<select class="form-control" name="purpose" >
							<option>Reselling</option>
							<option>Reselling</option>
							<option>Self use</option>
					</select>
                </div>
                
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Address" name="address">
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
                  <button  type="upload"  type="upload" value="upload" name="upload" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>
  </main><!-- End #main -->
<script>$(document).ready(function() {
  $('#summernote').summernote();
});</script>
               <?php include "footer.php"; ?>