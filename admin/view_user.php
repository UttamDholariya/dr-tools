<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active"><a href="manage_user.php">Manage User</a></li>
                <li class="breadcrumb-item active">View User</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">View User Details</h5>
                        <form class="row g-3">

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="user_id" value="fatched user id" disabled>
                                    <label for="category_name">User Id :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="user_name" value="fatched user name" disabled>
                                    <label for="category_name">User Name :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="email" value="fatched email" disabled>
                                    <label for="category_name">Email :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="phone_no" value="fatched phone_no" disabled>
                                    <label for="category_name">Phone_No :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="gender" value="fatched gender" disabled>
                                    <label for="category_name">Gender :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="dob" value="fatched dob" disabled>
                                    <label for="category_name">Date of Birth :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="address" value="fatched user address" disabled ></textarea>
                                    <label for="category_name">User Address :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" value="fatched city" disabled>
                                    <label for="category_name">City :</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="state" value="fatched state" disabled>
                                    <label for="category_name">State :</label>
                                </div>
                            </div>

                           
                
                            <div class="text-center">
                                <button type="submit" class="btn" style="background-color: #2aa1a8;">Go Back</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../admin/include/footer.php') ?>