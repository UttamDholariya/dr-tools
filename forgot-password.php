<?php include('./include/header.php') ?>
    <section class="section-comming-soon common-form-section overflow-hidden forgot-password-section position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="form-logo-wrap">
                        <img src="./assets/images/images/logo.svg" class="form-logo" alt="logo" />
                    </div>
                </div>
                <div class="col-xl-7 col-lg-5">
                    <div class="img-wrap">
                        <img src="./assets/images/images/signin.svg" alt="Signin" />
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7">
                    <form action="password_change.php" method="POST">
                        <div class="row">
                            <?php 
                                if(isset($_SESSION['status']))
                                {
                                    ?>
                                    <div class="alert alert-success">
                                        <h5><?= $_SESSION['status']; ?></h5>
                                    </div>
                                    <?php
                                    unset($_SESSION['status']);
                                }
                            ?>
                            <div class="col-lg-12">
                                <div class="form-title">
                                    <h1>Forgot Password</h1>
                                    <p>Enter the email you use for <span>DR. TOOL</span> , and we'll help you create a new password.</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email"  name="email" class="form-control" placeholder="Enter your email" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="f-btn" name="forgot">Send</button>
                            </div>
                            <div class="col-lg-12">
                                <div class="bottom-link">
                                    <p><a href="./signin.php">Back to login</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include('./include/footer.php') ?>