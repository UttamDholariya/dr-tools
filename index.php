<?php include('./include/header.php') ?>
<?php include('./include/bodyheader.php') ?>
    <!-- banner-section -->
    <section class="banner-section home-banner">
        <div class="owl-carousel owl-theme banner-slider">
            <div class="item">
                <div class="banner-slider-wrap text-center">
                    <img src="./assets/images/images/slider-1_1.jpg" alt="Banne" />
                    <div class="banner-slider-content">
                        <h3>Quality First</h3>
                        <h2>Medical Safety Gears</h2>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="banner-slider-wrap text-center">
                    <img src="./assets/images/images/slider-2_1.jpg" alt="Banne" />
                    <div class="banner-slider-content">
                        <h3>Medical Equipment's</h3>
                        <h2>For Physician & Medical Professional</h2>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="banner-slider-wrap text-center">
                    <img src="./assets/images/images/slider-3_1.jpg" alt="Banne" />
                    <div class="banner-slider-content">
                        <h3>Face Mask</h3>
                        <h2>Prevent The Spread Of Disease</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-service-list-section -->
    <!-- <section class="our-service-list-section"> 
        <div class="our-service-list">
            <div class="our-service-list-img">
                <img src="./assets/images/images/ship-2.png" alt="FREE SHIPPING & SERVICES" />
            </div>
            <div class="our-service-list-detail">
                <h2>Free Shipping</h2>
                <p>For orders over ₹2000.00</p>
            </div>
        </div>
        <div class="our-service-list">
            <div class="our-service-list-img">
                <img src="./assets/images/images/ship-3.jpg" alt="ONLINE SUPPORT 24/7" />
            </div>
            <div class="our-service-list-detail">
                <h2>Official Discounts</h2>
                <p>Save big on next product</p>
            </div>
        </div>
        <div class="our-service-list">
            <div class="our-service-list-img">
                <img src="./assets/images/images/ship-1.png" alt="SECURE PAYMENT" />
            </div>
            <div class="our-service-list-detail">
                <h2>SECURE PAYMENT</h2>
                <p>Online payment is more secure</p>
            </div>
        </div>
    </section>-->
    <!-- our-services-section -->
    <section class="our-services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Categories</h2>
                </div>
            </div>
        </div>
        
        <div class="owl-carousel owl-theme our-services-slider">
            <!-- <div class="item"> -->
            
                <!-- <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                        <img src="./assets/images/images/syringes.png" alt="syringes" />
                    </div>
                    <p>Consumable & Disposable</p>
                </div>
            </div>
            <div class="item">
                <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                        <img src="./assets/images/images/Surgical.png" alt="Monitoring Devices" />
                    </div>
                    <p>Monitoring Devices</p>
                </div>
            </div>
            <div class="item">
                <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                        <img src="./assets/images/images/Diagnosis.png" alt="Diagnosis" />
                    </div>
                    <p>Diagnosis</p>
                </div>
            </div>
            <div class="item">
                <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                        <img src="./assets/images/images/dental.svg" alt="Dental" />
                    </div>
                    <p>Dental</p>
                </div>
            </div>
            <div class="item">
                <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                        <img src="./assets/images/images/emergency.svg" alt="Emergency" />
                    </div>
                    <p>Emergency</p>
                </div>
            </div>
            <div class="item">
                <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                        <img src="./assets/images/images/laboratory.svg" alt="laboratory" />
                    </div>
                    <p>Laboratory</p>
                </div>
            </div> -->
            <div class="item">
            <?php
                    include "confing.php";
                    
                    $sql = "SELECT * FROM category ORDER BY id DESC";
                            $result = mysqli_query($conn,$sql) or die("Query Feiled");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
            ?>
                <div class="our-services-wrap text-center">
                    <div class="our-services-img">
                    <a href="listing-page.php?cid=<?php echo  $row['id'] ?>"><img src="admin/Uplode/<?php echo $row['cat_icon'] ?>" alt="" /></a>
                    </div>
                    <p><?php echo $row['cat_name'] ?></p>
                </div>
                <?php
                        }
                    }
                    else{
                        echo "<h2>NO Record Found.</h2>";
                    }
                ?>
            </div>
            
        </div>
        
    </section>
    <!-- top-products-section -->
    <section class="top-products-section popular-products-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title">
                        <h2>Top Products</h2>
                        <div class="view-all">
                            <a href="./listing-page.php" class="view-all-text">View all <img src="./assets/images/view-all-arrow.svg" alt="view-all-arrow" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                <?php
                        include "confing.php";
                    
                        $sql = "SELECT product.id,product.pro_name,product.pro_price,product.pro_desc,product.quantity,product.pro_detail,product.category_name,product.pro_img,category.cat_name FROM product LEFT JOIN category ON product.category_name = category.id ";
                            $result = mysqli_query($conn,$sql) or die("Query Feiled");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <div class="products-wrap">
                    
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php?id=<?php echo $row['id'] ?>">
                                <img src="admin/Uplode/<?php echo $row['pro_img'] ?>" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php?id=<?php echo $row['id'] ?>">
                                <h3><?php echo $row['pro_name'] ?></h3>
                            </a>
                            <div class="products-price-rating">
                                <p><?php echo "₹". $row['pro_price'] .".00" ?></p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/gluco-meter_2.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Digital Blood Glucose Meter</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹489.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                           
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/spirometer_3.jpg" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>3-Ball Spirometer</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹199.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/thermometer_3.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Digital Thermometer</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹90.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/pulse-oximeter_2.jpg" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Pulse Oximeter</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹389.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/bp-monitor_3.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Sphygmomanometer <br> (Manual Blood Preasure Monitor)</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹688.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/oxigen-mask_5.jpg" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Oxygen Mask With Tubing Connector</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹200.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/vigo_1.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>IV Cannula</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹65.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Digital Blood Pressure Monitor </h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹1630.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/syrign_1.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Syringe With Needle</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹31.00</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/mask_1.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Surgical Mask</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹3.85</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-4">
                    <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/gloves_1.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Nitrile Powder Free Gloves</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹17.30</p>
                                <div class="rating-wrap">
                                    <a href="#">
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                        <img src="./assets/images/star.svg" alt="Star" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php
                        }
                    }
                    else{
                        echo "<h2>NO Record Found.</h2>";
                    }
                ?>
            </div>
        </div>
        
    </section>
    <!-- get-in-touch-section -->
    <!-- <section class="get-in-touch-section common-form-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="get-in-touch-content">
                        <h2>Can't find what you are looking for?</h2>
                        <ul>
                            <li>
                                <img src="./assets/images/call.svg" alt="Call" />
                                <a href="tel:+919999575609">9999 575 609</a>
                            </li>
                            <li>
                                <img src="./assets/images/email.svg" alt="Email" />
                                <a href="mailto:info@drtools.com">info@drtools.com</a>
                            </li>
                            <li>
                                <img src="./assets/images/internet.svg" alt="Internet" />
                                <a href="">www.drtools.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="get-in-touch">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-title">
                                        <h2>Get In Touch</h2>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="email" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="email" class="form-control" placeholder="Enter your email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Contact Number</label>
                                        <input type="tel" class="form-control" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="">Message</label>
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Write a message what are you are looking for?" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="f-btn">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<?php include('./include/bodyfooter.php') ?>
<?php include('./include/footer.php') ?>