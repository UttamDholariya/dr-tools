<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Order View</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
          <li class="breadcrumb-item">Manage Order</li>
          <li class="breadcrumb-item active">View</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="col-lg-12 d-flex flex-column align-items-center">
        <div class="col-8">
        <div class="billing-details-main order-summary-wrap">
            <div class="billing-details-wrap">
                <div class="table-wrap">
                    <table class="table mb-0">
                        <tbody>
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="products-detail-wrap">
                                        <div class="product-image-wrap">
                                            <img src="../assets/images/images/digi-bp-monitor_2.webp" style="width:80px; height:105px" alt="">
                                        </div>
                                        <div class="product-detail-list">
                                            <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                            <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        </div>
                                    </div>
                                
                                </td>
                                <td>
                                    <div class="product-price-wrap text-end qty-wrap">
                                        <p class="dark-text">₹1630.00</p>
                                        <p class="p-14-dark"> <span class="span-title">Qty : </span>  <span> 1 </span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="products-detail-wrap">
                                        <div class="product-image-wrap">
                                            <img src="../assets/images/images/digi-bp-monitor_2.webp" alt="">
                                        </div>
                                        <div class="product-detail-list">
                                            <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                            <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        </div>
                                    </div>
                                
                                </td>
                                <td>
                                    <div class="product-price-wrap text-end qty-wrap">
                                        <p class="dark-text">₹1630.00</p>
                                        <p class="p-14-dark"> <span class="span-title">Qty : </span>  <span> 1 </span></p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="products-detail-wrap">
                                        <div class="product-image-wrap">
                                            <img src="../assets/images/images/digi-bp-monitor_2.webp" alt="">
                                        </div>
                                        <div class="product-detail-list">
                                            <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                            <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product-price-wrap text-end qty-wrap">
                                        <p class="dark-text">₹1630.00</p>
                                        <p class="p-14-dark"> <span class="span-title">Qty : </span>  <span> 1 </span></p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr class="alert" role="alert">
                                <td>
                                    <div class="main-dis">
                                        <p class="light-text">Grand Total :</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="main-dis main-dis-2">
                                        <p class="dark-text">₹5,050.50</p>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    
                                    <div class="payment-wrapper">
                                        <h3>Payment Method</h3>
                                        <!-- <p>All transactions are secure and encrypted.</p> -->
                                        <div class="checkbox-wrap text-center card-cod-wrap mb-2">
                                            <div class="form-group">
                                                <input type="radio" id="cod" name="radio-group" checked="">
                                                <label for="cod">Cash on delivery</label>
                                                <p>Pay with cash on delivery.</p>
                                            </div>
                                            
                                            <div class="text-center buttons-wrap w-100">
                                                <button type="submit" class="g-btn f-btn mb-0 w-100">Place Order</button>
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
    </section>

  </main><!-- End #main -->
  <?php include('../admin/include/footer.php') ?>
</html>