<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP - Cart</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Premium Sneakers, Footwear, Fashion" name="keywords">
    <meta content="Premium sneakers and footwear at ONING FLIP." name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="public/css/style.css" rel="stylesheet">

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
        
        /* Enhanced Cart Section */
        .cart-section {
            padding: 40px 0;
        }
        
        .cart-table {
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .cart-table thead {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
        }
        
        .cart-table thead th {
            border: none;
            color: white;
            font-weight: 600;
            padding: 20px;
            text-align: center;
        }
        
        .cart-table tbody tr {
            transition: var(--transition);
        }
        
        .cart-table tbody tr:hover {
            background: rgba(11, 61, 11, 0.02);
        }
        
        .cart-table tbody td {
            padding: 20px;
            vertical-align: middle;
            border-bottom: 1px solid #eee;
        }
        
        .product-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .product-image {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid #f0f0f0;
        }
        
        .product-name {
            font-weight: 600;
            color: var(--text);
            margin-bottom: 5px;
        }
        
        .price {
            color: var(--accent);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .quantity-badge {
            background: var(--primary);
            color: white;
            border-radius: 20px;
            padding: 8px 16px;
            font-weight: 600;
            min-width: 60px;
            text-align: center;
        }
        
        .total-price {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .remove-btn {
            background: #ff4757;
            border: none;
            border-radius: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: var(--transition);
        }
        
        .remove-btn:hover {
            background: #ff3742;
            transform: scale(1.1);
        }
        
        /* Enhanced Summary Card */
        .summary-card {
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
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .summary-item:last-child {
            border-bottom: none;
        }
        
        .summary-label {
            color: var(--text);
            font-weight: 500;
        }
        
        .summary-value {
            color: var(--text);
            font-weight: 600;
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
        
        .checkout-btn {
            background: linear-gradient(135deg, var(--accent), #ff8533);
            border: none;
            border-radius: 12px;
            padding: 15px 30px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.3);
            width: 100%;
            margin-top: 20px;
        }
        
        .checkout-btn:hover {
            background: linear-gradient(135deg, #ff8533, var(--accent));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
            color: white;
        }
        
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 16px;
            box-shadow: var(--shadow);
        }
        
        .empty-cart-icon {
            font-size: 4rem;
            color: #ddd;
            margin-bottom: 20px;
        }
        
        .empty-cart h3 {
            color: var(--text);
            margin-bottom: 15px;
        }
        
        .empty-cart p {
            color: #666;
            margin-bottom: 30px;
        }
        
        .shop-btn {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            border: none;
            border-radius: 10px;
            padding: 12px 30px;
            color: white;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-block;
        }
        
        .shop-btn:hover {
            background: linear-gradient(135deg, #0a5c0a, var(--primary));
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
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
            
            .product-info {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }
            
            .cart-table thead th,
            .cart-table tbody td {
                padding: 15px 10px;
            }
        }
        
        @media (max-width: 767px) {
            .brand-logo {
                font-size: 26px;
            }
            
            .cart-btn {
                padding: 10px 16px !important;
            }
            
            .cart-table {
                font-size: 0.9rem;
            }
            
            .product-image {
                width: 60px;
                height: 60px;
            }
            
            .summary-body {
                padding: 20px;
            }
        }

        #leaflet-map {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(11, 61, 11, 0.1);
            margin-top: 20px;
            border-radius: 16px;
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

    <!-- Enhanced Cart Section -->
    <div class="container-fluid cart-section">
        <div class="row px-xl-5">
            <?php if (empty($cart)): ?>
                <div class="col-12">
                    <div class="empty-cart">
                        <div class="empty-cart-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <h3>Your cart is empty</h3>
                        <p>Looks like you haven't added any items to your cart yet.</p>
                        <a href="/shop" class="shop-btn">
                            <i class="fas fa-shopping-bag mr-2"></i>Start Shopping
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-lg-8 mb-5">
                    <div class="cart-table">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $cartTotal = 0;
                                foreach ($cart as $c):
                                    $itemTotal = $c['prize'] * $c['quantity'];
                                    $cartTotal += $itemTotal;
                                ?>
                                <tr>
                                    <td>
                                        <div class="product-info">
                                            <img src="<?= BASE_URL . 'uploads/' . $c['image'] ?>" alt="<?= $c['name'] ?>" class="product-image">
                                            <div>
                                                <div class="product-name"><?= $c['name'] ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price">₱<?= number_format($c['prize'], 2) ?></td>
                                    <td>
                                        <span class="quantity-badge"><?= $c['quantity'] ?></span>
                                    </td>
                                    <td class="total-price">₱<?= number_format($itemTotal, 2) ?></td>
                                    <td>
                                        <a href="/cartdel/<?= $c['id'] ?>" class="remove-btn" title="Remove item">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="summary-card">
                        <div class="summary-header">
                            <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                        </div>
                        <div class="summary-body">
                            <div class="summary-item">
                                <span class="summary-label">Subtotal</span>
                                <span class="summary-value">₱<?= number_format($cartTotal, 2) ?></span>
                            </div>
                            <div class="summary-item">
                                <span class="summary-label">Shipping</span>
                                <span class="summary-value">Free</span>
                            </div>
                            <div class="summary-total">
                                <span class="total-label">Total</span>
                                <span class="total-value">₱<?= number_format($cartTotal, 2) ?></span>
                            </div>
                            <a href="/checkout" class="checkout-btn">
                                <i class="fas fa-credit-card mr-2"></i>Proceed To Checkout
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Cart End -->

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
</body>

</html>