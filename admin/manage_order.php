<?php include('../admin/include/header.php') ?>
<?php include('../admin/include/sidebar.php') ?>
<main id="main" class="main">
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                <li class="breadcrumb-item active">Manage Order</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Manage Order</h5><hr>
                        <?php 
                            //$conn = mysqli_connect('localhost', 'root', '', 'drtools') or die("Connection Faild") . mysqli_connect_error();
                            include "confing.php";
                            $sql = "SELECT * FROM order";
                            $result = mysqli_query($conn,$sql) or die("Query Feiled");
                            if(mysqli_num_rows($result) > 0){
                        ?>
                        <table id="myTable" class="display">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Cart Id</th>
                                    <th>Order Total</th>
                                    <th>Order Status</th>
                                    <th>Created at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>5000</td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="../admin/view_order.php" class="me-3"><img src="../assets/images/images/view.svg" alt="view" style="height: 16px;width: 16px;"/></a>
                                    <a href="javascript:" class=""><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                                <tr>
                                    <td><?php echo $row['order_id']; ?></td>
                                    <td><?php echo $row['cart_id']; ?></td>
                                    <td><?php echo $row['sub_total']; ?></td>
                                    <td><?php echo $row['order_status']; ?></td>
                                    <td><?php echo $row['created_at']; ?></td>
                                    <td><a href="../admin/view_order.php?order_id=<?php echo $row['order_id']; ?>" class="js_remove_item me-3"><img src="../assets/images/images/view.svg" alt="View" style="height: 16px;width: 16px;"/></a>
                                    <a href="delete_order.php?order_id=<?php echo $row['order_id']; ?>" class="js_remove_item"><img src="../assets/images/deletecon.svg" alt="Delete" /></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('../admin/include/footer.php') ?>