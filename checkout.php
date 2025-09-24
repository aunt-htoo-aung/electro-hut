<?php
require_once '../electro-hut-backend/cart.php';
require_once '../electro-hut-backend/order.php';
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
    <div class="container">
      <!-- Heading -->
      <h2 class="my-5 text-center">Checkout form</h2>

      <!--Grid row-->
      <form method="post">
        <div class="row">

          <!--Grid column-->
          <div class="col-md-8 mb-4">
            <!--Card-->
            <div class="card p-4">
              <!--Grid row-->

              <!--firstName-->
              <div class="form-outline mb-4">
                <label class="form-label" for="typeText">Full Name</label>
                <input type="text" name="name" class="form-control" required />
              </div>

              <!--address-->
              <p class="mb-0">
                Address
              </p>
              <div class="form-outline mb-4">
                <input type="text" name="address" class="form-control" required placeholder="1234 Main St" aria-label="1234 Main St" aria-describedby="basic-addon1" />
              </div>

              <!--address-2-->
              <p class="mb-0">
                City
              </p>
              <div class="form-outline mb-4">
                <input type="text" name="city" class="form-control" required placeholder="City" aria-label="City" aria-describedby="basic-addon1" />
              </div>
              <p class="mb-0">
                Phone
              </p>
              <div class="form-outline mb-4">
                <input type="tel" class="form-control" name="phone" required placeholder="Phone Number" aria-label="Phone" aria-describedby="basic-addon1" />
              </div>




              <hr />




              <div class="my-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="Credit Card" checked />
                  <label class="form-check-label" for="flexRadioDefault1"> Credit Card </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="Debit Card" />
                  <label class="form-check-label" for="flexRadioDefault2"> Debit Card </label>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="Paypal" />
                  <label class="form-check-label" for="flexRadioDefault3"> Paypal </label>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6 mb-3">
                  <p class="mb-0">
                    Name on card
                  </p>
                  <div class="form-outline">
                    <input type="text" name="card_name" class="form-control" />
                    <div class="form-helper">Full name as displayed on card</div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <p class="mb-0">
                    Credit card number
                  </p>
                  <div class="form-outline">
                    <input type="text" name="card_num" class="form-control" />
                  </div>
                </div>
              </div>
              <p class="mb-0">
                Transition Number
              </p>
              <div class="form-outline mb-4">
                <input type="text" name="transition_num" class="form-control">
              </div>

              <hr class="mb-4" />
              <button class="btn btn-primary" name="submit" type="submit">Create Order</button>
            </div>
            <!--/.Card-->
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-4 mb-4">
            <!-- Heading -->
            <?php
            $count = 0; // Initialize count variable before use

            // Count items in the cart if $carts is set
            if (isset($carts)) {
              foreach ($carts as $c) {
                $count++;
              }
            }
            ?>

            <!-- Heading -->
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-muted">Your cart</span>
              <span class="badge rounded-pill badge-primary">
                <?php echo $count; ?>
              </span>
              <input type="hidden" name="count" value="<?php echo $count ?>">
            </h4>

            <!-- Cart -->
            <ul class="list-group mb-3">
              <?php if (isset($carts)) {
                $total = 0; ?>
                <?php foreach ($carts as $c) { ?>
                  <li class="list-group-item d-flex justify-content-between">
                    <div>
                      <h6 class="my-0"><?php echo $c['product_name']; ?></h6>
                      <small class="text-muted"><?php echo $c['brand_name']; ?></small>
                    </div>
                    <div>
                      <h6 class="my-0">$ <?php echo $c['quantity'] * $c['price'];
                                          $total += $c['quantity'] * $c['price']; ?></h6>
                      <small class="text-muted">
                        <?php
                        echo $c['quantity'];
                        echo ($c['quantity'] > 1) ? " Items" : " Item";
                        ?>
                      </small>
                    </div>
                  </li>
                <?php } ?>
              <?php } else { ?>
                <li class="list-group-item text-center">
                  <span>Your cart is empty.</span>
                </li>
              <?php } ?>
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (USD)</span>
                <strong>$ <?php echo $total; ?></strong>
              </li>
              <input type="hidden" name="total" value="<?php echo $total; ?>">
            </ul>


            <!-- Cart -->

          </div>
        </div>
      </form>
      <!--Grid column-->

      <!--Grid row-->
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>