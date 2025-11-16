<aside id="sidebar" class="sidebar" 
  style="background-color:#0b3d0b; color:#ffffff; height:100vh; box-shadow:2px 0 8px rgba(0,0,0,0.2);">

  <ul class="sidebar-nav" id="sidebar-nav" style="padding:0; margin:0; list-style:none;">

    <li class="nav-item" style="margin-bottom:5px;">
      <a class="nav-link" href="/dashboard" 
         style="background-color:#0d4a0d; color:#ffffff; display:flex; align-items:center; padding:12px 20px; border-radius:6px; transition:0.3s;">
        <i class="bi bi-grid" style="font-size:18px; margin-right:10px;"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item" style="margin-bottom:5px;">
      <a class="nav-link collapsed" href="/products" 
         style="background-color:#0b3d0b; color:#ffffff; display:flex; align-items:center; padding:12px 20px; border-radius:6px; transition:0.3s;">
        <i class="bi bi-journal-text" style="font-size:18px; margin-right:10px;"></i>
        <span>Inventory</span>
      </a>
    </li><!-- Inventory -->

    <li class="nav-item" style="margin-bottom:5px;">
      <a class="nav-link collapsed" href="/items" 
         style="background-color:#0d4a0d; color:#ffffff; display:flex; align-items:center; padding:12px 20px; border-radius:6px; transition:0.3s;">
        <i class="bi bi-layout-text-window-reverse" style="font-size:18px; margin-right:10px;"></i>
        <span>Add products</span>
      </a>
    </li><!-- Add products -->

    <li class="nav-item" style="margin-bottom:5px;">
      <a class="nav-link collapsed" href="/modify" 
         style="background-color:#0b3d0b; color:#ffffff; display:flex; align-items:center; padding:12px 20px; border-radius:6px; transition:0.3s;">
        <i class="bi bi-gem" style="font-size:18px; margin-right:10px;"></i>
        <span>Modify Items</span>
      </a>
    </li><!-- Modify Items -->

    <li class="nav-item" style="margin-bottom:5px;">
      <a class="nav-link collapsed" href="/tracking" 
         style="background-color:#0d4a0d; color:#ffffff; display:flex; align-items:center; padding:12px 20px; border-radius:6px; transition:0.3s;">
        <i class="bi bi-gem" style="font-size:18px; margin-right:10px;"></i>
        <span>Track Orders</span>
      </a>
    </li><!-- Track Orders -->

    <li class="nav-item" style="margin-bottom:5px;">
      <a class="nav-link collapsed" href="/reports" 
         style="background-color:#0b3d0b; color:#ffffff; display:flex; align-items:center; padding:12px 20px; border-radius:6px; transition:0.3s;">
        <i class="bi bi-file-earmark-bar-graph" style="font-size:18px; margin-right:10px;"></i>
        <span>Reports</span>
      </a>
    </li><!-- Reports -->

  </ul>

  <style>
    /* Hover effect for sidebar links */
    .sidebar .nav-link:hover {
      background-color: #ffffff !important;
      color: #0b3d0b !important;
      transform: translateX(4px);
    }

    /* Active link style (optional highlight) */
    .sidebar .nav-link.active {
      background-color: #ffffff !important;
      color: #0b3d0b !important;
      font-weight: bold;
    }

    /* Smooth hover transition */
    .sidebar .nav-link {
      transition: all 0.3s ease;
    }
  </style>

</aside>
