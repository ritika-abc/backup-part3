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
        <main class="main">                         <?php
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
 
//  
$sql = "INSERT IGNORE INTO `buyleads`( `username`, `product`, `qty`, `unit`, `country`, `state`, `city`, `zip`, `cust_name`, `cust_number`, `address`, `purpose`, `search`) VALUES ('$username','$product','$qty','$unit','$country','$state','$city','$zip','$cust_name','$cust_number','$address','$purpose','buylead')";
// 
 $result =  $conn->query($sql);
echo '<script>alert("your Buylead sent successfully ")</script>';
echo "<script> location.href='post_buylead.php'; </script>";
        exit;

} 
?>
<div class="container py-5">
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
                  <button  type="upload"  type="upload" value="upload" name="upload" class="btn btn-primary">Post Your Requirement</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

</div>
                </main><!-- End .main -->
<?php include "include/footer.php"; ?>
    
