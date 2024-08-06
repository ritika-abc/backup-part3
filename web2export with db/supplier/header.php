<?php
 include "connection.php";

session_start();
 
// To check if session is started.
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}
else
{
    header("Location:pages-login.php");
}
?>

?>

   <?php
         include "connection.php";

   if(isset($_SESSION["user"])){
           $username = $_SESSION["user"];
           }

      $sql = "SELECT `supp_id`, `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`, `plan`, `date_created`, `plan_started`, `date_expire`, `filename`, `eid`, `about`, `custom_field`, `about_image` FROM `supplier` WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    }
    else{
          header("Location:pages-login.php");
    }
    ?>
    
    
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center bg-info">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">WEB 2 EXPORT</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
  <div class="header-right">
     
<?php
   include "connection.php";
if(isset($_SESSION["user"])){
$username=$_SESSION["user"];
}
      $sql = "SELECT * FROM `supplier`  WHERE username='$username' ";
  $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
    while($row = $result->fetch_assoc()) {
        ?> 
 
 <h1><?php echo $row['company_name'];?> (<?php echo $row['plan'];?>)</h1>
                <?php
                   } }
              ?> 
    </div><!-- End Search Bar -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar bg-info-subtle">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse bg-white" data-bs-parent="#sidebar-nav">
          <li>
            <a href="All-Products.php">
            <span>All Products</span>
            </a>
          </li>
          <li>
            <a href="Add-New-Products.php">
              <span>Add New Products</span>
            </a>
          </li>
          
         </ul>
      </li><!-- End Components Nav -->




      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Buyleads</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="All-Buyleads.php">
              <span>All Buyleads</span>
            </a>
          </li>
          <li>
            <a href="Accesses_Buyleads.php">
              <span>Accesses Buyleads</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="Enquiry.php">
          <i class="bi bi-question-circle"></i>
          <span>Enquiry</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
  
      <li class="nav-item">
        <a class="nav-link collapsed text-danger" href="advertise.php">
          <i class="bi bi-question-circle"></i>
          <span>Upgrade</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
  
  
    <li class="nav-item">
        <a class="nav-link collapsed " href="users-profile.php">
          <i class="bi bi-question-circle"></i>
          <span>Profie</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->
    
    </ul>

  </aside><!-- End Sidebar-->
