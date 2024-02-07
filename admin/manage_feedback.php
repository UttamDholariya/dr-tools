<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Manage Feedback</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Feedback</h5><hr>
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>User Id</th>
                                    <th>Feedback Id</th>
                                    <th>Email</th>
                                    <th>phone Number</th>
                                    <th>Feedback Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>11</td>
                                    <td>user@mail.com</td>
                                    <td>9876543210</td>
                                    <td>Feedback Message</td>
                                    <td><a href="view_feedback.php" class="me-3"><img src="../assets/images/images/view.svg" style="height: 16px;width: 16px;" alt="Edit"/></a>
                                    <a href="javascript:" class=""><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12</td>
                                    <td>user@mail.com</td>
                                    <td>9876543210</td>
                                    <td>Feedback Message</td>
                                    <td><a href="view_feedback.php" class="me-3"><img src="../assets/images/images/view.svg" style="height: 16px;width: 16px;" alt="Edit"/></a>
                                    <a href="javascript:" class=""><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../admin/include/footer.php') ?>