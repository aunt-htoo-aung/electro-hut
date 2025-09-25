<?php
require_once '../electro-hut-backend/order.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ElectroHut</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="Style/product.css" />
</head>

<body>
    <!-- Navbar -->
    <?php include 'nav-bar.php' ?>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">

                        <form method="post">
                            <div class="p-5">
                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <h1 class="fw-bold mb-0">Order Lists</h1>
                                </div>

                                <div class="row mb-4 d-flex justify-content-between align-items-center text-muted">
                                    <div class="col-2 ">
                                        <h6 class="mb-0">Order ID</h6>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="mb-0">Item</h6>
                                    </div>

                                    <div class="col-2 ">
                                        <h6 class="mb-0">Total Amount</h6>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="mb-0">Order Date</h6>
                                    </div>
                                    <div class="col-2">
                                        <h6 class="mb-0">Status</h6>
                                    </div>
                                    <div class="col-2"></div>
                                    <hr class="my-4">
                                </div>
                                <?php if (isset($orders)) {
                                    foreach ($orders as $order) {
                                ?>
                                        <div class="row mb-4 d-flex justify-content-between align-items-center text-muted">
                                            <div class="col-2 ">
                                                <h6 class="mb-0"><?php echo $order['order_id'] ?></h6>
                                            </div>
                                            <div class="col-2">
                                                <h6 class="mb-0"><?php echo $order['item_count'] ?></h6>
                                            </div>

                                            <div class="col-2 ">
                                                <h6 class="mb-0">$ <?php echo $order['total_amount'] ?></h6>
                                            </div>
                                            <div class="col-2">
                                                <h6 class="mb-0"><?php echo $order['order_date'] ?></h6>
                                            </div>
                                            <div class="col-2">
                                                <h6 class="mb-0"><?php echo $order['status'] ?></h6>
                                            </div>
                                            <div class="col-2">
                                                <a class='btn btn-primary btn-sm ' href="orderDetails.php?id=<?php echo $order['order_id'] ?>">View Details</a>
                                            </div>
                                            <hr class="my-4">
                                        </div>

                                <?php }
                                } ?>


                                <div class="pt-5">
                                    <h6 class="mb-0"><a href="product.php" class="text-body"><i class="bi bi-arrow-left me-2"></i>Back to shop</a></h6>
                                </div>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>