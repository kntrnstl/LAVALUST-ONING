<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP - Product Details</title>
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
        
        /* Product Details Section */
        .product-details-section {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: var(--shadow);
            margin-bottom: 40px;
        }
        
        .product-image-container {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 600px;
        }
        
        .product-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }
        
        .product-image-container:hover img {
            transform: scale(1.03);
        }
        
        .product-info h1 {
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 15px;
            font-size: 2.2rem;
        }
        
        .product-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .product-stock {
            display: inline-flex;
            align-items: center;
            background: rgba(11, 61, 11, 0.1);
            color: var(--primary);
            padding: 8px 16px;
            border-radius: 50px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        .product-stock i {
            margin-right: 8px;
        }
        
        .product-description {
            color: #666;
            line-height: 1.8;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }
        
        .quantity-selector {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .quantity-input {
            width: 100px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 15px;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            margin-right: 15px;
            transition: var(--transition);
        }
        
        .quantity-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(11, 61, 11, 0.1);
            outline: none;
        }
        
        .add-to-cart-btn {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            border: none;
            border-radius: 12px;
            padding: 15px 30px;
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            box-shadow: 0 6px 20px rgba(11, 61, 11, 0.3);
        }
        
        .add-to-cart-btn:hover {
            background: linear-gradient(135deg, #0a5c0a, var(--primary));
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(11, 61, 11, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .back-btn {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 12px 25px;
            color: var(--text);
            font-weight: 600;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            margin-right: 15px;
        }
        
        .back-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
            text-decoration: none;
        }
        
        /* Enhanced Footer */
        .footer {
            background: linear-gradient(135deg, var(--dark) 0%, #2d2d2d 100%) !important;
            padding-top: 50px !important;
            border-radius: 16px 16px 0 0;
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
            
            .product-details-section {
                padding: 30px 20px;
            }
            
            .product-image-container {
                height: 400px;
                margin-bottom: 30px;
            }
            
            .product-info h1 {
                font-size: 1.8rem;
            }
            
            .product-price {
                font-size: 1.6rem;
            }
        }
        
        @media (max-width: 767px) {
            .brand-logo {
                font-size: 26px;
            }
            
            .cart-btn {
                padding: 10px 16px !important;
            }
            
            .product-image-container {
                height: 300px;
            }
            
            .product-info h1 {
                font-size: 1.6rem;
            }
            
            .product-price {
                font-size: 1.4rem;
            }
            
            .quantity-selector {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .quantity-input {
                margin-bottom: 15px;
                margin-right: 0;
            }
            
            .add-to-cart-btn {
                width: 100%;
                justify-content: center;
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

    <!-- Product Details Section -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div class="product-details-section">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-image-container">
                                <img src="<?= BASE_URL . 'uploads/' . $prod['image'] ?>" alt="<?= $prod['name'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-info">
                                <h1><?= $prod['name'] ?></h1>
                                <div class="product-price">₱<?= number_format($prod['prize'], 2) ?></div>
                                <div class="product-stock">
                                    <i class="fas fa-box"></i>
                                    <?= $prod['quantity'] ?> in stock
                                </div>
                                <p class="product-description"><?= $prod['description'] ?></p>
                          
                                <form method="post" action="<?= BASE_URL . 'Ac/' . $prod['id']; ?>">
                                    <div class="quantity-selector">
                                        <input type="number" name="quantity" min="1" max="<?= $prod['quantity'] ?>" 
                                               class="quantity-input" placeholder="Qty" value="1" required>
                                        <button type="submit" class="add-to-cart-btn">
                                            <i class="fas fa-shopping-cart"></i> Add To Cart
                                        </button>
                                    </div>
                                </form>
                                
                                <div class="mt-4">
                                    <a href="/shop" class="back-btn">
                                        <i class="fas fa-arrow-left"></i> Back to Products
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Details Section End -->

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

    <!-- Back to Top -->
    <a href="#" class="btn btn-warning back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/easing/easing.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/owlcarousel/owl.carousel.min.js' ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/jqBootstrapValidation.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/contact.js' ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/js/main.js' ?>"></script>
</body>

</html>