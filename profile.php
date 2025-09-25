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
  <link rel="stylesheet" href="Style/style.css" />
  <link rel="stylesheet" href="Style/navbar-style.css" />
  <link rel="stylesheet" href="Style/profile.css" />
</head>

<body>
  <!-- Navbar -->
  <?php include 'nav-bar.php' ?>

  <!-- Main Content -->
  <div class="container-fluid px-5 pt-4">
    <h4>Profile</h4>
    <div class="row mt-5 d-flex justify-content-center">
      <div class="col-lg-3">
        <div class="card">
          <div class="card-body profile-card">
            <div class="profile-img">
              <img src="Image/profile.png" alt="" />
            </div>

            <label class="btn btn-change-profile" for="change-profile">Change Photo</label>
            <input type="file" id="change-profile" class="d-none" />
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <ul class="nav nav-tabs border-0" role="tablist">
          <li class="nav-item" role="presentation">
            <a
              class="nav-link active"
              id="profile-details-tab"
              data-bs-toggle="tab"
              href="#profile-details"
              role="tab"
              aria-controls="profile-details"
              aria-selected="true">Details</a>
          </li>
          <li class="nav-item" role="presentation">
            <a
              class="nav-link"
              id="change-pwd-tab"
              data-bs-toggle="tab"
              href="#change-pwd"
              role="tab"
              aria-controls="change-pwd"
              aria-selected="false">Password</a>
          </li>
        </ul>
        <div class="tab-content bg-white p-3 p-md-4" id="tab-content">
          <div
            class="tab-pane active edit-details"
            id="profile-details"
            role="tabpanel"
            aria-labelledby="profile-details-tab">
            <h5 class="p-3 pb-0 m-2">Edit Profile Details</h5>
            <form class="px-4">
              <div class="row">
                <div class="col">
                  <label for="first-name" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="first-name" />
                </div>
                <div class="col">
                  <label for="last-name" class="form-label">Last Name</label>
                  <input type="text" class="form-control" id="last-name" />
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  required />
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" required />
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label for="gender-select" class="form-label">Gender</label>
                  <select class="form-select" id="gender-select" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others" selected>Others</option>
                  </select>
                </div>
                <div class="col">
                  <label for="dob" class="form-label">Date of Birth</label>
                  <input
                    type="date"
                    class="form-control datepicker"
                    id="dob"
                    placeholder="Select your date of birth" />
                </div>
              </div>
              <div class="text-end my-4">
                <button type="submit" class="btn btn-subtle me-2">
                  Cancel
                </button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <div
            class="tab-pane"
            id="change-pwd"
            role="tabpanel"
            aria-labelledby="change-pwd-tab">
            <div class="p-3 change-pwd-container">
              <h5>Change Password</h5>
              <form class="px-5 pt-2">
                <div class="mb-3">
                  <label for="current-pwd" class="form-label">Current Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="current-pwd"
                    required />
                </div>
                <div class="mb-3">
                  <label for="new-pwd" class="form-label">New Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="new-pwd"
                    required />
                </div>
                <div class="mb-3">
                  <label for="confirm-pwd" class="form-label">Confirm Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="confirm-pwd"
                    required />
                </div>
                <div class="text-end mt-4 mb-2">
                  <button type="submit" class="btn btn-subtle me-2">
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
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