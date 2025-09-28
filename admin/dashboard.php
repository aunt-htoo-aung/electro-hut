<?php
require_once '../../electro-hut-backend/dashboard.php'
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
          <!-- Dashboard Header -->
          <div class="row mb-4">
            <div class="col">
              <h2 class="header-title">Admin Dashboard</h2>
            </div>
          </div>

          <!-- Row for Stock Cards -->
          <div class="row">
            <!-- Total Products Card -->
            <div class="col-md-3">
              <div class="card text-white bg-primary">
                <div class="card-header">
                  <h6>Total Products</h6>
                </div>
                <div class="card-body">
                  <h4 class="card-title"><?= $total_stock_products['total_products']  ?></h4>
                  <small class="card-text">
                    Total number of products in the store.
                  </small>
                </div>
              </div>
            </div>

            <!-- Active Stock Products Card -->
            <div class="col-md-3">
              <div class="card text-white bg-success">
                <div class="card-header">Active Stock Products</div>
                <div class="card-body">
                  <h4 class="card-title"><?= $total_stock_products['active_stock']  ?></h4>
                  <p class="card-text">
                    Products that are available in stock.
                  </p>
                </div>
              </div>
            </div>

            <!-- Inactive Stock Products Card -->
            <div class="col-md-3">
              <div class="card text-white bg-warning">
                <div class="card-header">Inactive Stock Products</div>
                <div class="card-body">
                  <h4 class="card-title"><?= $total_stock_products['inactive_stock']  ?></h4>
                  <p class="card-text">Products that are out of stock.</p>
                </div>
              </div>
            </div>

            <!-- Danger Card -->
            <div class="col-md-3">
              <div class="card text-white bg-danger">
                <div class="card-header">Low Stock Alert</div>
                <div class="card-body">
                  <h4 class="card-title"><?= $total_stock_products['low_stock']  ?></h4>
                  <p class="card-text">
                    Products with stock below 10.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Orders and Top Selling Products -->
          <div class="card mt-4">
            <div class="card-header">
              <i class="fas fa-box icon"></i> Pending Orders
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Item Count</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $count = 1;
                  foreach ($pendingOrders as $order): ?>
                    <tr>
                      <th scope="row"><?= $count++ ?></th>
                      <td><?= htmlspecialchars($order['order_id']) ?></td>
                      <td><?= htmlspecialchars($order['user_name']) ?></td>
                      <td><?= htmlspecialchars($order['order_date']) ?></td>
                      <td>$<?= number_format($order['total_amount'], 2) ?></td>
                      <td><?= (int)$order['item_count'] ?></td>
                      <td>
                        <form method="post" style="display:inline;">
                          <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
                          <button type="submit" name="status" value="Accepted" class="btn btn-success btn-sm">Accept</button>
                        </form>
                        <form method="post" style="display:inline;">
                          <input type="hidden" name="order_id" value="<?= $order['order_id'] ?>">
                          <button type="submit" name="status" value="Cancelled" class="btn btn-danger btn-sm">Cancel</button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
          </div>


          <!-- Top Selling Products Table -->
          <div class="card mt-4">
            <div class="card-header">
              <i class="fas fa-chart-line icon"></i> Top Selling Products
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col" colspan="2" class="text-center">Product</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sold Quantity</th>
                    <th scope="col">Total Revenue</th>
                    <th scope="col">Stock Left</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (isset($top_selling_products)) {
                    foreach ($top_selling_products as $top) {
                  ?>
                      <tr>
                        <th scope="row"><?= $top['product_id'] ?></th>
                        <td>
                          <img
                            src="../<?= $top['image_url'] ?>" style="max-width: 100px; max-height: 100px" />
                        </td>
                        <td><?= $top['product_name'] ?></td>
                        <td><?= $top['brand_name'] ?></td>
                        <td><?= $top['category_name'] ?></td>
                        <td><?= $top['price'] ?></td>
                        <td><?= $top['sold_quantity'] ?></td>
                        <td><?= $top['total_revenue'] ?></td>
                        <td><?= $top['stock_left'] ?></td>
                      </tr>
                  <?php
                    }
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