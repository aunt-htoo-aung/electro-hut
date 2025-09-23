<link rel="stylesheet" href="Style/side-bar.css" />
<!-- Sidebar Toggle Button (visible only on small screens) -->
<div class="d-lg-none p-3 shadow">
    <button
        class="btn btn-outline-primary"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#sidebarMenu">
        <i class="bi bi-list"></i> Menu
    </button>
</div>

<div
    class="d-flex flex-column flex-shrink-0 p-3 bg-light offcanvas offcanvas-start d-lg-none"
    tabindex="-1"
    id="sidebarMenu"
    style="width: 280px">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">⚡ ElectroHut</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <hr />
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="product.php">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="order.php">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="user.php">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="admin.php">Admin Control</a>
        </li>
    </ul>

    <div class="nav-item dropdown mt-auto ms-3">
        <hr />
        <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown">
            <i class="bi bi-person-circle fs-5 me-1"></i>
            <span>Aung (Admin)</span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a>
            </li>
            <li>
                <a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
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

<div
    class="d-none d-lg-flex flex-column flex-shrink-0 p-3 bg-light shadow"
    style="width: 280px; max-height: 100vh; position: sticky; top: 0">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">⚡ ElectroHut</h5>
    </div>
    <hr />
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="product.php">Product</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="order.php">Order</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="user.php">User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link side-bar-nav" href="admin.php">Admin Control</a>
        </li>
    </ul>

    <div class="nav-item dropdown mt-auto ms-3">
        <hr />
        <a
            class="nav-link dropdown-toggle"
            href="#"
            role="button"
            data-bs-toggle="dropdown">
            <i class="bi bi-person-circle fs-5 me-1"></i>
            <span>Aung (Admin)</span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a>
            </li>
            <li>
                <a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
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