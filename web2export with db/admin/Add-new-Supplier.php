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
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

<div class="card">
            <div class="card-body">
              <h5 class="card-title">No Labels / Placeholders as labels Form</h5>

              <!-- No Labels Form -->
              <form class="row g-3">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Product Name">
                </div>
                
                <div class="col-md-4">
                  <select id="inputState" class="form-select form-control">
                    <option selected>Select Category</option>
                    <option>...</option>
                  </select>
                </div>
          
                <div class="col-md-4">
                  <select id="inputState" class="form-select form-control">
                    <option selected>Select Sub-category</option>
                    <option>...</option>
                  </select>
                </div>
               
               <div class="col-md-4">
                  <select id="inputState" class="form-select form-control">
                    <option selected>Select Micro-category</option>
                    <option>...</option>
                  </select>
                </div>
                
                <div class="col-md-3">
                  <input type="text" class="form-control" placeholder="Price">
                </div>
                
                 <div class="col-md-3">
                  <select id="inputState" class="form-select form-control">
                    <option selected>Select Unit</option>
                    <option>...</option>
                  </select>
                </div>
                
                <div class="col-md-6">
                    <input class="form-control" type="file" id="formFile">
                </div>
                
                 <div class="col-md-6">
                     <select id="inputState" class="form-select form-control">
                    <option selected>Select Warranty</option>
                    <option>1 Year</option>
                     <option>2 Year</option>
                      <option>3 Year</option>
                       <option>4 Year</option>
                        <option>5 Year</option>
                  </select>
                </div>
                
                 <div class="col-md-6">
                    <input class="form-control" type="text" placeholder="Product Size">
                </div>
                
                 <div class="col-md-6">
                    <select id="inputState" class="form-select form-control">
                    <option >Product Condition</option>
                    <option>New</option>
                     <option>Used</option>
                  </select>
                </div>
                
                 <div class="col-md-6">
                   <select id="inputState" class="form-select form-control">
                    <option >Supply Type</option>
                    <option>Manufacture</option>
                     <option>Supplier</option>
                  </select>
                </div>
                
                
                <div class="col-md-12">
                    <textarea id="summernote" rows="10" name="editordata"></textarea>
                </div>
                 
             
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
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