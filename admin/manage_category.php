<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Category</li>
                <li class="breadcrumb-item active">Manage Category</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Category</h5><hr>
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Category Name</td>
                                    <td><a href="edit_category.php" class="me-3"><img src="../assets/images/images/edit.svg" alt="Edit" /></a>
                                    <a href="javascript:" class=""><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Category Name</td>
                                    <td><a href="javascript:" class="js_remove_item me-3"><img src="../assets/images/images/edit.svg" alt="Edit"/></a>
                                    <a href="javascript:" class="js_remove_item me-3"><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
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