<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<?php include "confing.php"; ?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Total User</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="ps-3">
                  <?php
                    $sql = "SELECT COUNT(*) AS total FROM users";
                    $result = mysqli_query($conn,$sql) or die("Query Feiled");
                    $row = mysqli_fetch_assoc($result);
                  ?>
                    <h6><?php echo $row['total']; ?></h6>
                  <?php
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Total Product</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-light fa-cart-plus"></i>
                  </div>
                  <div class="ps-3">
                  <?php
                    $sql1 = "SELECT COUNT(*) AS pro_total FROM product";
                    $result1 = mysqli_query($conn,$sql1) or die("Query Feiled");
                    $row1 = mysqli_fetch_assoc($result1);
                  ?>
                    <h6><?php echo $row1['pro_total']; ?></h6>
                  <?php
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Total Category</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-light fa-layer-group"></i>
                  </div>
                  <div class="ps-3">
                  <?php
                    $sql2 = "SELECT COUNT(*) AS cat_total FROM category";
                    $result2 = mysqli_query($conn,$sql2) or die("Query Feiled");
                    $row2 = mysqli_fetch_assoc($result2);
                  ?>
                    <h6><?php echo $row2['cat_total']; ?></h6>
                  <?php
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Customers Card -->
          
          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">
            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="fas fa-light fa-layer-group"></i>
                  </div>
                  <div class="ps-3">
                  <?php
                    $sql3 = "SELECT COUNT(*) AS order_total FROM `order`";
                    $result3 = mysqli_query($conn,$sql3) or die("Query Feiled");
                    $row3 = mysqli_fetch_assoc($result3);
                  ?>
                    <h6><?php echo $row3['order_total']; ?></h6>
                  <?php
                  ?>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Customers Card -->
            <!-- Sales Card -->
            <!-- <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div> -->
            <!-- End Sales Card -->

            <!-- Revenue Card -->
            <!-- <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div> -->
            <!-- End Revenue Card -->

            <!-- Customers Card -->
            <!-- <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div> -->
            <!-- End Customers Card -->

            <!-- Reports -->
            <!-- <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2024-01-01T00:00:00.000Z", "2024-01-01T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>

                </div>

              </div>
            </div> -->
            <!-- End Reports -->

            <!-- Recent Sales -->
            <!-- <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#">#V4VS1123456G</a></th>
                        <td>Brandon Jacob</td>
                        <td><a href="#" class="text-primary">Digital Blood Pressure Monitor</a></td>
                        <td>₹1630.00</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#V4VS1123456G</a></th>
                        <td>Bridie Kessler</td>
                        <td><a href="#" class="text-primary">Pulse Oximeter</a></td>
                        <td>₹389.00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#V4VS1123456G</a></th>
                        <td>Ashleigh Langosh</td>
                        <td><a href="#" class="text-primary">Syringe With Needle</a></td>
                        <td>₹31.00</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#V4VS1123456G</a></th>
                        <td>Angus Grady</td>
                        <td><a href="#" class="text-primar">Nitrile Powder Free Gloves</a></td>
                        <td>₹17.30</td>
                        <td><span class="badge bg-danger">Rejected</span></td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#">#V4VS1123456G</a></th>
                        <td>Raheem Lehner</td>
                        <td><a href="#" class="text-primary">Digital Blood Glucose Meter</a></td>
                        <td>₹489.00</td>
                        <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> -->
            <!-- End Recent Sales -->

            <!-- Top Selling -->
            <!-- <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling </h5> 
                  <span>| Today</span>
                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="../assets/images/images/digi-bp-monitor_2.webp" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Digital Blood Pressure Monitor </a></td>
                        <td>₹1630.00</td>
                        <td class="fw-bold">124</td>
                        <td>₹2,02,120</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../assets/images/images/spirometer_3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">3-Ball Spirometer</a></td>
                        <td>₹199.00</td>
                        <td class="fw-bold">98</td>
                        <td>₹19,502</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../assets/images/images/stethoscope_3.webp" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Stethoscope</a></td>
                        <td>₹300.00</td>
                        <td class="fw-bold">74</td>
                        <td>₹22,200</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../assets/images/images/bp-monitor_3.webp" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sphygmomanometer (Manual Blood Preasure Monitor)</a></td>
                        <td>₹688.00</td>
                        <td class="fw-bold">63</td>
                        <td>₹43,344</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="../assets/images/images/pulse-oximeter_2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Pulse Oximeter</a></td>
                        <td>₹389.00</td>
                        <td class="fw-bold">41</td>
                        <td>₹15,949</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div> -->

          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->
<?php include('../admin/include/footer.php') ?>