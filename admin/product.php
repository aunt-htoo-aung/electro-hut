<?php require_once '../../electro-hut-backend/product.php' ?>
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
          <h5>Product</h5>
          <div class="btn btn-outline-dark my-3">
            <a href="add-product.php" class="nav-link">Add New Product</a>
          </div>
          <div class="card w-100">
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Price</th>
                    <th scope="col">Stock Amount</th>
                    <th scope="col">Image</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (isset($products)) {
                    foreach ($products as $product) { ?>
                      <tr>
                        <td><?= $product['product_id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['category_name'] ?></td>
                        <td><?= $product['brand_name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['stock_qty'] ?></td>
                        <td>
                          <img
                            src="../<?= $product['primary_image_url'] ?>"
                            style="max-width: 100px; max-height: 100px"
                            alt="" />
                        </td>
                        <td>
                          <a class='btn btn-primary btn-sm w-100 m-1' href='edit_product.php?id=<?= $product['product_id'] ?>'>Edit</a>
                          <!-- <form method="post">
                            <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                            <button class='btn btn-danger btn-sm w-100 m-1' name="delete_product">Delete</button>
                          </form> -->
                        </td>
                      </tr>
                  <?php }
                  } ?>
                </tbody>
              </table>
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