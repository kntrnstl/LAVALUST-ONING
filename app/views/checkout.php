<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP - Checkout</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Premium Sneakers, Footwear, Fashion" name="keywords">
    <meta content="Premium sneakers and footwear at ONING FLIP." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">

    <script src="https://www.paypal.com/sdk/js?client-id=AQJQxRBcqC4d6LYcgn4qYSFmmDrLmZjfv33iwX_ejk7Me3CmKvMabBrrT2PcslSBzcWTrrSvUl-A4X9l&currency=PHP"></script>

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
        
        /* Enhanced Checkout Section */
        .checkout-section {
            padding: 40px 0;
        }
        
        .checkout-card {
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .checkout-header {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            color: white;
            padding: 25px;
            border-bottom: none;
        }
        
        .checkout-header h4 {
            margin: 0;
            font-weight: 600;
            color: white;
        }
        
        .checkout-body {
            padding: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
            display: block;
        }
        
        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: var(--transition);
            background: #f8f9fa;
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(11, 61, 11, 0.1);
            background: white;
        }
        
        .form-control[readonly] {
            background: #f8f9fa;
            color: #666;
        }
        
        /* Enhanced Order Summary */
        .order-summary {
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
            overflow: hidden;
        }
        
        .summary-header {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            color: white;
            padding: 25px;
            border-bottom: none;
        }
        
        .summary-header h4 {
            margin: 0;
            font-weight: 600;
            color: white;
        }
        
        .summary-body {
            padding: 25px;
        }
        
        .product-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .product-item:last-child {
            border-bottom: none;
        }
        
        .product-info {
            flex: 1;
        }
        
        .product-name {
            font-weight: 600;
            color: var(--text);
            margin-bottom: 5px;
        }
        
        .product-quantity {
            color: #666;
            font-size: 0.9rem;
        }
        
        .product-price {
            color: var(--accent);
            font-weight: 700;
        }
        
        .summary-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            border-top: 2px solid var(--primary);
            margin-top: 15px;
        }
        
        .total-label {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.2rem;
        }
        
        .total-value {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.3rem;
        }
        
        /* Payment Section */
        .payment-section {
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
            margin-top: 30px;
            overflow: hidden;
        }
        
        .payment-header {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            color: white;
            padding: 25px;
            border-bottom: none;
        }

        .payment-header h4 {
            margin: 0;
            font-weight: 600;
            color: white;
        }
        
        .payment-body {
            padding: 25px;
        }
        
        .payment-option {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            margin-bottom: 15px;
            transition: var(--transition);
            cursor: pointer;
        }
        
        .payment-option:hover {
            border-color: var(--primary);
            background: rgba(11, 61, 11, 0.02);
        }
        
        .payment-option.selected {
            border-color: var(--primary);
            background: rgba(11, 61, 11, 0.05);
        }
        
        .payment-icon {
            font-size: 1.5rem;
            color: var(--primary);
            margin-right: 15px;
        }
        
        .payment-label {
            font-weight: 600;
            color: var(--text);
        }
        
        .payment-description {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        /* Place Order Button */
        .place-order-btn {
            background: linear-gradient(135deg, var(--accent), #ff8533);
            border: none;
            border-radius: 12px;
            padding: 18px 30px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.3);
            width: 100%;
            margin-top: 20px;
        }
        
        .place-order-btn:hover {
            background: linear-gradient(135deg, #ff8533, var(--accent));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
            color: white;
        }
        
        .security-notice {
            text-align: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 10px;
            margin-top: 20px;
            border-left: 4px solid var(--primary);
        }
        
        .security-notice i {
            color: var(--primary);
            margin-right: 8px;
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
        
        /* Back to Top Button */
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
        }
        
        .back-to-top:hover {
            background: #ff8533;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.5);
            color: white;
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
            
            .checkout-body,
            .summary-body,
            .payment-body {
                padding: 20px;
            }
        }
        
        @media (max-width: 767px) {
            .brand-logo {
                font-size: 26px;
            }
            
            .cart-btn {
                padding: 10px 16px !important;
            }
            
            .checkout-header,
            .summary-header,
            .payment-header {
                padding: 20px;
            }
        }

        #leaflet-map {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(11, 61, 11, 0.1);
            margin-top: 20px;
            border-radius: 16px;
        }

        /* Enhanced Discount Section */
        .discount-section {
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 1px solid rgba(0,0,0,0.05);
            margin-bottom: 30px;
            overflow: hidden;
        }
        
        .discount-header {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            color: white;
            padding: 20px;
            border-bottom: none;
        }
        
        .discount-header h4 {
            margin: 0;
            font-weight: 600;
            color: white;
            font-size: 1.2rem;
        }
        
        .discount-body {
            padding: 25px;
        }
        
        .discount-form {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .discount-input {
            flex: 1;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: var(--transition);
            background: #f8f9fa;
        }
        
        .discount-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(11, 61, 11, 0.1);
            background: white;
            outline: none;
        }
        
        .discount-btn {
            background: var(--primary);
            border: none;
            border-radius: 10px;
            padding: 12px 25px;
            color: white;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
            white-space: nowrap;
        }
        
        .discount-btn:hover {
            background: #0a5c0a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(11, 61, 11, 0.3);
        }
        
        .discount-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .discount-message {
            padding: 12px 15px;
            border-radius: 8px;
            margin-top: 10px;
            font-weight: 500;
            display: none;
        }
        
        .discount-success {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border-left: 4px solid #28a745;
        }
        
        .discount-error {
            background: rgba(220, 53, 69, 0.1);
            color: #dc3545;
            border-left: 4px solid #dc3545;
        }
        
        .discount-codes {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px dashed rgba(11, 61, 11, 0.2);
        }
        
        .discount-codes-title {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 8px;
            font-weight: 600;
        }
        
        .discount-tag {
            display: inline-block;
            background: rgba(11, 61, 11, 0.1);
            color: var(--primary);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-right: 8px;
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .discount-applied {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 15px;
            background: rgba(40, 167, 69, 0.1);
            border-radius: 8px;
            margin-top: 15px;
            border-left: 4px solid #28a745;
        }
        
        .discount-details {
            display: flex;
            flex-direction: column;
        }
        
        .discount-code-applied {
            font-weight: 600;
            color: var(--primary);
        }
        
        .discount-amount {
            font-size: 0.9rem;
            color: #28a745;
        }
        
        .remove-discount {
            background: none;
            border: none;
            color: #dc3545;
            cursor: pointer;
            font-size: 1.2rem;
            transition: var(--transition);
        }
        
        .remove-discount:hover {
            transform: scale(1.2);
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
                    <a class="text-light px-2 social-icon" href="https://www.facebook.com/share/1KJgUXNAGH/" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-light px-2 social-icon" href="https://x.com/FlipOning?t=lRS_tEJgadi81WDS4gv9RQ&s=09" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-light px-2 social-icon" href="https://www.instagram.com/oning.flip?igsh=ZTczczJmdHV4ZWoy" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-light px-2 social-icon" href="https://www.tiktok.com/@oning.flip?_r=1&_t=ZS-91X0ZoVgIuF" target="_blank">
                        <i class="fab fa-tiktok"></i>
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
                            <a href="/profile" class="nav-item nav-link">Profile</a>
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

    <!-- Enhanced Checkout Section -->
    <div class="container-fluid checkout-section">
        <div class="row px-xl-5">
            <!-- Billing Address Section -->
            <div class="col-lg-8 mb-5">
                <div class="checkout-card">
                    <div class="checkout-header">
                        <h4 class="font-weight-semi-bold mb-0">Billing Address</h4>
                    </div>
                    <div class="checkout-body">
                        <p class="text-muted mb-4">Please double-check before you place your order.</p>
                        <form action="/purchase" method="post">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Full Name</label>
                                    <input class="form-control" type="text" name="fullname" value="<?= $users['fullname']; ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">E-mail</label>
                                    <input class="form-control" type="text" name="email" value="<?= $users['email']; ?>" readonly>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Complete Address</label>
                                    <input class="form-control" type="text" name="compAdd" value="<?= $users['compAdd']; ?>" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">Mobile No</label>
                                    <input class="form-control" type="text" name="number" value="<?= $users['number']; ?>" required>
                                </div>
                            </div>
                    </div>
                </div>
                                <!-- Discount Section -->
                <div class="discount-section">
                    <div class="discount-header">
                        <h4 class="font-weight-semi-bold mb-0">Discount Code</h4>
                    </div>
                    <div class="discount-body">
                        <div class="discount-form">
                            <input type="text" class="discount-input" id="discount-code" placeholder="Enter discount code">
                            <button type="button" class="discount-btn" id="apply-discount-btn">
                                <i class="fas fa-tag mr-1"></i> Apply
                            </button>
                        </div>
                        
                        <div id="discount-message" class="discount-message"></div>
                        
                        <div id="discount-applied" class="discount-applied" style="display: none;">
                            <div class="discount-details">
                                <span class="discount-code-applied" id="applied-code"></span>
                                <span class="discount-amount" id="discount-savings"></span>
                            </div>
                            <button type="button" class="remove-discount" id="remove-discount">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        
                        <div class="discount-codes">
                            <div class="discount-codes-title">Available discount codes:</div>
                            <div>
                                <span class="discount-tag">ONINGFLIP10 - 10% OFF</span>
                                <span class="discount-tag">ONINGFLIP20 - 20% OFF</span>
                                <span class="discount-tag">ONINGFLIP30 - 30% OFF</span>
                                <span class="discount-tag">ONINGFLIP50 - 50% OFF</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Summary & Payment Section -->
            <div class="col-lg-4">
                <!-- Order Summary -->
                <div class="order-summary mb-4">
                    <div class="summary-header">
                        <h4 class="font-weight-semi-bold m-0">Order Summary</h4>
                    </div>
                    <div class="summary-body">
                        <h5 class="font-weight-medium mb-3" style="color: var(--primary);">Products</h5>
                        <?php
                        $cartTotal = 0;
                        foreach ($cart as $c):
                            $itemTotal = $c['prize'] * $c['quantity'];
                            $cartTotal += $itemTotal;
                        ?>
                        <div class="product-item">
                            <div class="product-info">
                                <div class="product-name"><?= $c['name'] ?></div>
                                <div class="product-quantity">Quantity: <?= $c['quantity'] ?></div>
                            </div>
                            <div class="product-price">₱<?= number_format($c['prize'], 2) ?></div>
                        </div>
                        <?php endforeach; ?>
                        
                        <div class="summary-total">
                            <span class="total-label">Total Amount</span>
                            <span class="total-value" id="total-amount">₱<?= number_format($cartTotal, 2) ?></span>
                        </div>

                    </div>
                </div>

                <!-- Payment Method -->
                <div class="payment-section">
                    <div class="payment-header">
                        <h4 class="font-weight-semi-bold m-0">Payment Method</h4>
                    </div>
                    <div class="payment-body">
                        <div class="payment-option selected" id="cod-option">
                            <div class="payment-icon">
                                <i class="fas fa-money-bill-wave"></i>
                            </div>
                            <div>
                                <input type="hidden" name="payment" id="payment_method_input" value="Cash on Delivery">
                                <div class="payment-label">Cash on Delivery</div>
                                <div class="payment-description">Pay when you receive your order</div>
                            </div>
                        </div>

                        <div class="payment-option" id="paypal-option">
                            <div class="payment-icon">
                                <i class="fab fa-paypal"></i>
                            </div>
                            <div>
                                <div class="payment-label">PayPal</div>
                                <div class="payment-description">Pay securely using PayPal</div>
                            </div>
                        </div>

                        <!-- Container for PayPal button -->
                        <div id="paypal-button-container" style="margin-top: 15px; display: none;"></div>

                        
                        <div class="security-notice">
                            <i class="fas fa-shield-alt"></i>
                            <small>Your payment information is secure and encrypted</small>
                        </div>
                        
                        <button type="submit" class="place-order-btn">
                            <i class="fas fa-shopping-bag mr-2"></i>Place Order
                        </button>

                        <input type="hidden" name="discount_code" id="discount_code_input">
                        <input type="hidden" name="discounted_total" id="discounted_total_input">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

    <!-- Footer Start -->
    <div class="container-fluid footer text-light pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-light text-uppercase mb-4">ONING FLIP</h5>
                <p class="mb-2">8C, Greenville Drive, Sauyo Quezon City, <br> Quezon City, Philippines, 1116</p>
                <p class="mb-2"><i class="fa fa-phone mr-3"></i>0915 977 2091</p>
                <p class="mb-0"><i class="fa fa-envelope mr-3"></i>oningflip@gmail.com</p>
            </div>

            <div class="col-lg-8 col-md-12 mb-5">
                <h5 class="text-light text-uppercase mb-4">Our Location</h5>
                <div id="leaflet-map" style="width: 100%; height: 250px; border-radius: 16px; overflow: hidden;"></div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0 text-center text-md-left">
                <p class="mb-md-0 text-center text-md-left text-light">© ONING FLIP. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="public/lib/easing/easing.min.js"></script>
    <script src="public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="public/mail/jqBootstrapValidation.min.js"></script>
    <script src="public/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="public/js/main.js"></script>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const paymentOptions = document.querySelectorAll('.payment-option');
            const paypalButtonContainer = document.getElementById('paypal-button-container');
            const placeOrderBtn = document.querySelector('.place-order-btn');
            const applyDiscountBtn = document.getElementById('apply-discount-btn');
            const discountCodeInput = document.getElementById('discount-code');
            const discountMessage = document.getElementById('discount-message');
            const discountApplied = document.getElementById('discount-applied');
            const appliedCode = document.getElementById('applied-code');
            const discountSavings = document.getElementById('discount-savings');
            const removeDiscountBtn = document.getElementById('remove-discount');
            const totalAmountElement = document.getElementById('total-amount');
            const discountCodeInputField = document.getElementById('discount_code_input');
            const discountedTotalInput = document.getElementById('discounted_total_input');
            
            let originalTotal = <?= $cartTotal ?>;
            let currentDiscount = 0;
            let currentDiscountCode = '';

            function updatePaymentUI(selectedId) {
                if (selectedId === 'paypal-option') {
                    paypalButtonContainer.style.display = 'block';
                    placeOrderBtn.style.display = 'none';
                } else {
                    paypalButtonContainer.style.display = 'none';
                    placeOrderBtn.style.display = 'block';
                }
            }

            // Set initial state based on the selected option
            const initialSelected = document.querySelector('.payment-option.selected');
            if (initialSelected) {
                updatePaymentUI(initialSelected.id);
            }

            // Handle clicks
            const paymentInput = document.getElementById('payment_method_input');

            paymentOptions.forEach(option => {
                option.addEventListener('click', function() {
                    paymentOptions.forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    updatePaymentUI(this.id);

                    // Update hidden field
                    if (this.id === 'cod-option') {
                        paymentInput.value = 'Cash on Delivery';
                    } else if (this.id === 'paypal-option') {
                        paymentInput.value = 'PayPal';
                    }
                });
            });

            // Discount code functionality
            applyDiscountBtn.addEventListener('click', function() {
                const codeInput = discountCodeInput.value.trim().toUpperCase();
                
                // Discount codes
                const discountCodes = {
                    'ONINGFLIP10': 10,
                    'ONINGFLIP20': 20,
                    'ONINGFLIP30': 30,
                    'ONINGFLIP50': 50
                };

                if (discountCodes[codeInput]) {
                    currentDiscount = originalTotal * (discountCodes[codeInput] / 100);
                    currentDiscountCode = codeInput;
                    const newTotal = originalTotal - currentDiscount;
                    
                    // Update UI
                    totalAmountElement.textContent = '₱' + newTotal.toFixed(2);
                    appliedCode.textContent = codeInput;
                    discountSavings.textContent = `You save ₱${currentDiscount.toFixed(2)} (${discountCodes[codeInput]}% off)`;
                    
                    // Show success message
                    discountMessage.textContent = `Discount applied! You saved ₱${currentDiscount.toFixed(2)}`;
                    discountMessage.className = 'discount-message discount-success';
                    discountMessage.style.display = 'block';
                    
                    // Show applied discount section
                    discountApplied.style.display = 'flex';
                    
                    // Update hidden form fields
                    discountCodeInputField.value = currentDiscountCode;
                    discountedTotalInput.value = newTotal.toFixed(2);
                    
                    // Clear input
                    discountCodeInput.value = '';
                    
                    // Disable apply button temporarily
                    applyDiscountBtn.disabled = true;
                    setTimeout(() => {
                        applyDiscountBtn.disabled = false;
                    }, 2000);
                } else {
                    // Show error message
                    discountMessage.textContent = 'Invalid discount code. Please try again.';
                    discountMessage.className = 'discount-message discount-error';
                    discountMessage.style.display = 'block';
                }
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    discountMessage.style.display = 'none';
                }, 5000);
            });

            // Remove discount functionality
            removeDiscountBtn.addEventListener('click', function() {
                // Reset total
                totalAmountElement.textContent = '₱' + originalTotal.toFixed(2);
                
                // Hide applied discount section
                discountApplied.style.display = 'none';
                
                // Reset discount variables
                currentDiscount = 0;
                currentDiscountCode = '';
                
                // Clear hidden form fields
                discountCodeInputField.value = '';
                discountedTotalInput.value = '';
                
                // Show removal message
                discountMessage.textContent = 'Discount removed';
                discountMessage.className = 'discount-message discount-success';
                discountMessage.style.display = 'block';
                
                setTimeout(() => {
                    discountMessage.style.display = 'none';
                }, 3000);
            });

            // Render PayPal button
            paypal.Buttons({
                createOrder: function(data, actions) {
                    let total = originalTotal - currentDiscount;
                    return actions.order.create({
                        purchase_units: [{
                            amount: { value: total.toFixed(2) }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        const input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'payment';
                        input.value = 'PayPal';
                        document.querySelector('form[action="/purchase"]').appendChild(input);

                        // Add discount code to form
                        const discountInput = document.createElement('input');
                        discountInput.type = 'hidden';
                        discountInput.name = 'discount_code';
                        discountInput.value = currentDiscountCode;
                        document.querySelector('form[action="/purchase"]').appendChild(discountInput);

                        document.querySelector('form[action="/purchase"]').submit();
                    });
                }
            }).render('#paypal-button-container');

        });

        // Initialize the map
        var map = L.map('leaflet-map').setView([14.687477150942854, 121.03619090914154], 16);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Add a marker
        var marker = L.marker([14.687477150942854, 121.03619090914154]).addTo(map)
            .bindPopup('<b>ONING FLIP</b><br>Greenville Drive, Quezon City')
            .openPopup();
    </script>
</body>
</html>