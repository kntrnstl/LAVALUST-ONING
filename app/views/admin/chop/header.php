<header id="header" class="header fixed-top d-flex align-items-center" 
  style="background-color: #18230F; box-shadow: 0 2px 8px rgba(0,0,0,0.3); border-bottom: 1px solid #1f2c13;">

  <div class="d-flex align-items-center justify-content-between p-2" style="background-color: #18230F;">
    <a href="/dashboard" class="logo d-flex align-items-center" style="text-decoration:none;">
      <span class="d-none d-lg-block text-white fw-bold" style="letter-spacing: 0.5px;">Admin-Dashboard</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn text-white fs-4" 
       style="cursor:pointer; transition:0.3s;"></i>
  </div><!-- End Logo -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center mb-0">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle text-white" href="#" 
           style="padding:10px; transition:0.3s;">
          <i class="bi bi-search fs-5"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" 
           data-bs-toggle="dropdown" style="text-decoration:none; transition:0.3s;">
          <span class="d-none d-md-block dropdown-toggle ps-2 text-white fw-semibold">
              <?= htmlspecialchars($admin_name ?? 'Admin') ?>
          </span>
        </a><!-- End Profile Image Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" 
            style="background-color: #1f2c13; border:none; box-shadow:0 4px 12px rgba(0,0,0,0.3);">

          <li class="dropdown-header text-white text-center py-2" style="border-bottom:1px solid #2b3b1a;">
            <h6 style="margin:0; font-weight:600; color:white;"><?= htmlspecialchars($admin_name ?? 'Admin') ?></h6>
            <span style="font-size:0.85rem; color:#b3d3b3;"><?= htmlspecialchars($admin_role ?? 'Admin') ?></span>
          </li>

          <li><hr class="dropdown-divider" style="margin:8px 0; border-color:#3b5230;"></li>

          <li>
            <a class="dropdown-item d-flex align-items-center text-white" href="/logout" 
               style="padding:10px 15px; transition:0.3s;">
              <i class="bi bi-box-arrow-right me-2"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

  <style>
    /* Hover animations for header icons & links */
    .header .nav-link:hover,
    .header .toggle-sidebar-btn:hover {
      color: #9be79b !important;
      transform: scale(1.1);
    }

    /* Hover for dropdown item */
    .dropdown-item:hover {
      background-color: #29431e !important;
      color: #ffffff !important;
    }

    /* Dropdown smooth animation */
    .dropdown-menu {
      transition: all 0.3s ease;
    }
  </style>

</header><!-- End Header -->
