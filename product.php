<?php
require_once '../electro-hut-backend/cart.php';
require_once '../electro-hut-backend/wishlist.php';
require_once '../electro-hut-backend/product.php';
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
    <!-- Filters -->
    <div
      class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-2">
      <div class="d-flex flex-wrap gap-2">
        <div class="dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
            Category
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Headphones</a></li>
            <li><a class="dropdown-item" href="#">Speakers</a></li>
            <li><a class="dropdown-item" href="#">Smartwatches</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
            Price
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Low to High</a></li>
            <li><a class="dropdown-item" href="#">High to Low</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button class="btn dropdown-toggle" data-bs-toggle="dropdown">
            Brand
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Sony</a></li>
            <li><a class="dropdown-item" href="#">Apple</a></li>
            <li><a class="dropdown-item" href="#">Samsung</a></li>
          </ul>
        </div>
      </div>

      <div>
        <select class="form-select">
          <option selected>Sort by</option>
          <option value="1">Price</option>
          <option value="2">Rating</option>
        </select>
      </div>
    </div>

    <!-- Title -->
    <h4 class="mb-4">Latest Electronic Gadgets</h4>

    <!-- Product Grid -->
    <div class="row g-4">
      <!-- Product 1 -->
      <?php if (isset($products)) {
        $wishlist_product_ids = array_column($wishlists, 'product_id');
        foreach ($products as $product) {
          $product_id = $product['product_id'];
          // $is_in_wishlist =  check_wishlist($user_id, $product_id);

          $is_in_wishlist = in_array($product_id, $wishlist_product_ids);
      ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card product-card h-100 position-relative">
              <form method="post">
                <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                <!-- Wishlist Button -->
                <button
                  class="btn <?= $is_in_wishlist ? 'btn-danger' : 'btn-light'; ?> position-absolute top-0 end-0 m-2 rounded-circle shadow-sm wishlist-btn"
                  name="addWishlist">
                  <i class="bi bi-heart"></i>
                </button>

                <!-- Product Image -->
                <img
                  src="<?= $product['primary_image_url'] ?>"
                  class="card-img-top" />

                <div class="card-body">
                  <h6 class="card-title"><?= $product['product_name'] ?></h6>
                  <p class="text-muted small mb-1">Brand : <?= $product['brand_name'] ?></p>
                  <p class="text-muted small mb-1">Category : <?= $product['category_name'] ?></p>
                  <p class="fw-bold text-dark"><?= $product['price'] ?></p>
                  <p class="text-success small">
                    <i class="bi bi-box-fill text-success"></i> <?= $product['stock_qty'] ?>
                  </p>

                  <button class="btn btn-outline-dark w-100" name="addToCart">Add to Cart</button>
              </form>
            </div>
          </div>
    </div>
<?php  }
      } ?>

  </div>
  <!-- Pagination -->
  <nav aria-label="Product pagination">
    <ul class="pagination justify-content-start mt-4">
      <li class="page-item disabled">
        <a
          class="page-link me-2"
          href="#"
          tabindex="-1"
          aria-disabled="true">Previous</a>
      </li>
      <li class="page-item active" aria-current="page">
        <a class="page-link me-2" href="#">1</a>
      </li>
      <li class="page-item">
        <a class="page-link me-2" href="#">2</a>
      </li>
      <li class="page-item">
        <a class="page-link me-2" href="#">3</a>
      </li>
      <li class="page-item">
        <a class="page-link me-2" href="#">Next</a>
      </li>
    </ul>
  </nav>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>