<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active">Add Product</li>
            </ol>
        </nav>
    </div>
    <section class="section" action="add_product.php" method="POST">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Add Product</h5>
                        <form class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating" >
                                    <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Enter Product Name">
                                    <label for="pro_name">Product Name</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
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

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="quantity" name="quentity" placeholder="Enter Product Quantity">
                                    <label for="quantity">Product Quantity</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Enter Product Details" id="pro_details" name="pro_detils" style="height: 100px;"></textarea>
                                    <label for="pro_details">Product Details</label>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" class="form-control" id="pro_image" name="pro_img">
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

<?php
if ($_SERVER['pro_submit'] == 'POST') {
$pro_name = $_POST['pro_name']; 
$pro_price = $_POST['pro_price']; 
$pro_desc = $_POST['pro_desc']; 
$quantity = $_POST['quantity']; 
$pro_details = $_POST['pro_details'];
$pro_img = $_POST['pro_img'];

$mysqli = new mysqli('localhost', 'root', '', 'drtools'); 

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Prepare the SQL statement
$stmt = $mysqli->prepare("INSERT INTO product (pro_name,pro_price,pro_desc,quantity,pro_details,pro_img) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssi", $pro_name, $pro_price, $pro_desc, $quantity, $pro_details, $pro_img);


// Execute the statement
if($stmt->execute()){
    ?>
    <script>alert("Poduct Inserted Successfully") </script>
    <?php
} 
else
{
    ?>
    <script> alert("Poduct Not Inserted ") </script>
    <?php
    echo "Error: " . $stmt->error;
}
header('Location: add_product.php');

// Close the statement and the connection
$stmt->close();
$mysqli->close();
}
?>