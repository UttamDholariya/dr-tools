<?php include('./include/header.php') ?>
<?php include('./include/bodyheader.php') ?>
    <!-- listing section -->
    <section class="listing-section">
        <div class="container">
            <div class="row align-items-center listing-row">
                <div class="col-lg-6">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-5">
                    <div class="search-main-wrap nav-right visible-xs">
                        <div class="button-main" id="btn">
                            <div class="bar top"></div>
                            <div class="bar middle"></div>
                            <div class="bar bottom"></div>
                        </div>
                        <!-- <div class="search-wrap listing-search-wrap"> 
                            <form action="">
                                <input type="search" placeholder="Search" class="form-control" />
                            </form>
                        </div>-->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="col-xl-3 col-lg-4 col-md-4 sidebar" id="mySidenav">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="button-main close-btn" id="btn"> 
                            <div class="bar top"></div>
                            <div class="bar middle"></div>
                            <div class="bar bottom"></div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                Filter
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body p-0">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="dropdown-item" href="#" data-bs-toggle="dropdown">
                                            BP Machines
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                        ventilator
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            gluco-meter
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            Thermometers
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            Mouth Mirror
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            Heart-rate Monitor
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            Octoscop
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" href="#">
                                            Spirometer
                                        </a>
                                    </li>
                                </ul>
                            </div>
                          </div>
                        </div><!-- 
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                price
                            </button>
                          </h2>
                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse range-wrap show" aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div id="app">
                                    <div class="track-container">
                                      <div class="track" ref="_vpcTrack"></div>
                                      <div class="track-highlight" ref="trackHighlight"></div>
                                      <button class="track-btn track1" ref="track1"></button>
                                      <button class="track-btn track2" ref="track2"></button>
                                      <span class="range-value min">₹ {{ minValue}} </span> <span class="range-value max">₹ {{ maxValue }}</span>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div> 
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                size
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFour">
                                <div class="accordion-body select-size">
                                    <div class="button">
                                        <input type="radio" id="XXS" checked name="check-substitution-2" />
                                        <label class="btn btn-default" for="XXS">XXS</label>
                                    </div>
                                    <div class="button">
                                        <input type="radio" id="XL" name="check-substitution-2" />
                                        <label class="btn btn-default" for="XL">XL</label>
                                    </div>
                                    <div class="button">
                                        <input type="radio" id="XS" name="check-substitution-2" />
                                        <label class="btn btn-default" for="XS">XS</label>
                                    </div>

                                    <div class="button">
                                        <input type="radio" id="S" name="check-substitution-2" />
                                        <label class="btn btn-default" for="S">S</label>
                                    </div>
                                    <div class="button">
                                        <input type="radio" id="M" name="check-substitution-2" />
                                        <label class="btn btn-default" for="M">M</label>
                                    </div>
                                    <div class="button">
                                        <input type="radio" id="L" name="check-substitution-2" />
                                        <label class="btn btn-default" for="L">L</label>
                                    </div>

                                    <div class="button">
                                        <input type="radio" id="XXL" name="check-substitution-2" />
                                        <label class="btn btn-default" for="XXL">XXL</label>
                                    </div>
                                    <div class="button">
                                        <input type="radio" id="3XL" name="check-substitution-2" />
                                        <label class="btn btn-default" for="3XL">3XL</label>
                                    </div>
                                    <div class="button">
                                        <input type="radio" id="4XL" name="check-substitution-2" />
                                        <label class="btn btn-default" for="4XL">4XL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php
                        include "confing.php";

                        if(isset($_GET['cid'])){
                            $cat_id = $_GET['cid'];
                        }
                        $sql = "SELECT product.id,product.pro_name,product.pro_price,product.pro_desc,product.quantity,product.pro_detail,product.category_name,product.pro_img,category.cat_name FROM product LEFT JOIN category ON product.category_name = category.id WHERE product.category_name = {$cat_id} ";
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
                <?php
                        }
                    }
                    else{
                        echo "<h2>NO Record Found.</h2>";
                    }
                ?>
                <!-- <div class="col-xl-9 col-lg-8 col-md-12 sidebar-menu">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/stethoscope_3.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Stethoscope</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹300.00</p>
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                        <div class="products-wrap">
                        <div class="products-wrap-img position-relative">
                            <a href="./product-detail.php">
                                <img src="./assets/images/images/stethoscope_3.webp" alt="Product" />
                            </a>
                            <div class="product-like-cart">
                                <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                            </div>
                        </div>
                        <div class="products-detail">
                            <a href="./product-detail.php">
                                <h3>Stethoscope</h3>
                            </a>
                            <div class="products-price-rating">
                                <p>₹300.00</p>
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
                        <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                            <div class="products-wrap">
                                <div class="products-wrap-img position-relative">
                                    
                                    <a href="./product-detail.php">
                                        <img src="./assets/images/images/needal-holder_4.webp" alt="Product" />
                                    </a>
                                    <div class="product-like-cart">
                                        <a href="#" class="product-btn"><img src="./assets/images/like-white.svg" alt="Like" /></a>
                                        <a href="#" class="product-btn"><img src="./assets/images/cart-white.svg" alt="Cart" /></a>
                                    </div>
                                </div>
                                <div class="products-detail">
                                    <a href="./product-detail.php">
                                        <h3>Needle Holder </h3>
                                    </a>
                                    <div class="products-price-rating">
                                        <p>₹363.00</p>
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
                    </div>
                </div> -->
            </div>
        </div>
    </section>
<?php include('./include/bodyfooter.php') ?>
<?php include('./include/footer.php') ?>