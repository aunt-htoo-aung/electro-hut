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
                  <h4 class="card-title">500</h4>
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
                  <h4 class="card-title">450</h4>
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
                  <h4 class="card-title">50</h4>
                  <p class="card-text">Products that are out of stock.</p>
                </div>
              </div>
            </div>

            <!-- Danger Card -->
            <div class="col-md-3">
              <div class="card text-white bg-danger">
                <div class="card-header">Low Stock Alert</div>
                <div class="card-body">
                  <h4 class="card-title">20</h4>
                  <p class="card-text">
                    Products with stock below threshold.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Pending Orders and Top Selling Products -->
          <div class="card">
            <div class="card-header">
              <i class="fas fa-box icon"></i> Pending Orders
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order ID</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Item Count</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Example Pending Order 1 -->
                  <tr>
                    <th scope="row">1</th>
                    <td>101</td>
                    <td>50</td>
                    <td>2025-09-15</td>
                    <td>$120.50</td>
                    <td>3</td>
                    <td>
                      <button class="btn btn-success btn-sm">
                        Accept
                      </button>
                      <button class="btn btn-danger btn-sm">
                        Cancel
                      </button>
                    </td>
                  </tr>
                  <!-- Example Pending Order 2 -->
                  <tr>
                    <th scope="row">2</th>
                    <td>102</td>
                    <td>51</td>
                    <td>2025-09-14</td>
                    <td>$75.00</td>
                    <td>2</td>
                    <td>
                      <button class="btn btn-success btn-sm">
                        Accept
                      </button>
                      <button class="btn btn-danger btn-sm">
                        Cancel
                      </button>
                    </td>
                  </tr>
                  <!-- Example Pending Order 3 -->
                  <tr>
                    <th scope="row">3</th>
                    <td>103</td>
                    <td>52</td>
                    <td>2025-09-13</td>
                    <td>$50.00</td>
                    <td>1</td>
                    <td>
                      <button class="btn btn-success btn-sm">
                        Accept
                      </button>
                      <button class="btn btn-danger btn-sm">
                        Cancel
                      </button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>


          <!-- Top Selling Products Table -->
          <div class="card">
            <div class="card-header">
              <i class="fas fa-chart-line icon"></i> Top Selling Products
            </div>
            <div class="card-body">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sold Quantity</th>
                    <th scope="col">Total Revenue</th>
                    <th scope="col">Stock Left</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Example Top Selling Product 1 -->
                  <tr>
                    <th scope="row">1</th>
                    <td>
                      <img
                        src="https://via.placeholder.com/50"
                        alt="Product Image" />
                      Airpod 1
                    </td>
                    <td>Apple</td>
                    <td>Electronics</td>
                    <td>$200.00</td>
                    <td>500</td>
                    <td>$100,000.00</td>
                    <td>200</td>
                  </tr>
                  <!-- Example Top Selling Product 2 -->
                  <tr>
                    <th scope="row">2</th>
                    <td>
                      <img
                        src="https://via.placeholder.com/50"
                        alt="Product Image" />
                      Laptop X
                    </td>
                    <td>BrandX</td>
                    <td>Computers</td>
                    <td>$1000.00</td>
                    <td>350</td>
                    <td>$350,000.00</td>
                    <td>150</td>
                  </tr>
                  <!-- Example Top Selling Product 3 -->
                  <tr>
                    <th scope="row">3</th>
                    <td>
                      <img
                        src="https://via.placeholder.com/50"
                        alt="Product Image" />
                      Smartwatch
                    </td>
                    <td>BrandY</td>
                    <td>Accessories</td>
                    <td>$150.00</td>
                    <td>300</td>
                    <td>$45,000.00</td>
                    <td>50</td>
                  </tr>
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