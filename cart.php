<?php include('./include/header.php') ?>
<?php include('./include/bodyheader.php') ?>
    <!-- cart section -->
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="row align-items-center listing-row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table_cart product_detail_table">
                        <thead>
                          <tr class="table_cart--heading">
                            <th data-th="Products Details">Products Details</th>
                            <th data-th="Price">Price</th>
                            <th data-th="Quantity">Quantity</th>
                            <th data-th="Sub Total">Sub Total</th>
                            <th data-th="Action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="item-row">
                            <td data-th="Products Details">
                                <div class="products-detail-wrap">
                                    <div class="product-image-wrap">
                                        <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="">
                                    </div>
                                    <div class="product-detail-list">
                                        <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">
                                <div class="text-start">
                                    <span class="item_price d-block p-med-18">₹1630.00</span>
                                </div>
                            </td>
                            <td data-th="Quantity">
                                <div class="qty-wrap-main">
                                    <span class="remove_qty">-</span>
                                    <input class="input_qty" name="quantity" value="0">
                                    <span class="add_qty">+</span>
                                </div>
                            </td>
                            <td data-th="Sub Total" class="item_cost dark-text">₹<span class="item-cost-val">1630.00</span></td>
                            <td data-th="Action"> <a href="javascript:" class="js_remove_item"><img src="./assets/images/deletecon.svg" alt="Delete" /></a> </td>
                          </tr>
                          <tr class="item-row">
                            <td data-th="Products Details">
                                <div class="products-detail-wrap">
                                    <div class="product-image-wrap">
                                        <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="">
                                    </div>
                                    <div class="product-detail-list">
                                        <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">
                                <div class="text-start">
                                    <span class="item_price d-block p-med-18">₹1630.00</span>
                                   
                                </div>
                            </td>
                            <td data-th="Quantity">
                                <div class="qty-wrap-main">
                                    <span class="remove_qty">-</span>
                                    <input class="input_qty" name="quantity" value="0">
                                    <span class="add_qty">+</span>
                                </div>
                            </td>
                            <td data-th="Sub Total" class="item_cost dark-text">₹<span class="item-cost-val">1630.00</span></td>
                            <td data-th="Action"> <a href="javascript:" class="js_remove_item"><img src="./assets/images/deletecon.svg" alt="Delete" /></a> </td>
                          </tr>
                          <tr class="item-row">
                            <td data-th="Products Details">
                                <div class="products-detail-wrap">
                                    <div class="product-image-wrap">
                                        <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="">
                                    </div>
                                    <div class="product-detail-list">
                                        <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">
                                <div class="text-start">
                                    <span class="item_price d-block p-med-18">₹1630.00</span>
                                </div>
                            </td>
                            <td data-th="Quantity">
                                <div class="qty-wrap-main">
                                    <span class="remove_qty">-</span>
                                    <input class="input_qty" name="quantity" value="0">
                                    <span class="add_qty">+</span>
                                </div>
                            </td>
                            <td data-th="Sub Total" class="item_cost dark-text">₹<span class="item-cost-val">1630.00</span></td>
                            <td data-th="Action"> <a href="javascript:" class="js_remove_item"><img src="./assets/images/deletecon.svg" alt="Delete" /></a> </td>
                          </tr>
                        </tbody>
                    </table>
                   <!--  
                    <div class="main-grand-total-main">
                        <div class="dis-code-wrap">
                            <p class="med-16-black mb-0">Discount Code:</p>
                            <p class="med-16-gray">Enter your coupon code if you have</p>
                            <div class="copy-button">
                                <input id="copyvalue" type="text" readonly class="form-control" placeholder="#AACLPKK12345650">
                                <button onclick="copyIt()" class="copybtn mt-0">Apply Coupon</button>
                            </div>
                            <div class="cards-main">
                                <img src="/assets/images/payment.svg" alt="Payment">
                                <img src="/assets/images/payment-1.svg" alt="Payment">
                                <img src="/assets/images/payment-2.svg" alt="Payment">
                                <img src="/assets/images/payment-3.svg" alt="Payment">
                                <img src="/assets/images/payment-4.svg" alt="Payment">
                            </div>
                        </div>
                        -->
                        <div class="proceed-to-checkout">
                            <div class="products-details-lists mt-0 proceed-total-wrap-main">
                                <ul>
                                    <li>
                                        <p>Sub Total :</p>
                                        <p class="primary-med-18">₹4890.00</p>
                                    </li>
                                    <!-- <li>
                                        <p>Discount :</p>
                                        <p class="green-med-18">- ₹00.00</p>
                                    </li> -->
                                    <li>
                                        <p>Tax :</p>
                                        <p class="red-med-18">+ ₹293.40</p>
                                    </li>
                                    <!-- <li>
                                        <p>Shipping Charge:</p>
                                        <p class="primary-med-18">₹00.00</p>
                                    </li> -->
                                    <li>
                                        <p>Grand Total :</p>
                                        <p class="primary-med-18">₹5183.40</p>
                                    </li>
                                    <li>
                                        <div class="proceed-to-checkout-btn-wrap w-100">
                                            <a href="./checkout.php" style="text-decoration-line:none; text-align:center" type="submit" class="g-btn f-btn mb-0 w-100">Proceed To Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                                <div>
                                    <a href="javascript:" class="js_remove_item remove-all-btn">Remove All</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('./include/bodyfooter.php') ?>
<?php include('./include/footer.php') ?>