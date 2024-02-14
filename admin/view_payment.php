<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Payament View</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Admin</a></li>
          <li class="breadcrumb-item"><a href="manage_payment.php">Manage Payment</a></li>
          <li class="breadcrumb-item active"> View Payment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="col-lg-12">
        <div class="billing-details-main order-summary-wrap">
            <div class="billing-details-wrap">
                <div class="table-wrap">
                    <table class="table mb-0">
                        <tbody>
                            <tr>
                                <th>Payment Id</th>
                                <th>Order Id</th>
                                <th>Total Amount</th>
                                <th>Payment Status</th>
                            </tr>
                            <tr>
                            <td><p>1</p> </td>
                                <td><p>#V4VS1123456G</p> </td>
                                <td>
                                    <p class="dark-text">₹4030.00</p>
                                </td>
                                <td>
                                    <p>Successful</p>
                                </td>
                            </tr>
                            <tr>
                            <td><p>2</p> </td>
                                <td><p>#V4VS1123456G</p> </td>
                                <td>
                                    <p class="dark-text">₹4030.00</p>
                                </td>
                                <td>
                                    <p>Pending</p>
                                </td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
  <?php include('../admin/include/footer.php') ?>
</html>