<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ElectroHut - Sign Up</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-white">
  <div
    class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 30rem">
      <div class="card-body">
        <h2 class="card-title text-center mb-1 fw-bold">ElectroHut</h2>
        <p class="text-center text-muted mb-4">
          Create your account to start shopping.
        </p>
        <form class="px-4" action="../electro-hut-backend/signup.php" method="POST" enctype="multipart/form-data">
          <div class="row mb-3">
            <div class="col">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" class="form-control" id="first-name" name="first_name" />
            </div>
            <div class="col">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" class="form-control" id="last-name" name="last_name" />
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required />
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" />
          </div>
          <div class="row mb-3">
            <div class="col">
              <label for="gender-select" class="form-label">Gender</label>
              <select class="form-select" id="gender-select" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others" selected>Others</option>
              </select>
            </div>
            <div class="col">
              <label for="dob" class="form-label">Date of Birth</label>
              <input
                type="date"
                class="form-control"
                id="dob"
                name="date_of_birth" />
            </div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              required />
          </div>
          <div class="mb-3">
            <label for="confirm-password" class="form-label">Confirm Password</label>
            <input
              type="password"
              class="form-control"
              id="confirm-password"
              name="confirm_password"
              required />
          </div>
          <div class="d-grid gap-2">
            <button
              type="submit"
              class="btn text-white"
              name="signup"
              style="background-color: #5e5df0">
              Sign Up
            </button>
          </div>
          <p class="mt-3 text-center">
            Already have an account? <a href="login.html">Log In</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>