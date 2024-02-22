<?php include('./include/header.php') ?>
<?php include('./include/bodyheader.php') ?>

    <!-- main-tab-section -->
    <section class="main-tab-section mt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">My Account</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-5">
                    <div class="title">
                        <h1>My Account</h1>
                    </div>
                    <div class="tabs-container">
                        <nav>
                            <div class="nav nav-tabs flex-column mobile-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-app-language-tab" data-bs-toggle="tab" data-bs-target="#nav-app-language" type="button" role="tab" aria-controls="nav-app-language" aria-selected="true">
                                    <div class="my-acc-icon">
                                        <img src="./assets/images/images/UserProfile.svg" alt="User Profile" />
                                    </div>
                                    User Profile
                                </button>
                                <!-- 
                                <button class="nav-link" id="nav-mobile-number-tab" data-bs-toggle="tab" data-bs-target="#nav-mobile-number" type="button" role="tab" aria-controls="nav-mobile-number" aria-selected="false">
                                    <div class="my-acc-icon">
                                        <img src="./assets/images/images/Address-Management.svg" alt="Address Management" />
                                    </div>
                                    Address Management
                                </button>
                                -->
                                <button class="nav-link" id="nav-help-tab" data-bs-toggle="tab" data-bs-target="#nav-help" type="button" role="tab" aria-controls="nav-help" aria-selected="false">
                                    <div class="my-acc-icon">
                                        <img src="./assets/images/images/Change-Password.svg" alt="Change Password" />
                                    </div>
                                    Change Password
                                </button>
                                <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="false">
                                    <div class="my-acc-icon">
                                        <img src="./assets/images/images/order.svg" alt="My Orders" />
                                    </div>
                                    My Orders
                                </button>
                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                                    <div class="my-acc-icon">
                                        <img src="./assets/images/images/wishlist.svg" alt="Wishlist" />
                                    </div>
                                    Wishlist
                                </button>
                                <a href="exit1.php" class="nav-link" >
                                        <div class="my-acc-icon">
                                            <img src="./assets/images/images/Logout.svg" alt="Logout" />
                                        </div>
                                        Logout
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-7">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane app-lang-wrap fade show active" id="nav-app-language" role="tabpanel" aria-labelledby="nav-app-language-tab">
                            <h2 class="ps-3">User Profile</h2>
                            <div class="common-form-section cmn-bg-tab">
                                <?php
                            include "confing.php";
                            $id = $_SESSION['id'];
                            
                            $sql = "SELECT * FROM users  WHERE id = {$id}";
                            
                            $result = mysqli_query($conn,$sql) or die("Query Feiled");
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                    <form action="profile_save.php" method="POST" >
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">First Name*</label>
                                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Mark" value="<?php echo $row['first_name']; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Last Name*</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Ruffalo"  value="<?php echo $row['last_name']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Email Address*</label>
                                                <input type="text" name="email" id="email" class="form-control" placeholder="markruffalo@gmail.com" value="<?php echo $row['email']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Gender*</label>
                                                <select name="gender" id="gender" class="form-control">
                                                    <option value="" disabled selected>Select Gender</option>
                                                    <option <?php if($row['gender'] == 'male'){ ?> selected <?php } ?> value="male">Male</option>
                                                    <option <?php if($row['gender'] == 'female'){ ?> selected <?php } ?> value="female">Female</option>
                                                    <option <?php if($row['gender'] == 'other'){ ?> selected <?php } ?> value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Date of Birth*</label>
                                                <input type="date" class="form-control" name="dob" id="dob" value="<?php echo $row['dob']; ?>" />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="">Contact Number*</label>
                                                <input type="number"  class="form-control" name="phone_no" id="phone_no" value="<?php echo $row['phone_no']; ?>" placeholder="98980 98009" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="">Address (Street/Area)*</label>
                                                <textarea cols="30" rows="2" name="address" id="address"  class="form-control" placeholder="201-203, Rang Royal Residency,"><?php echo $row['address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">City/District/Town*</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="Ahmedabad">Ahmedabad</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">State*</label>
                                                <select name="" id="" class="form-control">
                                                    <option value="Gujarat">Gujarat</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="">Postal Code*</label>
                                                <input type="number" name="postal_code" id="postal_code" value="<?php echo $row['postal_code']; ?>" class="form-control" placeholder="380081" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- <div class="checkbox-wrap text-center">
                                        <div class="form-group">
                                            <input type="checkbox" id="default" name="default" value="default" checked>
                                            <label for="default">default</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="home" name="radio-group" checked>
                                            <label for="home">Home</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="radio" id="work" name="radio-group">
                                            <label for="work">Work</label>
                                        </div>
                                    </div> -->
                                    <div class="text-center">
                                        <button type="submit" class="g-btn f-btn mb-0" name="save" id="save">Save</button>
                                    </div>
                                </form>
                            <?php
                                    }
                                }else{
                                    echo "Result Not Found.";
                                }
                            ?>
                            </div>
                        </div>
                        <!-- 
                        <div class="tab-pane fade" id="nav-mobile-number" role="tabpanel" aria-labelledby="nav-mobile-number-tab">
                            <h2 class="ps-3">Address Management</h2>
                            <div class="app-management-main cmn-bg-tab">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="app-management">
                                            <h3>Mark Ruffalo</h3>
                                            <p class="p-14-dark">3rd Floor, Sun Complex, S.G. Highway Road, Ahmedabad, Gujarat-380050.</p>
                                            <p class="p-14-dark"><a href="mailto:markruffalo@gmail.com" class="p-14-dark">markruffalo@gmail.com</a></p>
                                            <p class="p-14-dark"><a href="tel+919898098009" class="p-14-dark">98980 98009</a></p>
                                            <div class="tab-wrap">
                                                <div>
                                                    <p class="tag">default</p>
                                                    <p class="tag">home</p>
                                                </div>
                                                <div>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#delete-address"><img src="./assets/images/images/delete-icon.svg" alt="Delete" /></p>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#myModal"><img src="./assets/images/images/edit.svg" alt="Edit" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="app-management">
                                            <h3>Mark Ruffalo</h3>
                                            <p class="p-14-dark">3rd Floor, Sun Complex, S.G. Highway Road, Ahmedabad, Gujarat-380050.</p>
                                            <p class="p-14-dark"><a href="mailto:markruffalo@gmail.com" class="p-14-dark">markruffalo@gmail.com</a></p>
                                            <p class="p-14-dark"><a href="tel+919898098009" class="p-14-dark">98980 98009</a></p>
                                            <div class="tab-wrap">
                                                <div>
                                                    <p class="tag">default</p>
                                                    <p class="tag">home</p>
                                                </div>
                                                <div>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#delete-address"><img src="./assets/images/images/delete-icon.svg" alt="Delete" /></p>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#myModal"><img src="./assets/images/images/edit.svg" alt="Edit" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="app-management">
                                            <h3>Mark Ruffalo</h3>
                                            <p class="p-14-dark">3rd Floor, Sun Complex, S.G. Highway Road, Ahmedabad, Gujarat-380050.</p>
                                            <p class="p-14-dark"><a href="mailto:markruffalo@gmail.com" class="p-14-dark">markruffalo@gmail.com</a></p>
                                            <p class="p-14-dark"><a href="tel+919898098009" class="p-14-dark">98980 98009</a></p>
                                            <div class="tab-wrap">
                                                <div>
                                                    <p class="tag">default</p>
                                                    <p class="tag">home</p>
                                                </div>
                                                <div>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#delete-address"><img src="./assets/images/images/delete-icon.svg" alt="Delete" /></p>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#myModal"><img src="./assets/images/images/edit.svg" alt="Edit" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="app-management">
                                            <h3>Mark Ruffalo</h3>
                                            <p class="p-14-dark">3rd Floor, Sun Complex, S.G. Highway Road, Ahmedabad, Gujarat-380050.</p>
                                            <p class="p-14-dark"><a href="mailto:markruffalo@gmail.com" class="p-14-dark">markruffalo@gmail.com</a></p>
                                            <p class="p-14-dark"><a href="tel+919898098009" class="p-14-dark">98980 98009</a></p>
                                            <div class="tab-wrap">
                                                <div>
                                                    <p class="tag">default</p>
                                                    <p class="tag">home</p>
                                                </div>
                                                <div>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#delete-address"><img src="./assets/images/images/delete-icon.svg" alt="Delete" /></p>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#myModal"><img src="./assets/images/images/edit.svg" alt="Edit" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="app-management">
                                            <h3>Mark Ruffalo</h3>
                                            <p class="p-14-dark">3rd Floor, Sun Complex, S.G. Highway Road, Ahmedabad, Gujarat-380050.</p>
                                            <p class="p-14-dark"><a href="mailto:markruffalo@gmail.com" class="p-14-dark">markruffalo@gmail.com</a></p>
                                            <p class="p-14-dark"><a href="tel+919898098009" class="p-14-dark">98980 98009</a></p>
                                            <div class="tab-wrap">
                                                <div>
                                                    <p class="tag">default</p>
                                                    <p class="tag">home</p>
                                                </div>
                                                <div>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#delete-address"><img src="./assets/images/images/delete-icon.svg" alt="Delete" /></p>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#myModal"><img src="./assets/images/images/edit.svg" alt="Edit" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="app-management">
                                            <h3>Mark Ruffalo</h3>
                                            <p class="p-14-dark">3rd Floor, Sun Complex, S.G. Highway Road, Ahmedabad, Gujarat-380050.</p>
                                            <p class="p-14-dark"><a href="mailto:markruffalo@gmail.com" class="p-14-dark">markruffalo@gmail.com</a></p>
                                            <p class="p-14-dark"><a href="tel+919898098009" class="p-14-dark">98980 98009</a></p>
                                            <div class="tab-wrap">
                                                <div>
                                                    <p class="tag">default</p>
                                                    <p class="tag">home</p>
                                                </div>
                                                <div>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#delete-address"><img src="./assets/images/images/delete-icon.svg" alt="Delete" /></p>
                                                    <p class="tag r-10" data-bs-toggle="modal" data-bs-target="#myModal"><img src="./assets/images/images/edit.svg" alt="Edit" /></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         -->
                        <div class="tab-pane fade help-wrap" id="nav-help" role="tabpanel" aria-labelledby="nav-help-tab">
                            <h2 class="ps-3">Change Password</h2>
                            <div class="common-form-section cmn-bg-tab change-pass-wrap">
                                <form>
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="form-group password-group">
                                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                                <label for="">Current Password</label>
                                                <input type="password" placeholder="Password" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group password-group">
                                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                                <label for="">Create New Password</label>
                                                <input type="password" placeholder="Password" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group password-group">
                                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                                <label for="">Confirm New Password</label>
                                                <input type="password" placeholder="Password" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="g-btn f-btn mb-0">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade about-wrap" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                            <div class="row">
                                <div class="col-lg-12 accordion" id="accordionExample">
                                    <div class="order-wrapper">
                                        <h2 class="ps-3">My Orders</h2>
                                        <div>
                                            <form action="">
                                                <input type="text" class="form-control" />
                                            </form>
                                        </div>
                                    </div>
                                    <div class="my-order-wrap accordion-item common-form-section cmn-bg-tab">
                                        <div class="my-order-inner app-management">
                                            <div class="my-oreder-left">
                                                <h3>Order no <span> : #V4VS1123456G</span></h3>
                                                <p class="p-14-dark"> <span class="span-title"> Order Date </span> <span> : 23 June 2023  |  3:00 PM</span></p>
                                                <p class="p-14-dark"> <span class="span-title"> Delivery Date </span> <span> : 25 June 2023  </span> </p>
                                                <p class="p-14-dark"> <span class="span-title"> Order Status </span> <span class="green-semi-14"> : Inprogress</span> </p>
                                                <p class="p-14-dark"> <span class="span-title"> Delivery Date </span> <span>: Cash on delivery</span> </p>
                                            </div>
                                            <div class="my-oreder-right">
                                                <h3>Brasilio Wille</h3>
                                                <p class="p-14-dark">502, Rox Street - II, Small Pound, Nr. S.G High Cross Road, Thaltej.</p>
                                                <p class="p-14-dark">markruffalo@gmail.com</p>
                                                <p class="p-14-dark">98980 98009</p>
                                            </div>
                                        </div>
                                        <div class="total-item-wrap">
                                            <div class="total-item-left">
                                                <p class="p-14-dark mb-0"> <span class="span-title">Total Items</span>  <span class="blue-text">: (4)</span></p>
                                            </div>
                                            <div class="total-item-right">
                                                <div class="rate-wrap" data-bs-toggle="modal" data-bs-target="#rate-text">
                                                    <div class="rating__stars">
                                                        <input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
                                                        <label class="rating__label" for="rating-1">
                                                            <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                                <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                                                <g class="rating__star-body-g">
                                                                    <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                                                </g>
                                                            </svg>
                                                            <span class="rating__sr">1 star</span>
                                                        </label>
                                                    </div>
                                                    <p class="rate-text">Rate & Review</p>
                                                </div>
                                                <div class="acc-wrap accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rating-review-main-wrap excellent-wrapper">
                                            <div class="col-lg-12 rating-wrapper-main">
                                                <h2>Rating</h2>
                                                <div class="rating__stars">
                                                    <input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
                                                    <input id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
                                                    <input id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
                                                    <input id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
                                                    <input id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
                                                    <label class="rating__label" for="rating-1">
                                                        <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                            <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1"></ellipse>
                                                            <g class="rating__star-body-g">
                                                                <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="rating__sr">1 star</span>
                                                    </label>
                                                    <label class="rating__label" for="rating-2">
                                                        <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                            <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1"></ellipse>
                                                            <g class="rating__star-body-g">
                                                                <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="rating__sr">2 stars</span>
                                                    </label>
                                                    <label class="rating__label" for="rating-3">
                                                        <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                            <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1"></ellipse>
                                                            <g class="rating__star-body-g">
                                                                <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="rating__sr">3 stars</span>
                                                    </label>
                                                    <label class="rating__label" for="rating-4">
                                                        <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                            <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1"></ellipse>
                                                            <g class="rating__star-body-g">
                                                                <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="rating__sr">4 stars</span>
                                                    </label>
                                                    <label class="rating__label" for="rating-5">
                                                        <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                            <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1"></ellipse>
                                                            <g class="rating__star-body-g">
                                                                <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z"></path>
                                                            </g>
                                                        </svg>
                                                        <span class="rating__sr">5 stars</span>
                                                    </label>
                                                </div>
                                                <span class="green-semi-14"> Excellent </span>
                                            </div>
                                            <p class="p-14-dark mb-0"> <span class="span-title"> Review </span> <span>: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's    
                                                standard dummy text ever since the 1500s,</span> 
                                            </p>
                                        </div>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrap">
                                                    <table class="table">
                                                    <tbody>
                                                        <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                                                </div>
                                                            </div>
                                                        
                                                        </td>
                                                        <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1630.00</p>
                                                            </div>
                                                        </td>
                                                        <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                        </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1630.00</p>
                                                            </div>
                                                            </td>
                                                            <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                            </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                        <td>
                                                        <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                                                </div>
                                                            </div>
                                                            
                                                        </td>
                                                        <td>
                                                        <div class="product-price-wrap">
                                                                <p class="dark-text">₹1630.00</p>
                                                            </div>
                                                        </td>
                                                        <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                        </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                                                </div>
                                                            </div>
                                                                
                                                            </td>
                                                            <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1630.00</p>
                                                            </div>
                                                            </td>
                                                            <td class="delete-wrap">
                                                                <img src="./assets/images/images/delete.png" alt="Delete" />
                                                            </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <!-- <td>
                                                                <div class="main-dis">
                                                                    <p class="light-text">Discount :</p>
                                                                    <p class="green-text">- ₹6,897.00</p>
                                                                </div>
                                                            </td> -->
                                                            <td>
                                                                <div class="main-dis">
                                                                    <p class="light-text">Grand Total :</p>
                                                                    <p class="dark-text">₹6,520.00</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                    <!-- 
                                                    <div class="tracking-wrap">
                                                        <h2>Tracking:</h2>
                                                        <div class="row justify-content-between order-wrap-main">
                                                            <div class="order-tracking completed">
                                                                <span class="is-complete"></span>
                                                                <p>Order Placed</p>
                                                            </div>
                                                            <div class="order-tracking completed">
                                                                <span class="inprogress"></span>
                                                                <p>Inprogress</p>
                                                            </div>
                                                            <div class="order-tracking shipped-tracking">
                                                                <span class="is-complete shipped"></span>
                                                                <p>shipped</p>
                                                            </div>
                                                            <div class="order-tracking shipped-tracking">
                                                                <span class="is-complete shipped"></span>
                                                                <p>Delivered</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-order-wrap accordion-item common-form-section cmn-bg-tab">
                                        <div class="my-order-inner app-management">
                                            <div class="my-oreder-left">
                                                <h3>Order no <span> : #V4VS1123456G</span></h3>
                                                <p class="p-14-dark"> <span class="span-title"> Order Date </span> <span> : 23 June 2023  |  3:00 PM</span></p>
                                                <p class="p-14-dark"> <span class="span-title"> Delivery Date </span> <span> : 25 June 2023  </span> </p>
                                                <p class="p-14-dark"> <span class="span-title"> Order Status </span> <span class="yellow-semi-14"> : Inprogress</span> </p>
                                                <p class="p-14-dark"> <span class="span-title"> Delivery Date </span> <span>: Cash on delivery</span> </p>
                                            </div>
                                            <div class="my-oreder-right">
                                                <h3>Brasilio Wille</h3>
                                                <p class="p-14-dark">502, Rox Street - II, Small Pound, Nr. S.G High Cross Road, Thaltej.</p>
                                                <p class="p-14-dark">markruffalo@gmail.com</p>
                                                <p class="p-14-dark">98980 98009</p>
                                            </div>
                                        </div>
                                        <div class="total-item-wrap">
                                            <div class="total-item-left">
                                                <p class="p-14-dark mb-0"> <span class="span-title">Total Items</span>  <span class="blue-text">: (4)</span></p>
                                            </div>
                                            <div class="total-item-right">
                                                <div class="rate-wrap" data-bs-toggle="modal" data-bs-target="#rate-text">
                                                    <div class="rating__stars">
                                                        <input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
                                                        <label class="rating__label" for="rating-1">
                                                            <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                                <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                                                <g class="rating__star-body-g">
                                                                    <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                                                </g>
                                                            </svg>
                                                            <span class="rating__sr">1 star</span>
                                                        </label>
                                                    </div>
                                                    <p class="rate-text">Rate & Review</p>
                                                </div>
                                                <div class="acc-wrap accordion-header" id="headingTwo">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                        Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrap">
                                                    <table class="table">
                                                    <tbody>
                                                        <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="/assets/images/Image1.png" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                </div>
                                                            </div>
                                                        
                                                        </td>
                                                        <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1500.00</p>
                                                                <p class="light-text">₹4,999.00</p>
                                                                <p class="green-text">68% off</p>
                                                            </div>
                                                        </td>
                                                        <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                        </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="/assets/images/Image2.png" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1500.00</p>
                                                                <p class="light-text">₹4,999.00</p>
                                                                <p class="green-text">68% off</p>
                                                            </div>
                                                            </td>
                                                            <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                            </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="/assets/images/Image3.png" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                </div>
                                                            </div>
                                                            
                                                        </td>
                                                        <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1500.00</p>
                                                                <p class="light-text">₹4,999.00</p>
                                                                <p class="green-text">68% off</p>
                                                            </div>
                                                        </td>
                                                        <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                        </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                                <div class="products-detail-wrap">
                                                                    <div class="product-image-wrap">
                                                                        <img src="/assets/images/Image4.png" alt="" />
                                                                    </div>
                                                                    <div class="product-detail-list">
                                                                        <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </td>
                                                            <td>
                                                                <div class="product-price-wrap">
                                                                    <p class="dark-text">₹1500.00</p>
                                                                    <p class="light-text">₹4,999.00</p>
                                                                    <p class="green-text">68% off</p>
                                                                </div>
                                                            </td>
                                                            <td class="delete-wrap">
                                                                <img src="./assets/images/images/delete.png" alt="Delete" />
                                                            </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                                <div class="main-dis">
                                                                    <p class="light-text">Discount :</p>
                                                                    <p class="green-text">- ₹6,897.00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="main-dis">
                                                                    <p class="light-text">Grand Total :</p>
                                                                    <p class="dark-text">₹5,050.50</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                    <div class="tracking-wrap">
                                                        <h2>Tracking:</h2>
                                                        <div class="row justify-content-between order-wrap-main">
                                                            <div class="order-tracking completed">
                                                                <span class="is-complete"></span>
                                                                <p>Order Placed</p>
                                                            </div>
                                                            <div class="order-tracking completed">
                                                                <span class="inprogress"></span>
                                                                <p>Inprogress</p>
                                                            </div>
                                                            <div class="order-tracking shipped-tracking">
                                                                <span class="is-complete shipped"></span>
                                                                <p>shipped</p>
                                                            </div>
                                                            <div class="order-tracking shipped-tracking">
                                                                <span class="is-complete shipped"></span>
                                                                <p>Delivered</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-order-wrap accordion-item common-form-section cmn-bg-tab">
                                        <div class="my-order-inner app-management">
                                            <div class="my-oreder-left">
                                                <h3>Order no <span> : #V4VS1123456G</span></h3>
                                                <p class="p-14-dark"> <span class="span-title"> Order Date </span> <span> : 23 June 2023  |  3:00 PM</span></p>
                                                <p class="p-14-dark"> <span class="span-title"> Delivery Date </span> <span> : 25 June 2023  </span> </p>
                                                <p class="p-14-dark"> <span class="span-title"> Order Status </span> <span class="yellow-semi-14"> : Inprogress</span> </p>
                                                <p class="p-14-dark"> <span class="span-title"> Delivery Date </span> <span>: Cash on delivery</span> </p>
                                            </div>
                                            <div class="my-oreder-right">
                                                <h3>Brasilio Wille</h3>
                                                <p class="p-14-dark">502, Rox Street - II, Small Pound, Nr. S.G High Cross Road, Thaltej.</p>
                                                <p class="p-14-dark">markruffalo@gmail.com</p>
                                                <p class="p-14-dark">98980 98009</p>
                                            </div>
                                        </div>
                                        <div class="total-item-wrap">
                                            <div class="total-item-left">
                                                <p class="p-14-dark mb-0"> <span class="span-title">Total Items</span>  <span class="blue-text">: (4)</span></p>
                                            </div>
                                            <div class="total-item-right">
                                                <div class="rate-wrap" data-bs-toggle="modal" data-bs-target="#rate-text">
                                                    <div class="rating__stars">
                                                        <input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
                                                        <label class="rating__label" for="rating-1">
                                                            <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                                                <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                                                <g class="rating__star-body-g">
                                                                    <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                                                </g>
                                                            </svg>
                                                            <span class="rating__sr">1 star</span>
                                                        </label>
                                                    </div>
                                                    <p class="rate-text">Rate & Review</p>
                                                </div>
                                                <div class="acc-wrap accordion-header" id="headingThree">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                        Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="table-wrap">
                                                    <table class="table">
                                                    <tbody>
                                                        <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="/assets/images/Image1.png" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                </div>
                                                            </div>
                                                        
                                                        </td>
                                                        <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1500.00</p>
                                                                <p class="light-text">₹4,999.00</p>
                                                                <p class="green-text">68% off</p>
                                                            </div>
                                                        </td>
                                                        <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                        </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="/assets/images/Image2.png" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                </div>
                                                            </div>
                                                            </td>
                                                            <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1500.00</p>
                                                                <p class="light-text">₹4,999.00</p>
                                                                <p class="green-text">68% off</p>
                                                            </div>
                                                            </td>
                                                            <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                            </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                        <td>
                                                            <div class="products-detail-wrap">
                                                                <div class="product-image-wrap">
                                                                    <img src="/assets/images/Image3.png" alt="" />
                                                                </div>
                                                                <div class="product-detail-list">
                                                                    <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                    <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                    <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                </div>
                                                            </div>
                                                            
                                                        </td>
                                                        <td>
                                                            <div class="product-price-wrap">
                                                                <p class="dark-text">₹1500.00</p>
                                                                <p class="light-text">₹4,999.00</p>
                                                                <p class="green-text">68% off</p>
                                                            </div>
                                                        </td>
                                                        <td class="delete-wrap">
                                                            <img src="./assets/images/images/delete.png" alt="Delete" />
                                                        </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                                <div class="products-detail-wrap">
                                                                    <div class="product-image-wrap">
                                                                        <img src="/assets/images/Image4.png" alt="" />
                                                                    </div>
                                                                    <div class="product-detail-list">
                                                                        <p class="p-14-dark">Trendy & Stylish Pink Coat Spring Fashion Trend With Purse</p>
                                                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>Pink</span></p>
                                                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>M</span></p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </td>
                                                            <td>
                                                                <div class="product-price-wrap">
                                                                    <p class="dark-text">₹1500.00</p>
                                                                    <p class="light-text">₹4,999.00</p>
                                                                    <p class="green-text">68% off</p>
                                                                </div>
                                                            </td>
                                                            <td class="delete-wrap">
                                                                <img src="./assets/images/images/delete.png" alt="Delete" />
                                                            </td>
                                                        </tr>
                                                        <tr class="alert" role="alert">
                                                            <td>
                                                                <div class="main-dis">
                                                                    <p class="light-text">Discount :</p>
                                                                    <p class="green-text">- ₹6,897.00</p>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="main-dis">
                                                                    <p class="light-text">Grand Total :</p>
                                                                    <p class="dark-text">₹5,050.50</p>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    </table>
                                                    <div class="tracking-wrap">
                                                        <h2>Tracking:</h2>
                                                        <div class="row justify-content-between order-wrap-main">
                                                            <div class="order-tracking completed">
                                                                <span class="is-complete"></span>
                                                                <p>Order Placed</p>
                                                            </div>
                                                            <div class="order-tracking completed">
                                                                <span class="inprogress"></span>
                                                                <p>Inprogress</p>
                                                            </div>
                                                            <div class="order-tracking shipped-tracking">
                                                                <span class="is-complete shipped"></span>
                                                                <p>shipped</p>
                                                            </div>
                                                            <div class="order-tracking shipped-tracking">
                                                                <span class="is-complete shipped"></span>
                                                                <p>Delivered</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade Wishlist-wrap" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <h2 class="ps-3">Wishlist</h2>
                            <div class="common-form-section cmn-bg-tab change-pass-wrap text-center">
                                <img src="./assets/images/wishlist-icon.svg" class="heart-image" alt="heart" />
                                <h2>Your Wishlist is empty</h2>
                                <p>You don't have any products in the wish list yet. You will get a lot of interesting products on our shop page. </p>
                                <div class="text-center buttons-wrap submit-btn-wrap justify-content-center">
                                    <button type="submit" class="g-btn f-btn mb-0" name="shopping" id="shopping"> Continue Shopping
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- The Edit Address Modal 
    <div class="modal edit-address-model" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <h2>Edit Address</h2>
            <div class="common-form-section cmn-bg-tab">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Name*</label>
                                <input type="text" class="form-control" placeholder="Mark Ruffalo" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Email Address*</label>
                                <input type="text" class="form-control" placeholder="markruffalo@gmail.com" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Gender*</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Date of Birth*</label>
                                <input type="date" class="form-control" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Address (Street/Area)*</label>
                                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="201-203, Rang Royal Residency,"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">City/District/Town*</label>
                                <select name="" id="" class="form-control">
                                    <option value="Ahmedabad">Ahmedabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">State*</label>
                                <select name="" id="" class="form-control">
                                    <option value="Gujarat">Gujarat</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Postal Code*</label>
                                <input type="number"  class="form-control" placeholder="380081" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==6) return false;" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="">Contact Number*</label>
                                <input type="number"  class="form-control" placeholder="98980 98009" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" />
                            </div>
                        </div>
                    </div>
                    <div class="checkbox-wrap text-center">
                        <div class="form-group">
                            <input type="checkbox" id="default1" name="default1" value="default1" checked>
                            <label for="default1">default</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" id="home1" name="radio-group" checked>
                            <label for="home1">Home</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" id="work1" name="radio-group">
                            <label for="work1">Work</label>
                        </div>
                    </div>
                    <div class="text-center buttons-wrap">
                        <button type="submit" class="g-btn f-btn mb-0">Update</button>
                        <button type="submit" class="g-btn f-btn border-btn mb-0">Cancel</button>
                    </div>
                </form>
            </div>
        </div> 
        </div>-->
    </div>

    <!-- The Deleter Address Modal
    <div class="modal delete-address-model" id="delete-address">
        <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <h2>Delete Address</h2>
            <div class="common-form-section cmn-bg-tab">
                <div class="dlt-modal-wrap text-center">
                    <img src="./assets/images/images/delete.svg" alt="Delete Address" />
                    <h2 class="border-0">Are you sure you want to delete this address?</h2>
                </div>
                <div class="text-center y-n-wrap buttons-wrap">
                    <button type="submit" class="g-btn f-btn mb-0">Yes</button>
                    <button type="submit" class="g-btn f-btn border-btn mb-0">No</button>
                </div>
            </div>
        </div>
        </div>
    </div>-->

    <!-- The Modal -->
    <div class="modal delete-address-model" id="rate-text">
        <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            <h2>Rate this Product</h2>
            <div class="common-form-section cmn-bg-tab">
                <form class="py-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Enter/Select the product name</label>
                                <select name="" id="" class="form-control">
                                    <option value="Gujarat">Enter/Select the product name</option>
                                    <option value="Gujarat">Enter/Select the product name</option>
                                    <option value="Gujarat">Enter/Select the product name</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="">Review the product</label>
                                <textarea name="" id="" rows="3" placeholder="Write a review the product" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 rating-wrapper-main">
                            <h2>Rating</h2>
                            <div class="rating__stars">
                                <input id="rating-1" class="rating__input rating__input-1" type="radio" name="rating" value="1">
                                <input id="rating-2" class="rating__input rating__input-2" type="radio" name="rating" value="2">
                                <input id="rating-3" class="rating__input rating__input-3" type="radio" name="rating" value="3">
                                <input id="rating-4" class="rating__input rating__input-4" type="radio" name="rating" value="4">
                                <input id="rating-5" class="rating__input rating__input-5" type="radio" name="rating" value="5">
                                <label class="rating__label" for="rating-1">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                        <g class="rating__star-body-g">
                                            <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                        </g>
                                    </svg>
                                    <span class="rating__sr">1 star</span>
                                </label>
                                <label class="rating__label" for="rating-2">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                        <g class="rating__star-body-g">
                                            <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                        </g>
                                    </svg>
                                    <span class="rating__sr">2 stars</span>
                                </label>
                                <label class="rating__label" for="rating-3">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                        <g class="rating__star-body-g">
                                            <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                        </g>
                                    </svg>
                                    <span class="rating__sr">3 stars</span>
                                </label>
                                <label class="rating__label" for="rating-4">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                        <g class="rating__star-body-g">
                                            <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                        </g>
                                    </svg>
                                    <span class="rating__sr">4 stars</span>
                                </label>
                                <label class="rating__label" for="rating-5">
                                    <svg class="rating__star" width="32" height="32" viewBox="0 0 32 32" aria-hidden="true">
                                        <ellipse class="rating__star-shadow" cx="16" cy="31" rx="16" ry="1" />
                                        <g class="rating__star-body-g">
                                            <path class="rating__star-body" d="M15.5,26.8l-8.2,4.3c-0.8,0.4-1.7-0.3-1.6-1.1l1.6-9.2c0.1-0.3-0.1-0.7-0.3-1l-6.7-6.5c-0.6-0.6-0.3-1.7,0.6-1.8l9.2-1.3c0.4-0.1,0.7-0.3,0.8-0.6L15,1.3c0.4-0.8,1.5-0.8,1.9,0l4.1,8.3c0.2,0.3,0.5,0.5,0.8,0.6l9.2,1.3c0.9,0.1,1.2,1.2,0.6,1.8L25,19.9c-0.3,0.2-0.4,0.6-0.3,1l1.6,9.2c0.2,0.9-0.8,1.5-1.6,1.1l-8.2-4.3C16.2,26.7,15.8,26.7,15.5,26.8z" />
                                        </g>
                                    </svg>
                                    <span class="rating__sr">5 stars</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="text-center buttons-wrap submit-btn-wrap">
                        <button type="submit" class="g-btn f-btn mb-0">Submit</button>
                        <button type="submit" class="g-btn f-btn border-btn mb-0">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>

<?php include('./include/bodyfooter.php') ?>
<?php include('./include/footer.php') ?>