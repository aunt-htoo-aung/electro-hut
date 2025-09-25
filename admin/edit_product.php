<?php
require_once '../../electro-hut-backend/product.php'
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
  <div class="container-fluid">
    <div class="row">
      <?php include 'side-bar.php' ?>
      <!-- Main Content -->
      <div class="col-12 col-lg-9 p-4">
        <div class="container">
          <h5>Edit Product ID : <?= $product_id ?></h5>
          <div class="card product-detail-card m-lg-3">
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="mb-3">
                      <label class="form-label" for="productName">Product</label>
                      <input
                        class="form-control"
                        type="text"
                        id="productName"
                        name="product_name" value="<?= $product_detail['product_name'] ?>" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="description">Description</label>
                      <textarea
                        class="form-control"
                        id="description"
                        rows="5"
                        name="description"><?= $product_detail['description'] ?></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="category">Category</label>
                      <select class="form-select" id="category" name="category">
                        <option selected>Select Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="brand">Brand</label>
                      <select class="form-select" id="brand" name="brand">
                        <option selected>Select Brand</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="price">Price</label>
                      <input class="form-control" type="text" id="price" name="price" value="<?= $product_detail['price'] ?>" />
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="stock-amount">Stock Amount</label>
                      <input
                        class="form-control"
                        type="number"
                        id="stock-amount" name="stock_amount" value="<?= $product_detail['stock_qty'] ?>" />
                    </div>
                  </div>
                  <div class="col-lg-4 text-center">
                    <div class="image-view h-50">
                      <img
                        src="../<?= $product_detail['primary_image_url'] ?>"
                        class="img-fluid h-100"
                        alt="..." />
                    </div>
                    <label for="upload-image" class="upload-box w-100">
                      <div class="text-muted fw-semibold">
                        Drag an image here or
                        <span class="text-primary">upload a file</span>
                      </div>
                      <input
                        type="file"
                        id="upload-image"
                        accept="image/*"
                        name="image_urls[]"
                        multiple />
                    </label>
                  </div>
                  <div class="group d-flex gap-3 col-lg-4 ms-auto">
                    <input
                      type="submit"
                      class="btn btn-success w-50"
                      value="Submit"
                      name="update" />
                    <input
                      type="submit"
                      class="btn btn-danger w-50"
                      value="Cancel" />
                  </div>
                </div>
              </form>
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