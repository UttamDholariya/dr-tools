<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Order View</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item"><a href="manage_order.php">Manage Order</a></li>
          <li class="breadcrumb-item active">View Order</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="col-lg-12">
        <div class="billing-details-main order-summary-wrap">
            <div class="billing-details-wrap">
                <div class="table-wrap">
                <?php 
                            include "confing.php";
                            $order_id = $_GET['order_id'];  
                            $sql = "SELECT * FROM order WHERE order_id = {$order_id}";
                            $result = mysqli_query($conn,$sql) or die("Query Feiled");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th>Order No</th>
                                <th>Product Details</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Order Date</th>
                                <th>Delivery Date</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td> <p>#V4VS1123456G</p> </td>
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
                                    <p class="dark-text">₹1630.00</p>
                                </td>
                                <td>
                                    <p>1</p>
                                </td>
                                <td>
                                    <p>01/01/2024</p>
                                </td>
                                <td>
                                    <p>03/01/2024</p>
                                </td>
                                <td>
                                    <p>Pending</p>
                                </td>
                            </tr>
                        </tbody>    
                    </table>
                    <?php
                                }
                            }
                        ?>
                </div>
            </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  <?php include('../admin/include/footer.php') ?>
</html>