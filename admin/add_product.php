<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active"><a href="add_product.php">Add Product</a></li>
            </ol>
        </nav>
    </div>
    <section class="section" >
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
<<<<<<< HEAD
                        <h5 class="card-t
                        itle">Add Product</h5>
                        <form class="row g-3">
=======
                        <h5 class="card-title">Add Product</h5>
                        <form class="row g-3" action="product_add.php" method="POST" enctype="multipart/form-data">
>>>>>>> 72c124104a3e2438c004cccae0f34a78f5d927ad
                            <div class="col-md-12">
                                <div class="form-floating" >
                                    <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Enter Product Name">
                                    <label for="pro_name">Product Name</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating" >
                                    <input type="text" class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Price">
                                    <label for="pro_price">Product Price</label>
                                </div>
                            </div>
                                
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Enter Product Description" id="pro_desc" name="pro_desc" style="height: 100px;"></textarea>
                                    <label for="pro_desc">Product Description</label>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="form-floating">
                                    <label for="pro_categories">Categories</label>
                                    <select name="categories" class="col-4">
                                        <option disabled>Selected Cetegories</option>
                                        <?
                                            // $conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
                                            // $sql = "SELECT * FROM category";
                                            // $result = mysqli_query($conn,$sql) or die("Query Feiled");
                                            // if(mysqli_num_rows($result) > 0){
                                            //     while($row = mysqli_fetch_assoc($result)){
                                            //         echo "<option value='{$row['id']}'>{$row['cat_name']} </option>"; 
                                            //     }

                                            // }
                                        ?>
                                    </select>
                                </div>
                            </div> -->

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Enter Product Quantity">
                                    <label for="quantity">Product Quantity</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Enter Product Details" id="pro_detail" name="pro_detail" style="height: 100px;"></textarea>
                                    <label for="pro_details">Product Details</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" id="pro_img" name="pro_img" required>
                                </div>
                            </div>
                
                            <div class="text-center">
                                <button type="submit" id="pro_submit" name="pro_submit" class="btn" style="background-color: #2aa1a8;">Add Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../admin/include/footer.php') ?>
