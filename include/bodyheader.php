   
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="./index.php">
                          <img src="./assets/images/images/logo.svg" alt="logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="./index.php">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="./about.php">About</a>
                            </li>   
                            <li class="nav-item">
                              <a class="nav-link" href="./contact-us.php">Contact Us</a>
                            </li>     
                          </ul>
                        </div>
                        
                                <div class="link-cart-wrap">
                                    <a href="./cart.php"><img src="./assets/images/images/Cart.svg" alt="Cart" /></a>
                                    <a href="./my-account.php"><img src="./assets/images/Like.svg" alt="Like" /></a>
                                </div>
                            
                                <div class="header-login-wrap">
                                    <div class="login-wrap">
                                        <a href="./signin.php"><img src="./assets/images/profile.svg" alt="Profile" /><?php echo $_SESSION['email']; ?> </a>
                                    </div>
                                    <div class="link-cart-wrap">
                                        <a href="./cart.php"><img src="./assets/images/images/Cart.svg" alt="Cart" /></a>
                                        <a href="./my-account.php"><img src="./assets/images/Like.svg" alt="Like" /></a>
                                    </div>
                                </div>
                            <?php 
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- all-category-section -->
    <section class="all-category-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-category-wrap">
                        <div class="dropdown all-category">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">All Category</button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li class="nav-item dropdown">
                                    <a class="dropdown-item nav-link dropdown-toggle" data-bs-toggle="dropdown" href="./about.php">
                                        <div class="icon-wrap">
                                            <img src="./assets/images/images/syringes.png" alt="Consumable & Disposable" />
                                        </div> 
                                        Consumable & Disposable
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <div class="icon-wrap">
                                            <img src=".\assets\images\images\Surgical.png" alt="Monitoring Devices" /> 
                                        </div>
                                        Monitoring Devices
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <div class="icon-wrap">
                                            <img src="./assets/images/images/Diagnosis.svg" alt="Diagnosis" />
                                        </div>
                                         Diagnosis
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <div class="icon-wrap">
                                            <img src=".\assets\images\images\dental.svg" alt="Dental" /> 
                                        </div>
                                        Dental
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <div class="icon-wrap">
                                            <img src=".\assets\images\images\emergency.svg" alt="Emergency" /> 
                                        </div>
                                        Emergency
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <div class="icon-wrap">
                                            <img src=".\assets\images\images\laboratory.svg" alt=" Laboratory" />
                                        </div>
                                        Laboratory
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="#">
                                        <div class="icon-wrap">
                                            <img src=".\assets\images\images\surgical.svg" alt="Surgical" /> 
                                        </div>
                                        Surgical
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="search-wrap">
                            
                            <form action="">
                                <input type="search" class="form-control" placeholder="Search" />
                                <input type="submit" value="search" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>