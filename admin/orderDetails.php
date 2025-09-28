<?php require_once '../../electro-hut-backend/order.php' ?>
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
    <div class="container-fluid">
        <div class="row">
            <?php include 'side-bar.php' ?>
            <!-- Main Content -->
            <div class="col-12 col-lg-9 p-4 vh-100">
                <div class="container-fluid mt-3">
                    <h3>Order Details of ID <?php echo $order_id;  ?></h3>


                    <div class="row g-0">
                        <div class="col-lg-8">
                            <form method="post">
                                <div class="p-5">
                                    <h4>Order Items</h4>
                                    <hr class="my-4">

                                    <?php if (isset($orderItems)) {

                                        foreach ($orderItems as $detail) {
                                    ?>
                                            <form method="post">
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <div class="col-md-2 col-lg-2 col-xl-2">
                                                        <img src="<?php echo $detail['image_url']; ?>" class="img-fluid rounded-3" alt="<?php echo $detail['product_name']; ?>">
                                                    </div>
                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <h6 class="text-muted"><?php echo $detail['brand']; ?></h6>
                                                        <h6 class="mb-0"><?php echo $detail['product_name']; ?></h6>
                                                    </div>

                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <h6 class="mb-0"><?php echo $detail['quantity']; ?></h6>
                                                    </div>

                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <h6 class="mb-0">$ <?php echo $detail['amount']; ?></h6>

                                                    </div>


                                                </div>
                                            </form>
                                            <hr class="my-4">
                                    <?php
                                        }
                                        // Display total amount
                                        echo "<h4>Total Amount: $ " . $detail['total_amount'] . "</h4>";
                                    }
                                    ?>



                                    <div class="pt-5">
                                        <h6 class="mb-0"><a href="order.php" class="text-body">
                                                << Back to table</a>
                                        </h6>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-4 bg-body-tertiary">
                            <?php if (isset($detail) && isset($payment)) { ?>
                                <div class="p-5">
                                    <h4 class="fw-bold ">Shipping Info</h4>
                                    <hr class="my-4">

                                    <div class="mb-2 ">
                                        <span class="text-uppercase">Phone : </span>
                                        <?php echo $detail['contact_phone'] ?>
                                    </div>
                                    <div class="mb-2">
                                        <span class="text-uppercase">Address : </span>
                                        <?php echo $detail['address'] ?>
                                    </div>
                                    <div class="mb-2 ">
                                        <span class="text-uppercase">City : </span>
                                        <?php echo $detail['city'] ?>
                                    </div>
                                    <hr class="my-4">
                                    <h4 class="fw-bold ">Payment Info</h4>
                                    <hr class="my-4">
                                    <div class="mb-2 ">
                                        <span class="text-uppercase">Name : </span>
                                        <?php echo $payment['name'] ?>
                                    </div>
                                    <div class="mb-2 ">
                                        <span class="text-uppercase">Method : </span>
                                        <?php echo $payment['method'] ?>
                                    </div>
                                    <div class="mb-2">
                                        <span class="text-uppercase">Card Number : </span>
                                        <?php echo $payment['card_number'] ?>
                                    </div>
                                    <div class="mb-2 ">
                                        <span class="text-uppercase">Transition Number : </span>
                                        <?php echo $payment['transition_number'] ?>
                                    </div>
                                    <hr class="my-4">
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>