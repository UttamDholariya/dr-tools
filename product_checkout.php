<?php include('./include/header.php') ?>
<?php include('./include/bodyheader.php') ?>
<?php include "confing.php" ?>
    <!-- cart section -->
    <section class="cart-section checkout-section">
        <div class="container">
            <div class="row">
                <div class="row align-items-center listing-row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                              <li class="breadcrumb-item"><a href="./cart.php">Cart</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="billing-details-main">
                        <h1>Billing Details</h1>
                        <div class="billing-details-wrap">
                            <div class="change-wrap">
                                <span>DEFAULT</span>
                                <p class="deliver-text">Deliver to: <span><?php echo $_SESSION['first_name'];?> <?php echo $_SESSION['last_name'];?></span> </p>
                                <?php 
                                    $id = $_SESSION['id'];
                                    
                                    $sql = "SELECT address,postal_code FROM users WHERE id={$id} ";
                                    $result = mysqli_query($conn,$sql) or die("Query Feiled");
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                ?> 
                                            <p class="reg-14-gray"><?php echo $row['address']?>-<?php echo $row['postal_code']?></p>
                                <?php 
                                        }
                                    }        
                                ?>
                            </div>
                                <!-- <div class="checkout-change-btn-wrap"> 
                                    <a href="#" class="change-btn g-btn f-btn mb-0 d-inline-block">Change</a>
                                </div> -->
                            
                            <!--  
                            <div class="common-form-section cmn-bg-tab new-shipping-wrap">
                                <h2>Add New Shipping Address</h2>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Name*</label>
                                                <input type="text" class="form-control" placeholder="Mark Ruffalo" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Email Address*</label>
                                                <input type="text" class="form-control" placeholder="markruffalo@gmail.com" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Address (Street/Area)*</label>
                                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="201-203, Rang Royal Residency,"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">City/District/Town*</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">State*</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="Gujarat">Gujarat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Postal Code*</label>
                                                <input type="number"  class="form-control" placeholder="380081" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Contact Number*</label>
                                                <input type="number"  class="form-control" placeholder="98980 98009" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="checkbox-wrap text-center">
                                        <div class="form-group">
                                            <input type="checkbox" id="default1" name="default1" value="default1" checked>
                                            <label for="default1">default</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="home1" name="radio-group" checked>
                                            <label for="home1">Home</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="work1" name="radio-group">
                                            <label for="work1">Work</label>
                                        </div>
                                    </div>
                                    <div class="text-center buttons-wrap">
                                        <button type="submit" class="g-btn f-btn mb-0 w-100">Save</button>
                                    </div>
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="billing-details-main order-summary-wrap">
                        <h2>Order Summary</h2>
                        <div class="billing-details-wrap">
                            <div class="table-wrap">
                                <table class="table mb-0">
                                    <tbody>
                                        <?php
                                            $id = $_GET['id'];
                                    
                                            $product_sql = "SELECT * FROM product WHERE id={$id} ";
                                            $product_result = mysqli_query($conn,$product_sql) or die("Query Feiled");

                                            if(mysqli_num_rows($product_result) > 0)
                                            {
                                                while($pro_row = mysqli_fetch_assoc($product_result))
                                                {
                                                    $total = $pro_row['pro_price'];
                                        ?>
                                                    <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="admin/Uplode/<?php echo $pro_row['pro_img'] ?>" alt="">
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark"><?php echo $pro_row['pro_name'] ?></p>
                                                                    <!-- <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p> -->
                                                                </div>
                                                            </div>
                                                    
                                                        </td>
                                                        <td>
                                                            <div class="product-price-wrap text-end qty-wrap">
                                                                <p class="dark-text">₹<?php echo $pro_row['pro_price']?>/item</p>
                                                                <p class="p-14-dark"> <span class="span-title">Qty : 1</span> </p>
                                                                <p class="dark-text mt-2">₹<?php echo $total; ?></p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                        <?php 
                                                }
                                            }
                                        ?>
                                        <?php
                                            $id = $_GET['id'];
                                    
                                            $product_sql = "SELECT * FROM product WHERE id={$id} ";
                                            $product_result = mysqli_query($conn,$product_sql) or die("Query Feiled");

                                            if(mysqli_num_rows($product_result) > 0)
                                            {
                                                while($pro_row = mysqli_fetch_assoc($product_result))
                                                {
                                                    $total = $pro_row['pro_price'];
                                        ?>
                                                    <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="main-dis">
                                                                <p class="light-text">Grand Total :</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="main-dis main-dis-2">
                                                                <p class="dark-text text-success">₹<?php echo $pro_row['pro_price']?>.00</p>
                                                            </div>
                                                        </td>
                                                    </tr>
                                        <?php
                                                }
                                            }
                                        ?>
                                        
                                        <tr>
                                            <td>
                                                <!-- 
                                                <div class="cards-main">
                                                    <img src="./assets/images/payment.svg" alt="Payment" />
                                                    <img src="./assets/images/payment-1.svg" alt="Payment" />
                                                    <img src="./assets/images/payment-2.svg" alt="Payment" />
                                                    <img src="./assets/images/payment-3.svg" alt="Payment" />
                                                    <img src="./assets/images/payment-4.svg" alt="Payment" />
                                                </div>  -->
                                                <div class="payment-wrapper">
                                                    <h3>Payment Method</h3>
                                                    <!-- <p>All transactions are secure and encrypted.</p> -->
                                                    <div class="checkbox-wrap text-center card-cod-wrap mb-2">
                                                        <div class="form-group">
                                                            <input type="radio" id="cod" name="radio-group" checked="">
                                                            <label for="cod">Cash on delivery</label>
                                                            <p>Pay with cash on delivery.</p>
                                                        </div>
                                                        <!-- 
                                                        <div class="form-group">
                                                            <input type="radio" id="c-card" name="radio-group">
                                                            <label for="c-card">Credit Card</label>
                                                            <p>We accept all major credit cards.</p>
                                                        </div>
                                                         -->
                                                        <div class="text-center buttons-wrap w-100">
                                                            <form action="product_place_order.php" method="POST">
                                                                <input type="text" name="id" value="<?php echo $_GET['id']?>" hidden>
                                                                <button type="submit" name="place_order" class="g-btn f-btn mb-0 w-100">Place Order</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('./include/bodyfooter.php') ?>
<?php include('./include/footer.php') ?>