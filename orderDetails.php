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

                        <div class="col-12">
                            <form method="post">
                                <div class="p-5">
                                    <div class="d-flex justify-content-between align-items-center mb-5">
                                        <h3>Order Details of ID <?php echo $order_id;  ?></h3>

                                    </div>
                                    <hr class="my-4">

                                    <?php if (isset($orderItems)) {

                                        foreach ($orderItems as $detail) {
                                    ?>

                                            <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img src="<?php echo $detail['image_url']; ?>" class="img-fluid rounded-3" alt="<?php echo $detail['product_name']; ?>">
                                                </div>
                                                <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted"><?php echo $detail['brand']; ?></h6>
                                                    <h6 class="mb-0"><?php echo $detail['product_name']; ?></h6>
                                                </div>

                                                <div class="col-md-3 col-lg-3 col-xl-2 d-flex ">
                                                    <h6 class="mb-0 "><?php echo $detail['quantity']; ?></h6>
                                                </div>

                                                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0"> <?php echo "$ " . $detail['amount']; ?></h6>

                                                </div>


                                            </div>

                                            <hr class="my-4">
                                    <?php
                                        }
                                        // Display total amount
                                        echo "<h4 class='float-end me-5 pe-5'>Total : $ $detail[total]</h4>";
                                    }
                                    ?>


                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="order.php" class="text-body"><i class="bi bi-arrow-left me-2"></i>
                                                Back to order</a>
                                        </h6>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>