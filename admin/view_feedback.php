<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active"><a href="manage_feedback.php">Manage Feedback</a></li>
                <li class="breadcrumb-item active">View Feddback</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">View Feedback</h5>
                        <form class="row g-3">
                            
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="feedback_id" value="fatched feedback id" disabled>
                                    <label for="category_name">feedback Id :</label>
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
                                    <textarea class="form-control" id="feedback_massege" value="fatched feedback massege" disabled ></textarea>
                                    <label for="category_name">feedback Massege :</label>
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