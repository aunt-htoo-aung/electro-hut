<?php
require_once '../electro-hut-backend/product.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>⚡ ElectroHut - Home</title>
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="Style/style.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'nav-bar.php' ?>

  <!-- Banner Slider -->
  <section class="banner-slider">
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Image/banner1.png" class="d-block w-100" alt="Banner 1" />
          <div class="carousel-caption">
            <h1>Discover New Gadgets</h1>
            <p>Shop the latest electronics now!</p>
            <a href="product.php" class="btn">Shop Now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img
            src="Image/banner1.1.png"
            class="d-block w-100"
            alt="Banner 2" />
          <div class="carousel-caption">
            <h1>Exclusive Deals</h1>
            <p>Save big on top brands!</p>
            <a href="product.php" class="btn">Shop Now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Image/banner3.png" class="d-block w-100" alt="Banner 3" />
          <div class="carousel-caption">
            <h1>Upgrade Your Tech</h1>
            <p>Explore smart devices today!</p>
            <a href="product.php" class="btn">Shop Now</a>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#bannerCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#bannerCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Promotions Slider -->
  <section class="promotions-slider container my-4">
    <h4>Hot Promotions</h4>
    <div
      id="promotionsCarousel"
      class="carousel slide"
      data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-md-4">
              <div class="promo-card">
                <img
                  src="Image/headphonePromo.png"
                  class="w-100"
                  alt="Promo 1" />
                <div class="card-body">
                  <h5 class="card-title">50% Off Headphones</h5>
                  <p class="card-text">Limited time offer!</p>
                  <a href="product.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="promo-card">
                <img
                  src="Image/headphonePromo.png"
                  class="w-100"
                  alt="Promo 2" />
                <div class="card-body">
                  <h5 class="card-title">Buy 1 Get 1 Free</h5>
                  <p class="card-text">On select speakers!</p>
                  <a href="product.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="promo-card">
                <img
                  src="Image/headphonePromo.png"
                  class="w-100"
                  alt="Promo 3" />
                <div class="card-body">
                  <h5 class="card-title">Smartwatch Deals</h5>
                  <p class="card-text">Save up to 30%!</p>
                  <a href="product.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-md-4">
              <div class="promo-card">
                <img
                  src="Image/headphonePromo.png"
                  class="w-100"
                  alt="Promo 4" />
                <div class="card-body">
                  <h5 class="card-title">Earbuds Sale</h5>
                  <p class="card-text">Get 20% off!</p>
                  <a href="product.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="promo-card">
                <img
                  src="Image/headphonePromo.png"
                  class="w-100"
                  alt="Promo 5" />
                <div class="card-body">
                  <h5 class="card-title">Free Shipping</h5>
                  <p class="card-text">On orders over $100!</p>
                  <a href="product.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="promo-card">
                <img
                  src="Image/headphonePromo.png"
                  class="w-100"
                  alt="Promo 6" />
                <div class="card-body">
                  <h5 class="card-title">Bundle Offers</h5>
                  <p class="card-text">Save on combos!</p>
                  <a href="product.php" class="btn">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#promotionsCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#promotionsCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- Categories Slider -->
  <section class="categories-slider container my-4">
    <h4>Shop by Category</h4>
    <div id="categoriesCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        if (isset($categories) && count($categories) > 0) {
          $chunks = array_chunk($categories, 5); // 5 categories per slide
          foreach ($chunks as $index => $chunk) {
            $activeClass = ($index === 0) ? 'active' : '';
        ?>
            <div class="carousel-item <?= $activeClass ?>">
              <div class="d-flex align-items-center">
                <!-- Prev button -->
                <button
                  class="btn"
                  type="button"
                  data-bs-target="#categoriesCarousel"
                  data-bs-slide="prev"
                  style="min-width: 40px; height: 100%;">
                  <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
                </button>

                <!-- Category cards -->
                <div class="row flex-grow-1">
                  <?php foreach ($chunk as $category) { ?>
                    <div class="col-md-2">
                      <div class="category-card card">
                        <img
                          src="<?= htmlspecialchars($category['image_url'] ?? 'Image/banner1.png') ?>"
                          class="img-fluid"
                          alt="<?= htmlspecialchars($category['category_name']) ?>" />
                        <div class="card-body p-2">
                          <h5 class="card-title small mb-0"><?= htmlspecialchars($category['category_name']) ?></h5>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>

                <!-- Next button -->
                <button
                  class="btn"
                  type="button"
                  data-bs-target="#categoriesCarousel"
                  data-bs-slide="next"
                  style="min-width: 40px; height: 100%;">
                  <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>
                </button>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </section>


  <!-- Latest Arrivals Slider -->
  <section class="latest-slider container my-4">
    <h4>Latest Arrivals</h4>
    <div id="latestCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        if (isset($latestArrivals) && count($latestArrivals) > 0) {
          $chunks = array_chunk($latestArrivals, 3);
          foreach ($chunks as $index => $chunk) {
            $activeClass = ($index === 0) ? 'active' : '';
        ?>
            <div class="carousel-item <?= $activeClass ?>">
              <div class="d-flex align-items-center">
                <!-- Prev button -->
                <button
                  class="btn "
                  type="button"
                  data-bs-target="#latestCarousel"
                  data-bs-slide="prev"
                  style="min-width: 40px; height: 100%;">
                  <span class="carousel-control-prev-icon" style="filter: invert(1);" aria-hidden="true"></span>
                </button>

                <!-- Product cards -->
                <div class="row flex-grow-1">
                  <?php foreach ($chunk as $latest) { ?>
                    <div class="col-md-4">
                      <div class="product-card card">
                        <img src="<?= htmlspecialchars($latest['primary_image_url']) ?>" class="img-fluid" />
                        <div class="card-body">
                          <h5 class="card-title"><?= htmlspecialchars($latest['product_name']) ?></h5>
                          <p class="card-text">Brand - <?= htmlspecialchars($latest['brand_name']) ?></p>
                          <p class="card-text">Category - <?= htmlspecialchars($latest['category_name']) ?></p>
                          <p class="product-price"><?= htmlspecialchars($latest['price']) ?></p>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>

                <!-- Next button -->
                <button
                  class="btn "
                  type="button"
                  data-bs-target="#latestCarousel"
                  data-bs-slide="next"
                  style="min-width: 40px; height: 100%;">
                  <span class="carousel-control-next-icon" style="filter: invert(1);" aria-hidden="true"></span>

                </button>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container text-center">
      <p>&copy; 2025 ElectroHut. All rights reserved.</p>
      <div>
        <a href="#">About Us</a>
        <a href="#">Contact</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>