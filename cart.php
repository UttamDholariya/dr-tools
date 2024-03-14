<?php include('./include/header.php') ?>
<?php include('./include/bodyheader.php') ?>

    <!-- cart section -->
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="row align-items-center listing-row">
                    <div class="col-lg-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <?php 
                    include "confing.php";
                    $user_id = isset($_SESSION['id']) ? $_SESSION['id'] : '';

                    $sql = "SELECT * FROM cart WHERE user_id = $user_id ";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    $sql1 = "SELECT * FROM cart_detail WHERE cart_id = '{$row['cart_id']}' ";
                    $result1 = mysqli_query($conn, $sql1);
                    // $sql2 = "SELECT user_id , pro_id FROM cart WHERE user_id = '$user_id' AND pro_id = '$product_id';";
                    // $result2 = mysqli_query($conn,$sql2) or die("Query Feiled");
                    
                    // $row1 = null;
                    // if ($result2) {
                    //     $row1 = mysqli_fetch_assoc($result2);
                    // }
                    
                    // if($row1 && $row1['user_id'] == $user_id && $row1['pro_id'] == $product_id)
                    // {   
                        
                    // }
                    // else
                    // {
                    //     $sql1 = "INSERT INTO cart (pro_id,user_id,c_quantity,total) VALUES('$product_id','$user_id','1',{$pro_row['pro_price']})";
                    //     $result1 = mysqli_query($conn,$sql1) or die("Query Feiled");
                    // }
                    
                    // $sql = "SELECT * FROM cart WHERE user_id = '$user_id';";
                    // $result = mysqli_query($conn,$sql) or die("Query Feiled");

                    // if(mysqli_num_rows($result) > 0){
                    //     while($row = mysqli_fetch_assoc($result)){
                    
                ?>
                    <table class="table_cart product_detail_table">
                        <thead>
                          <tr class="table_cart--heading">
                            <th data-th="Products Details">Products Details</th>
                            <th data-th="Price">Price</th>
                            <th data-th="Quantity">Quantity</th>
                            <th data-th="Sub Total">Total</th>
                            <th data-th="Action">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row1 = mysqli_fetch_assoc($result1))
                                {
                                    $product = "SELECT * FROM product WHERE id = {$row1['pro_id']}";
                                    $pro_result = mysqli_query($conn,$product) or die("Query Feiled");
                                    $pro_row = mysqli_fetch_assoc($pro_result);
                                    $total = $row1["c_quantity"]*$pro_row['pro_price'];
                            ?>
                                <tr class="item-row">
                                    <td data-th="Products Details">
                                        <div class="products-detail-wrap">
                                            <div class="product-image-wrap">
                                                <img src="admin/Uplode/<?php echo $pro_row['pro_img'] ?>" alt="Image"/>
                                            </div>
                                            <div class="product-detail-list">
                                                <p class="p-14-dark" disabled="true"><?php echo $pro_row['pro_name'] ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th="Price">
                                        <div class="text-start">
                                            <span id="pro_price" class="item_price d-block p-med-18" disabled><?php echo "₹". $pro_row['pro_price'] .".00" ?></span>
                                        </div>
                                    </td>
                                    <td data-th="Quantity">
                                        <div class="qty-wrap-main">
                                            <a href="cart-remove-qty.php?id=<?php echo $pro_row['id'] ?>" style="text-decoration:none;"><span class="remove_qty">-</span></a>
                                            <input type="number" id="c_quantity" class="input_qty" min="1" name="c_quantity" value="<?php echo $row1['c_quantity'] ?>">
                                            <a href="cart-add-qty.php?id=<?php echo $pro_row['id'] ?>" style="text-decoration:none;"><span class="add_qty">+</span></a>
                                        </div>
                                    </td>
                                    <td data-th="Sub Total" id="total" class="item_cost dark-text" >
                                        <!-- <span class="item-cost-val"  disabled></span> -->
                                        <input type="text" name="" class="item-cost-val" value="<?php echo "₹". $total .".00" ?>" id="total"  disabled/>
                                    </td>
                                    <td data-th="Action"> <a href="javascript:" class="js_remove_item"><img src="./assets/images/deletecon.svg" alt="Delete" /></a> </td>
                                </tr>
                            <?php 
                                } 
                            ?>
                        </tbody>
                    </table>
                <?php   
                    // }
                    // else {
                ?>
                    <div class="proceed-to-checkout">
                        <div class="products-details-lists mt-0 proceed-total-wrap-main">
                            <ul>
                                <li>
                                    <p>Sub Total :</p>
                                    <p class="primary-med-18" id="sub_total" disabled><?php echo "₹". $row['cart_total'] .".00" ?></p>
                                </li>
                                <!-- <li>
                                    <p>Discount :</p>
                                    <p class="green-med-18">- ₹00.00</p>
                                </li> -->
                                <li>
                                    <p>Tax :</p>
                                    <p class="red-med-18" id="tex" disabled>3.4</p>
                                </li>
                                <li>
                                    <p>GST :</p>
                                    <p class="red-med-18" id="gst" disabled>3.4</p>
                                </li>
                                <!-- <li>
                                    <p>Shipping Charge:</p>
                                    <p class="primary-med-18">₹00.00</p>
                                </li> -->
                                <li>
                                    <p>Grand Total :</p>
                                    <p class="primary-med-18" id="g_total" disabled><?php echo "₹". $row['cart_total'] .".00" ?></p>
                                </li>
                                <li>
                                    <div class="proceed-to-checkout-btn-wrap w-100">
                                        <a href="./checkout.php" style="text-decoration-line:none; text-align:center" type="submit" class="g-btn f-btn mb-0 w-100">Proceed To Checkout</a>
                                    </div>
                                </li>
                            </ul>
                            <div>
                                <a href="cart-remove-all.php" class="js_remove_item remove-all-btn">Remove All</a> 
                            </div>
                        </div>
                    </div>
                <?php 
                    // }
                ?>
                </div>
            </div>
        </div>
        <!-- <script>
            $(document).ready(function(){
                var pro_price = $('#pro_price').val();
                var c_quantity = $('#c_quantity').val();
                var add = c_quantity * pro_price;
                $('pro_price').val(add);
                var val = pro_price * tex / 100;
                $('gst').val(val);
                var total = parseInt(add) + parseInt(val);
                $('total').val(total);
                $('g_total').html(total);

                $('#c_quantity').change(function(){
                    var c_quantity = $(this).val();
                    var add = c_quantity + pro_price;
                    $('#pro_price').val(add);
                    var val = ('#pro_price').val() * tex / 100;
                    $('#gst').val(val);
                    var total = parseInt(add) + parseInt(val);
                    $('total').val(total);
                    $('g_total').html(total);
                });
            });
        </script> -->
    </div>
</section>
<?php include('./include/bodyfooter.php') ?>
<?php include('./include/footer.php') ?>

<!-- <tr class="item-row">
                            <td data-th="Products Details">
                                <div class="products-detail-wrap">
                                    <div class="product-image-wrap">
                                        <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="">
                                    </div>
                                    <div class="product-detail-list">
                                        <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">
                                <div class="text-start">
                                    <span class="item_price d-block p-med-18">₹1630.00</span>
                                   
                                </div>
                            </td>
                            <td data-th="Quantity">
                                <div class="qty-wrap-main">
                                    <span class="remove_qty">-</span>
                                    <input class="input_qty" name="quantity" value="0">
                                    <span class="add_qty">+</span>
                                </div>
                            </td>
                            <td data-th="Sub Total" class="item_cost dark-text">₹<span class="item-cost-val">1630.00</span></td>
                            <td data-th="Action"> <a href="javascript:" class="js_remove_item"><img src="./assets/images/deletecon.svg" alt="Delete" /></a> </td>
                          </tr>
                          <tr class="item-row">
                            <td data-th="Products Details">
                                <div class="products-detail-wrap">
                                    <div class="product-image-wrap">
                                        <img src="./assets/images/images/digi-bp-monitor_2.webp" alt="">
                                    </div>
                                    <div class="product-detail-list">
                                        <p class="p-14-dark">Omron Fully Automatic Digital Blood Pressure Monitoring Machine- Arm Circumference (22-32Cm)</p>
                                        <p class="p-14-dark"> <span class="span-title">Color:</span> <span>White</span></p>
                                        <p class="p-14-dark"> <span class="span-title">Size:</span> <span>Free</span></p>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">
                                <div class="text-start">
                                    <span class="item_price d-block p-med-18">₹1630.00</span>
                                </div>
                            </td>
                            <td data-th="Quantity">
                                <div class="qty-wrap-main">
                                    <span class="remove_qty">-</span>
                                    <input class="input_qty" name="quantity" value="0">
                                    <span class="add_qty">+</span>
                                </div>
                            </td>
                            <td data-th="Sub Total" class="item_cost dark-text">₹<span class="item-cost-val">1630.00</span></td>
                            <td data-th="Action"> <a href="javascript:" class="js_remove_item"><img src="./assets/images/deletecon.svg" alt="Delete" /></a> </td>
                          </tr> -->
