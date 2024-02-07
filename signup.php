<?php include('./include/header.php') ?>

    <section class="section-comming-soon common-form-section overflow-hidden position-relative">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="logo-signup">
                       <a href="./index.php"> <img src="./assets/images/images/logo.svg" alt="Logo" /></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-5">
                    <div class="img-wrap">
                        <img src="./assets/images/images/signin.svg" alt="Signin" />
                    </div>
                </div>
                <div class="col-xl-5 col-lg-7">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-title">
                                    <p>Welcome</p>
                                    <h1>Create Account</h1>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your first name" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your last name" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group password-group">
                                    <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                    <label for="">Password</label>
                                    <input type="password" placeholder="Password" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group password-group">
                                    <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                    <label for="">Confirm Password</label>
                                    <input type="password" placeholder="Confirm Password" class="form-control" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button class="f-btn">Create</button>
                            </div>
                            <div class="col-lg-12">
                                <div class="bottom-link">
                                    <p>Have an account?  <a href="./signin.php">Log In</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include('./include/footer.php') ?>