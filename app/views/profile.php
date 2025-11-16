<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP - Profile</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Premium Sneakers, Footwear, Fashion" name="keywords">
    <meta content="Premium sneakers and footwear at ONING FLIP." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/lib/owlcarousel/assets/owl.carousel.min.css' ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo BASE_URL . PUBLIC_DIR . '/css/style.css' ?>" rel="stylesheet">

    <style>
        /* Modern Design Variables */
        :root {
            --primary: #0b3d0b;
            --primary-light: #a3ffb3;
            --accent: #ff6b35;
            --dark: #1a1a1a;
            --light: #ffffff;
            --gray: #f5f5f5;
            --text: #333333;
            --shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text);
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        
        /* Enhanced Topbar */
        .bg-dark {
            background: linear-gradient(90deg, var(--dark) 0%, #2d2d2d 100%) !important;
            padding: 8px 0;
        }
        
        .topbar-link {
            color: #ddd !important;
            font-size: 0.9rem;
            transition: var(--transition);
            text-decoration: none;
        }
        
        .topbar-link:hover {
            color: var(--primary-light) !important;
        }
        
        .social-icon {
            transition: var(--transition);
            font-size: 0.9rem;
        }
        
        .social-icon:hover {
            color: var(--primary-light) !important;
            transform: translateY(-2px);
        }
        
        /* Enhanced Logo Area */
        .brand-container {
            padding: 15px 0;
            border-bottom: 1px solid #eee;
            background: white;
        }
        
        .brand-logo {
            font-size: 32px;
            font-weight: 800;
            letter-spacing: -0.5px;
        }
        
        .brand-primary {
            color: var(--primary);
            position: relative;
        }
        
        .brand-primary:after {
            content: '';
            position: absolute;
            width: 8px;
            height: 8px;
            background: var(--accent);
            border-radius: 50%;
            bottom: 5px;
            right: -5px;
        }
        
        .brand-secondary {
            color: var(--dark);
            font-weight: 600;
        }
        
        /* Enhanced Cart Button */
        .cart-btn {
            background: white;
            border: 2px solid var(--primary) !important;
            border-radius: 12px !important;
            padding: 12px 20px !important;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: var(--primary);
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }
        
        .cart-btn:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--primary);
            transition: var(--transition);
            z-index: 0;
        }
        
        .cart-btn:hover:before {
            left: 0;
        }
        
        .cart-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(11, 61, 11, 0.3);
        }
        
        .cart-btn i, .cart-btn .badge {
            position: relative;
            z-index: 1;
        }
        
        .cart-btn:hover i {
            color: white !important;
        }
        
        .cart-btn .badge {
            background: var(--accent);
            color: white;
            border-radius: 50%;
            padding: 6px 10px;
            font-size: 0.8rem;
            font-weight: 700;
            min-width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }
        
        .cart-btn:hover .badge {
            background: white;
            color: var(--accent);
            transform: scale(1.1);
        }
        
        /* Enhanced Navbar */
        .navbar-container {
            background: linear-gradient(135deg, var(--primary) 0%, #0a5c0a 100%) !important;
            box-shadow: 0 4px 20px rgba(11, 61, 11, 0.2);
            padding: 0;
            border-radius: 0 0 16px 16px;
            margin-bottom: 20px;
        }
        
        .navbar-nav {
            padding: 0;
        }
        
        .nav-item {
            margin: 0 4px;
        }
        
        .nav-link {
            color: var(--light) !important;
            font-weight: 500;
            padding: 16px 24px !important;
            transition: var(--transition);
            position: relative;
            border-radius: 8px;
            margin: 4px 0;
        }
        
        .nav-link:hover {
            color: var(--primary-light) !important;
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        .nav-link.active {
            color: var(--primary-light) !important;
            background: rgba(255, 255, 255, 0.2);
            font-weight: 600;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            bottom: 8px;
            left: 50%;
            background: linear-gradient(90deg, var(--primary-light), var(--accent));
            transition: var(--transition);
            border-radius: 2px;
        }
        
        .nav-link:hover:after,
        .nav-link.active:after {
            width: 60%;
            left: 20%;
        }
        
        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            padding: 8px 12px;
            background: rgba(255, 255, 255, 0.1);
        }
        
        .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(163, 255, 179, 0.3);
        }
        
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.9)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            width: 20px;
            height: 20px;
        }
        
        /* Enhanced Page Header */
        .page-header {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            color: var(--text);
            padding: 60px 0;
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 3px solid var(--primary);
        }
        
        .page-header h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }
        
        /* Enhanced Profile Section */
        .profile-section {
            padding: 40px 0;
        }
        
        .profile-card {
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: none;
            overflow: hidden;
            margin-bottom: 30px;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .profile-card-header {
            background: white;
            color: var(--primary);
            padding: 25px;
            border-bottom: 3px solid var(--primary);
        }
        
        .profile-card-header h3 {
            margin: 0;
            font-weight: 600;
            font-size: 1.5rem;
        }
        
        .profile-card-body {
            padding: 30px;
        }
        
        /* Enhanced Order History Table */
        .order-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        .order-table th {
            background: #f8f9fa;
            color: var(--primary);
            padding: 15px;
            text-align: left;
            font-weight: 600;
            border-bottom: 2px solid var(--primary);
        }
        
        .order-table td {
            padding: 15px;
            border-bottom: 1px solid #eee;
            transition: var(--transition);
        }
        
        .order-table tr:hover td {
            background: rgba(11, 61, 11, 0.03);
        }
        
        .status-badge {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .status-pending {
            background: #fff3cd;
            color: #856404;
            border: 1px solid #ffeaa7;
        }
        
        .status-completed {
            background: #d1edff;
            color: #0c5460;
            border: 1px solid #b8daff;
        }
        
        .status-shipped {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        /* Enhanced Tabs */
        .nav-tabs {
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 25px;
        }
        
        .nav-tabs .nav-link {
            border: none;
            color: var(--text);
            font-weight: 500;
            padding: 15px 25px;
            border-radius: 10px 10px 0 0;
            transition: var(--transition);
            background: green;
            margin-bottom: -2px;
        }
        
        .nav-tabs .nav-link:hover {
            border: none;
            color: var(--primary);
            background: green;
        }
        
        .nav-tabs .nav-link.active {
            background: green;
            color: var(--primary);
            border-bottom: 3px solid var(--accent);
            font-weight: 600;
        }
        
        .tab-content {
            background: white;
            border-radius: 0 0 15px 15px;
            padding: 30px;
            box-shadow: var(--shadow);
            border: 0px solid rgba(0,0,0,0.05);
            border-top: none;
        }
        
        /* Enhanced Form Styles */
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: var(--transition);
            margin-bottom: 20px;
            background: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(11, 61, 11, 0.1);
            background: white;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
            display: block;
            font-size: 1rem;
        }
        
        .profile-detail-row {
            padding: 20px 0;
            border-bottom: 1px solid #f0f0f0;
            transition: var(--transition);
        }
        
        .profile-detail-row:hover {
            background: rgba(11, 61, 11, 0.02);
            padding-left: 15px;
            border-radius: 8px;
        }
        
        .profile-detail-row:last-child {
            border-bottom: none;
        }
        
        .detail-label {
            font-weight: 600;
            color: var(--primary);
            font-size: 1rem;
        }
        
        .detail-value {
            color: var(--text);
            font-size: 1rem;
        }
        
        /* Enhanced Buttons */
        .btn-primary-custom {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(11, 61, 11, 0.3);
        }
        
        .btn-primary-custom:hover {
            background: linear-gradient(135deg, #0a5c0a, var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(11, 61, 11, 0.4);
            color: white;
        }
        
        /* Password Section Styling */
        .password-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 25px;
            border-left: 4px solid var(--accent);
        }
        
        .password-section .form-control {
            background: white;
        }
        
        /* Enhanced Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark) 0%, #2d2d2d 100%) !important;
            padding-top: 50px !important;
            margin-top: 40px;
        }
        
        .footer h5 {
            color: var(--light);
            font-weight: 600;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer h5:after {
            content: '';
            position: absolute;
            width: 50px;
            height: 2px;
            background: var(--accent);
            bottom: 0;
            left: 0;
        }
        
        .footer p {
            color: #aaa;
            line-height: 1.8;
        }
        
        .footer .border-top {
            border-color: #444 !important;
        }
        
        /* FIXED: Back to Top Button - No Bouncing */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: var(--accent);
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.4);
            transition: var(--transition);
            z-index: 1000;
            text-decoration: none;
        }
        
        .back-to-top:hover {
            background: #ff8533;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.5);
            color: white;
            text-decoration: none;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 991px) {
            .nav-link {
                padding: 12px 20px !important;
                margin: 2px 0;
            }
            
            .navbar-container {
                border-radius: 0;
            }
            
            .order-table {
                font-size: 0.9rem;
            }
            
            .order-table th,
            .order-table td {
                padding: 10px;
            }
            
            .nav-tabs .nav-link {
                padding: 12px 15px;
                font-size: 0.9rem;
                margin: 0 2px;
            }
        }
        
        @media (max-width: 767px) {
            .brand-logo {
                font-size: 26px;
            }
            
            .cart-btn {
                padding: 10px 16px !important;
            }
            
            .page-header {
                padding: 40px 0;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .profile-card-body {
                padding: 20px;
            }
            
            .nav-tabs {
                flex-direction: column;
            }
            
            .nav-tabs .nav-link {
                margin: 2px 0;
                border-radius: 8px;
                text-align: center;
            }
            
            .nav-tabs .nav-link.active {
                border-bottom: 2px solid var(--primary);
            }
            
            .order-table {
                display: block;
                overflow-x: auto;
            }
            
            .password-section {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-dark py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center text-light">
                    <a class="text-light topbar-link" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-light topbar-link" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-light topbar-link" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-light px-2 social-icon" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-light px-2 social-icon" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-light px-2 social-icon" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-light px-2 social-icon" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-light pl-2 social-icon" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5 brand-container">
            <div class="col-lg-0 d-none d-lg-block">
                <a href="/" class="text-decoration-none">
                    <h1 class="m-0 display-10 font-weight-semi-bold brand-logo">
                        <span class="brand-primary px-3 mr-1">ONING</span>
                        <span class="brand-secondary">FLIP</span>
                    </h1>
                </a>
            </div>
            <div class="col-lg-12 col-6 text-right">
                <a href="/cart" class="btn border cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="badge"><?php echo $cartItemCount; ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Enhanced Navbar -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light py-2 px-0 navbar-container">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/main" class="nav-item nav-link">Home</a>
                            <a href="/shop" class="nav-item nav-link">Products</a>
                            <a href="/profile" class="nav-item nav-link active">Profile</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="/logout" class="nav-item nav-link">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Enhanced Page Header -->
    <div class="container-fluid page-header">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="font-weight-semi-bold mb-3">Profile</h1>
            <div class="d-inline-flex">
                <p class="m-0">Manage your account and view order history</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Profile Section Start -->
    <div class="container-fluid profile-section">
        <div class="row">
            <div class="col-xl-7 mb-4">
                <div class="profile-card">
                    <div class="profile-card-header">
                        <h3><i class="fas fa-history mr-2"></i>Recently Ordered</h3>
                    </div>
                    <div class="profile-card-body">
                        <div class="table-responsive">
                            <table class="order-table">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($purchase_items as $pur): ?>
                                        <tr>
                                            <td class="detail-value"><?= $pur['Item_name'] ?></td>
                                            <td class="detail-value"><?= $pur['quantity'] ?></td>
                                            <td class="detail-value">₱<?= number_format($pur['total_price'], 2) ?></td>
                                            <td class="detail-value"><?= date('M j, Y', strtotime($pur['order_at'])) ?></td>
                                            <td>
                                                <span class="status-badge status-<?= strtolower($pur['status']) ?>">
                                                    <?= $pur['status'] ?>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="profile-card">
                    <div class="profile-card-body">
                        <!-- FIXED: Enhanced Tabs - More Visible -->
                        <ul class="nav nav-tabs" id="profileTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="overview-tab" data-toggle="tab" data-target="#overview" type="button" role="tab">
                                    <i class="fas fa-user-circle mr-2"></i>Overview
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="edit-tab" data-toggle="tab" data-target="#edit" type="button" role="tab">
                                    <i class="fas fa-edit mr-2"></i>Edit Profile
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="password-tab" data-toggle="tab" data-target="#password" type="button" role="tab">
                                    <i class="fas fa-lock mr-2"></i>Change Password
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content mt-4" id="profileTabsContent">
                            <!-- Overview Tab -->
                            <div class="tab-pane fade show active" id="overview" role="tabpanel">
                                <h5 class="card-title mb-4" style="color: var(--primary);">Profile Details</h5>
                                
                                <div class="profile-detail-row">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 detail-label">Full Name</div>
                                        <div class="col-lg-8 col-md-8 detail-value"><?= $users['fullname']; ?></div>
                                    </div>
                                </div>
                                
                                <div class="profile-detail-row">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 detail-label">Address</div>
                                        <div class="col-lg-8 col-md-8 detail-value"><?= $users['compAdd']; ?></div>
                                    </div>
                                </div>
                                
                                <div class="profile-detail-row">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 detail-label">Phone</div>
                                        <div class="col-lg-8 col-md-8 detail-value"><?= $users['number']; ?></div>
                                    </div>
                                </div>
                                
                                <div class="profile-detail-row">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 detail-label">Email</div>
                                        <div class="col-lg-8 col-md-8 detail-value"><?= $users['email']; ?></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Profile Tab -->
                            <div class="tab-pane fade" id="edit" role="tabpanel">
                                <form action="profUp" method="post">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input name="fullname" type="text" class="form-control" value="<?= $users['fullname']; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Complete Address</label>
                                        <input name="compAdd" type="text" class="form-control" value="<?= $users['compAdd']; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input name="number" type="text" class="form-control" value="<?= $users['number']; ?>">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input name="email" type="email" class="form-control" value="<?= $users['email']; ?>" readonly>
                                    </div>
                                    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary-custom">Save Changes</button>
                                    </div>
                                </form>
                            </div>

                            <!-- Change Password Tab - Now More Visible -->
                            <div class="tab-pane fade" id="password" role="tabpanel">
                                <div class="password-section">
                                    <h5 class="mb-4" style="color: var(--primary);">Change Your Password</h5>
                                    <form method="post" action="changePass">
                                        <div class="form-group">
                                            <label class="form-label">Current Password</label>
                                            <input name="password" type="password" class="form-control" placeholder="Enter current password" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <input name="newpassword" type="password" class="form-control" placeholder="Enter new password" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="form-label">Re-enter New Password</label>
                                            <input name="renewpassword" type="password" class="form-control" placeholder="Re-enter new password" required>
                                        </div>
                                        
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary-custom">Change Password</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Section End -->

    <!-- Footer Start -->
    <div class="container-fluid footer text-light pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-light text-uppercase mb-4">ONING FLIP</h5>
                <p class="mb-2">8C, Greenville Drive, Sauyo Quezon City, <br> Quezon City, Philippines, 1116</p>
                <p class="mb-2"><i class="fa fa-phone mr-3"></i>0915 977 2091</p>
                <p class="mb-0"><i class="fa fa-envelope mr-3"></i>oningflip@gmail.com</p>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0 text-center text-md-left">
                <p class="mb-md-0 text-center text-md-left text-light">© ONING FLIP. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- FIXED: Back to Top Button - No Bouncing -->
    <a href="#" class="back-to-top">
        <i class="fa fa-arrow-up"></i>
    </a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/easing/easing.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/owlcarousel/owl.carousel.min.js' ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/jqBootstrapValidation.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/contact.js' ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/js/main.js' ?>"></script>
    
    <script>
        // Simple back to top functionality
        $(document).ready(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top').fadeIn();
                } else {
                    $('.back-to-top').fadeOut();
                }
            });
            
            $('.back-to-top').click(function(){
                $('html, body').animate({scrollTop : 0}, 800);
                return false;
            });
        });
    </script>
</body>

</html>