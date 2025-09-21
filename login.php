<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ElectroHut - Login</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-white">
  <div
    class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card p-4 shadow" style="width: 25rem">
      <div class="card-body">
        <h2 class="card-title text-center mb-1 fw-bold">ElectroHut</h2>
        <p class="text-center text-muted mb-4">
          Log in to find your next gadget.
        </p>
        <form action="../electro-hut-backend/authenticate.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input
              type="email"
              class="form-control"
              id="email"
              aria-describedby="emailHelp" name="email" />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" />
          </div>
          <div class="d-grid gap-2">
            <button
              type="submit"
              class="btn text-white" name="login"
              style="background-color: #5e5df0">
              Login
            </button>
          </div>
          <p class="mt-3 text-center">
            Don't have an account? <a href="signup.html">Sign Up</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>