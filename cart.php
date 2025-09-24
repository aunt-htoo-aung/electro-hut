<?php require_once '../electro-hut-backend/cart.php'; ?>
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
  <link rel="stylesheet" href="Style/navbar-style.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'nav-bar.php' ?>

  <!-- Main Content -->
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div
          class="card card-registration card-registration-2"
          style="border-radius: 15px">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div
                    class="d-flex justify-content-between align-items-center mb-5">
                    <h4 class="fw-bold mb-0">Shopping Cart</h4>
                  </div>
                  <hr class="my-4" />
                  <?php if (isset($carts)) {
                    $count_item = 0;
                    $total_amount = 0;
                    foreach ($carts as $cart) {
                      $count_item++; ?>
                      <div
                        class="row mb-4 d-flex justify-content-between align-items-center">
                        <div class="col-md-2 col-lg-2 col-xl-2">
                          <img
                            src="<?= $cart['primary_image_url'] ?>"
                            class="img-fluid rounded-3"
                            alt="Product Image" />
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3">
                          <h6 class="text-muted"><?= $cart['brand_name'] ?></h6>
                          <h6 class="mb-0"><?= $cart['product_name'] ?></h6>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                          <button class="btn btn-link px-2" type="button">
                            <i class="bi bi-dash"></i>
                          </button>
                          <input
                            type="number"
                            value="<?= $cart['quantity'] ?>"
                            class="form-control form-control-sm"
                            style="width: 50px"
                            min="1"
                            max="<?= $cart['stock_qty'] ?>" />
                          <button class="btn btn-link px-2" type="button">
                            <i class="bi bi-plus"></i>
                          </button>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                          <h6 class="mb-0">
                            <?php echo $cart['price'] * $cart['quantity'];
                            $total_amount += $cart['price'] * $cart['quantity'] ?></h6>
                        </div>
                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                          <a href="#" class="text-danger"><i class="bi bi-trash3-fill"></i></a>
                        </div>
                      </div>

                      <hr class="my-4" />
                  <?php }
                  } ?>

                  <div class="pt-5">
                    <h6 class="mb-0">
                      <a href="product.php" class="text-body"><i class="bi bi-arrow-left me-2"></i>Back to shop</a>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-body-tertiary">
                <div class="p-5">
                  <h5 class="fw-bold mb-5 mt-2 pt-1">Summary</h5>
                  <hr class="my-4" />
                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">Items</h5>
                    <h5>Total Amount</h5>
                  </div>
                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase"><?= $count_item ?></h5>
                    <h5><?= $total_amount ?></h5>
                  </div>
                  <hr class="my-4" />
                  <a href="#" class="btn btn-dark float-end">Checkout</a>
                </div>
              </div>
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