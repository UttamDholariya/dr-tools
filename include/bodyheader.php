   <?php session_start(); ?>
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
                        
                        <div class="header-login-wrap">
                            <?php 
                                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                                {
                            ?>
                                <div class="login-wrap">
                                    <a href="./my-account.php"><img src="./assets/images/profile.svg" alt="Profile" /> <?php echo $_SESSION['first_name']; ?> </a>
                                </div>

                                <?php
                                    include "confing.php";
                                    $sql = "SELECT user_type FROM users WHERE id = {$_SESSION['id']}";
                                    $result = mysqli_query($conn,$sql);
                                    $row = mysqli_fetch_assoc($result);
                                    if($row['user_type'] == '0')
                                    {
                                ?>
                                        <div class="login-wrap ms-2">
                                            <a href="./admin/dashboard.php">Admin</a>
                                        </div>
                                <?php
                                    }
                                ?>

                                
                            <?php 
                                } 
                                else 
                                {
                            ?>
                                <div class="login-wrap">
                                    <a href="./signin.php"><img src="./assets/images/profile.svg" alt="Profile" /> Login </a>
                                </div><?php
                                }
                            ?>
                                    
                                

                                <div class="link-cart-wrap">
                                    <a href="./cart.php"><img src="./assets/images/images/Cart.svg" alt="Cart" /></a>
                                    <!-- <a href=""><img src="./assets/images/Like.svg" alt="Like" /></a> -->
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
                            <?php 
                                include "confing.php";
                                
                                if(isset($_GET['cid'])){
                                    $cat_id = $_GET['cid'];
                                }
                                

                                $sql = "SELECT * FROM category ";
                                $result = mysqli_query($conn,$sql) or die("Query Feiled : Category");
                                if(mysqli_num_rows($result) > 0){
                                    $active = "";
                                   
                            ?>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <?php  while($row = mysqli_fetch_assoc($result)){ 
                                    if(isset($_GET['cid'])){
                                        if($row['id'] == $cat_id){
                                            $active = "active";
                                        }else{
                                            $active = "";
                                        }
                                    }
                                echo "<li class='{$active}' class='nav-item dropdown'><a class='dropdown-item nav-link dropdown-toggle' href='listing-page.php?cid={$row['id']}'>{$row['cat_name']} </a> </li>";
                                } ?>
                            </ul>
                            <?php } ?>
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