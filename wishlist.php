<?php require_once '../electro-hut-backend/wishlist.php'; ?>
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
            <div class="p-5">
              <div
                class="d-flex justify-content-between align-items-center mb-5">
                <h4 class="fw-bold mb-0">Wishlist</h4>
              </div>
              <hr class="my-4" />

              <div
                class="row mb-4 d-flex justify-content-between align-items-center text-muted wishlist-header">
                <div class="col-md-5 text-center">
                  <h6>Product</h6>
                </div>
                <div
                  class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 text-center">
                  <h6 class="mb-0">Unit price</h6>
                </div>
                <div
                  class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                  <h6 class="mb-0">Stock</h6>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1"></div>
              </div>

              <?php if (isset($wishlists)) {
                foreach ($wishlists as $wishlist) { ?>
                  <div
                    class="row mb-4 d-flex justify-content-between align-items-center wishlist-item">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="<?= $wishlist['primary_image_url'] ?>"
                        class="img-fluid rounded-3 wishlist-image"
                        alt="Product Image" />
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted"><?= $wishlist['brand_name'] ?></h6>
                      <h6 class="mb-0"><?= $wishlist['product_name'] ?></h6>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0"><?= $wishlist['price'] ?></h6>
                    </div>
                    <div
                      class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                      <h6 class="mb-0">
                        <?php if ($wishlist['stock_qty'] > 0) { ?>
                          <span class="text-success">Available</span>
                        <?php } else { ?>
                          <span class="text-danger">Out of Stock</span>
                        <?php  } ?>
                      </h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a class="btn btn-success m-1" href="#"><i class="bi bi-info-circle"></i></a>
                      <form method="post">
                        <input type="hidden" name="wishlist_id" value="<?= $wishlist['wishlist_id'] ?>">
                        <button class="btn btn-danger m-1" name="deleteWishlist">
                          <i class="bi bi-trash3-fill"></i>
                        </button>
                      </form>
                    </div>
                  </div>
                  <hr class="my-4" />
              <?php  }
              } ?>



              <div class="pt-5">
                <h6 class="mb-0">
                  <a href="product.php" class="text-body"><i class="bi bi-arrow-left me-2"></i>Back to shop</a>
                </h6>
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