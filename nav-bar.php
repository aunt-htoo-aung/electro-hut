 <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    require_once "../electro-hut-backend/authenticate.php";
    $current_file = basename($_SERVER['PHP_SELF']);
    $index = $product = $contact = $about = "";

    switch ($current_file) {
        case "index.php":
            $index = "active";
            break;
        case "product.php":
        case "details.php":
            $product = "active";
            break;
        case "contact.php":
            $contact = "active";
            break;
        case "about.php":
            $about = "active";
            break;
    }
    ?>
 <link rel="stylesheet" href="Style/navbar-style.css" />
 <nav class="navbar navbar-expand-lg">
     <div class="container-fluid p-2">
         <a class="navbar-brand ms-5 fs-4 fw-bold" href="#">⚡ ElectroHut</a>
         <button
             class="navbar-toggler"
             type="button"
             data-bs-toggle="collapse"
             data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 <li class="nav-item ms-3">
                     <a class="nav-link nav-link-text <?= $index ?>" href="index.php">Home</a>
                 </li>
                 <li class="nav-item ms-3">
                     <a class="nav-link nav-link-text <?= $product ?>" href="product.php">Products</a>
                 </li>
                 <li class="nav-item ms-3">
                     <a class="nav-link nav-link-text <?= $about ?>" href="about.php">About</a>
                 </li>
                 <li class="nav-item ms-3">
                     <a class="nav-link nav-link-text <?= $contact ?>" href="contact.php">Contact</a>
                 </li>
             </ul>

             <div class="d-flex align-items-center">
                 <form class="d-none d-lg-flex me-5" role="search">
                     <input
                         class="form-control me-2"
                         type="search"
                         placeholder="Search" />
                     <button class="btn btn-search" type="submit">Search</button>
                 </form>

                 <div class="nav-item dropdown">
                     <a
                         class="nav-link dropdown-toggle pe-3"
                         href="#"
                         role="button"
                         data-bs-toggle="dropdown">
                         <i class="bi bi-person-circle fs-5 me-1"></i>
                         <span class="">Aung</span>
                     </a>
                     <ul class="dropdown-menu dropdown-menu-end mt-2">
                         <li>
                             <a class="dropdown-item" href="profile.php"><i class="bi bi-person me-2"></i>Profile</a>
                         </li>
                         <li>
                             <a class="dropdown-item my-1" href="cart.php"><i class="bi bi-cart me-2"></i>Cart</a>
                         </li>
                         <li>
                             <a class="dropdown-item" href="wishlist.php"><i class="bi bi-heart me-2"></i>Wishlist</a>
                         </li>
                         <li>
                             <hr class="dropdown-divider" />
                         </li>
                         <li>
                             <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </nav>