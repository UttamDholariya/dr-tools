<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Manage Payment</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Payment</h5><hr>
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Payment Id</th>
                                    <th>Order Id</th>
                                    <th>Payment Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>successful</td>
                                    <td><a href="javascript:" class="me-3"><img src="../assets/images/images/edit.svg" alt="Edit"/></a>
                                    <a href="javascript:" class=""><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>unsuccessful</td>
                                    <td><a href="javascript:" class="me-3"><img src="../assets/images/images/edit.svg" alt="Edit"/></a>
                                    <a href="javascript:" class=""><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../admin/include/footer.php') ?>