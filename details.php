<?php
require_once '../electro-hut-backend/product.php';
require_once '../electro-hut-backend/wishlist.php';
require_once '../electro-hut-backend/cart.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ElectroHut | AirPods Max</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="Style/details.css" />
  <link rel="stylesheet" href="Style/navbar-style.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'nav-bar.php' ?>
  <div class="container py-4">
    <!-- Breadcrumb -->
    <!-- <nav aria-label="breadcrumb">
      <ol class="breadcrumb small">
        <li class="breadcrumb-item"><a href="#">Electronics</a></li>
        <li class="breadcrumb-item"><a href="#">Audio</a></li>
        <li class="breadcrumb-item"><a href="#">Headphones</a></li>
        <li class="breadcrumb-item active" aria-current="page">
          AirPods Max
        </li>
      </ol>
    </nav> -->

    <div class="row g-5">
      <!-- Product Images -->
      <div class="col-lg-6">
        <!-- Main Product Image -->
        <!-- Main Image with fixed size and object-fit -->
        <div style="width: 100%; max-width: 500px; aspect-ratio: 1/1">
          <img
            id="main-product-image"
            src="<?= $product_detail['primary_image_url'] ?>"
            alt="Product Image"
            class="img-fluid rounded mb-3"
            style="width: 100%; height: 100%; object-fit: cover" />
        </div>

        <!-- Thumbnail Images -->
        <div class="d-flex gap-2 mt-3" id="thumbnail-container">
          <img
            src="<?= $product_detail['primary_image_url'] ?>"
            data-image="<?= $product_detail['primary_image_url'] ?>"
            class="thumbnail-img border rounded p-1 active"
            style="width: 60px; height: 60px; cursor: pointer" />
          <?php $otherImages = explode(',', $product_detail['other_images']);
          foreach ($otherImages as $img) {
          ?>
            <img
              src="<?= $img ?>"
              data-image="<?= $img ?>"
              class="thumbnail-img border rounded p-1"
              style="width: 60px; height: 60px; cursor: pointer" />
          <?php } ?>

        </div>
      </div>

      <!-- Product Details -->
      <div class="col-lg-6">
        <h3><?= $product_detail['product_name'] ?></h3>
        <p class="text-muted mb-2">
          <?= $product_detail['description'] ?>
        </p>

        <!-- <p class="text-success small mb-3">
          <i class="bi bi-star-fill text-warning"></i> 4.8 (121 reviews)
        </p> -->

        <p class="product-price">$<?= $product_detail['price'] ?></p>

        <hr />

        <!-- Color Selection -->
        <!-- <h6 class="fw-semibold mb-2">Choose a Color</h6>
        <div class="d-flex gap-2 mb-3">
          <div class="color-swatch" style="background-color: #fa8072"></div>
          <div class="color-swatch" style="background-color: #000"></div>
          <div class="color-swatch" style="background-color: #e0e0e0"></div>
          <div class="color-swatch" style="background-color: #cce5cc"></div>
          <div class="color-swatch" style="background-color: #4666ff"></div>
        </div> -->

        <!-- Quantity and Stock -->
        <div class="d-flex align-items-center mb-3">
          <div class="input-group" style="width: 120px">
            <button class="btn btn-outline-secondary" type="button">−</button>
            <input type="text" class="form-control text-center" value="1" />
            <button class="btn btn-outline-secondary" type="button">+</button>
          </div>
          <?php if ($product_detail['stock_qty'] < 10) { ?>
            <span class="text-danger small ms-3">Only <strong><?= $product_detail['stock_qty'] ?> items</strong> left! Don't miss it</span>
          <?php } else { ?>
            <span class="text-success small ms-3"><strong><?= $product_detail['stock_qty'] ?> items</strong> left!</span>
          <?php } ?>
        </div>

        <!-- Buttons -->
        <form method="post">
          <div class="d-flex gap-2 mb-4">
            <input type="hidden" name="product_id" value="<?= $product_detail['product_id'] ?>">
            <button class="btn btn-buy flex-grow-1" name="addToCart">Add to Cart</button>
            <button class="btn flex-grow-1 btn-cart" name="addWishlist">Add to Wishlist</button>
          </div>
        </form>

        <!-- Delivery Info -->
        <div class="info-box">
          <p class="mb-2">
            <i class="bi bi-truck me-2 text-warning"></i>
            <strong>Free Delivery</strong>
          </p>
          <p class="mb-3 text-muted small">
            Enter your Postal code for delivery availability
          </p>
          <p class="mb-2">
            <i class="bi bi-arrow-return-left me-2 text-danger"></i>
            <strong>Return Delivery</strong>
          </p>
          <p class="text-muted small mb-0">
            Free 30 days return. <a href="#">Details</a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="Script/script.js"></script>
</body>

</html>