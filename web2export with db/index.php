<?php include "include/header.php"; ?>
<style>
    .container2 {
        width: 90%;
        margin: auto;
    }
</style>
<main class="main ">
    <div class=" mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
        "dots": true,
        "nav": false, 
        "autoplay": true,  // Add this line to enable autoplay
        "autoplayTimeout": 500,  // Optional: Set autoplay timeout in milliseconds (default is 5000)
        "autoplayHoverPause": true, // Optional: Pause autoplay when hovering over the carousel
        "responsive": {
            "1200": {
                "nav": true,
                "dots": false
            }
        }
    }'>
            <img src="image/banner/1.png" alt="" class="w-100">
            <img src="image/banner/2.png" alt="" class="w-100">
            <img src="image/banner/3.png" alt="" class="w-100">
            <img src="image/banner/4.png" alt="" class="w-100">
        </div><!-- End .intro-slider owl-carousel owl-simple -->



        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->
    <div class="mb-5"></div>
    <div class="container2 py-5">
        <h2 class="title text-center">Explore Popular Categories</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">
                <?php
                include "connection.php";
                $sql = "SELECT product.product_id, product.cat_id, product.sub_cat_id, product.mco_id, product.product, product.username, product.price, product.unit, product.Warranty, product.Diameter, product.Condition, product.Features, product.Supply_type, product.filename, product.date_created, product.search, mco_category.mco_id, COUNT(product.product_id) AS count, mco_category.mco_category, mco_category.filename AS mco FROM product INNER JOIN mco_category ON mco_category.mco_id = product.mco_id GROUP BY product.mco_id LIMIT 12";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>


                        <div class="col-6 col-sm-4 col-lg-2 py-2">
                            <a class="border" href="product.php?data&mco_id=<?php echo $row['mco_id']; ?>" class="cat-block">
                                <figure>
                                    <span>
                                        <img style="height:220px; width:220px;" src="admin/image/<?php echo $row['mco']; ?>" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title text-center p-2"><?php echo $row['mco_category']; ?><br> (<?php echo $row['count']; ?> products) </h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                <?php
                    }
                }
                ?>
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->

    <div class="container2 bg-light p-5">
        <h5 class="text-center">Our Premium Brand</h5>
        <div style="height:100px;" class="owl-carousel  owl-simple bg-light" data-toggle="owl" data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>


            <?php
            include "connection.php";
            $sql = "SELECT `supp_id`, `name`, `company_name`, `contact`, `username`, `password`, `city`, `state`, `street`, `country`, `zip`, `plan`, `date_created`, `plan_started`, `date_expire`, `filename`, `eid`, `about`, `custom_field`, `about_image` FROM `supplier` WHERE 1";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $cat_id = $row['cat_id'];
            ?>
                    <a href="supplier.php?data&username=<?php echo $row['username']; ?>" class="brand p-2">
                        <img style="height:100px; width:150px; background-color:white;" class="bg-white" src="supplier/image/<?php echo $row['filename']; ?>" alt="Brand Name">
                    </a>
            <?php
                }
            }
            ?>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->



    <div class="mb-4"></div><!-- End .mb-4 -->





    <div class="mb-6"></div><!-- End .mb-6 -->

    <div class="mb-5"></div>
    <div class="container2 py-5">
        <h2 class="title text-center">Explore Popular Categories</h2><!-- End .title text-center -->

        <div class="cat-blocks-container">
            <div class="row">
                <?php
                include "connection.php";
                $sql = "SELECT product.product_id, product.cat_id, product.sub_cat_id, product.mco_id, product.product, product.username, product.price, product.unit, product.Warranty, product.Diameter, product.Condition, product.Features, product.Supply_type, product.filename, product.date_created, product.search, mco_category.mco_id, COUNT(product.product_id) AS count, mco_category.mco_category, mco_category.filename AS mco FROM product INNER JOIN mco_category ON mco_category.mco_id = product.mco_id GROUP BY product.mco_id  ORDER BY count DESC LIMIT 12";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                ?>


                        <div class="col-6 col-sm-4 col-lg-2 py-2">
                            <a class="border" href="product.php?data&mco_id=<?php echo $row['mco_id']; ?>" class="cat-block">
                                <figure>
                                    <span>
                                        <img style="height:220px; width:220px;" src="admin/image/<?php echo $row['mco']; ?>" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title text-center p-2"><?php echo $row['mco_category']; ?><br> (<?php echo $row['count']; ?> products) </h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                <?php
                    }
                }
                ?>
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->


    <div class="container2 for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Recommendation For You</h2><!-- End .title -->
            </div><!-- End .heading-left -->

            <div class="heading-right">
                <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
            </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="products">
            <div class="row justify-content-center">

                <?php
                include "connection.php";



                $sql = "SELECT `product_id`, `cat_id`, `sub_cat_id`, `mco_id`, `product`, `username`, `price`, `unit`, `Warranty`, `Diameter`, `Condition`, `Features`, `Supply_type`, `filename`, `date_created`, `search` FROM `product` WHERE 1 LIMIT 12";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {


                ?>
                        <style>
                            .col-6 {
                                margin: 0px;
                                padding: 5px;
                            }
                        </style>
                        <div class="col-6 col-md-4 col-lg-2">
                            <div class="product product-2 border">
                                <figure class="product-media">
                                    <a href="">
                                        <img src="supplier/image/<?php echo $row['filename']; ?>" style="height:200px;" alt="Product image" class="product-image">
                                    </a>


                                </figure><!-- End .product-media -->

                                <div class="">
                                    <div class="product-cat">
                                        <!--<a href="#"><?php echo $row['product']; ?></a>-->
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href=""><?php echo $row['product']; ?></a></h3><!-- End .product-title -->
                                    <p>Warranty: <?php echo $row['Warranty']; ?></p>
                                    <p>Supply: <?php echo $row['Supply_type']; ?></p>
                                    <p>Minimum order:100 <?php echo $row['unit']; ?></p>

                                    <form method="POST" action="order.php">
                                        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                                        <input type="hidden" name="qty" value="100">
                                        <button type="submit" class=" btn-primary text-center" name="submit"> Send Requirement</button>
                                    </form>

                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->
                <?php
                    }
                }
                ?>

            </div><!-- End .row -->
        </div><!-- End .products -->
    </div><!-- End .container -->

    <div class="mb-4"></div><!-- End .mb-4 -->

    <div class="container">
        <hr class="mb-0">
    </div><!-- End .container -->

</main><!-- End .main -->
<?php include "include/footer.php"; ?>