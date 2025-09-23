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
        <div class="container-fluid">
          <h5>Order</h5>

          <div class="card">
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Item Count</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (isset($orders)) {
                    foreach ($orders as $order) { ?>
                      <tr>
                        <td><?= $order['order_id'] ?></td>
                        <td><?= $order['user_id'] ?></td>
                        <td><?= $order['order_date'] ?></td>
                        <td><?= $order['status'] ?></td>
                        <td><?= $order['total_amount'] ?></td>
                        <td><?= $order['item_count'] ?></td>
                      </tr>
                  <?php }
                  } ?>


                </tbody>
              </table>
            </div>
          </div>
          <hr />
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>