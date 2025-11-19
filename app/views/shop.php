<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP - Products</title>
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
        
        /* Enhanced Search Section */
        .search-section {
            background: white;
            border-radius: 16px;
            padding: 25px;
            box-shadow: var(--shadow);
            margin-bottom: 30px;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .search-container {
            display: flex;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .search-form {
            flex: 1;
            min-width: 300px;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            border: 2px solid #e9ecef;
            border-radius: 50px;
            padding: 15px 50px 15px 25px;
            font-size: 1rem;
            transition: var(--transition);
            background: #f8f9fa;
            font-weight: 500;
        }
        
        .search-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(11, 61, 11, 0.1);
            background: white;
            outline: none;
        }
        
        .search-icon {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--primary);
            font-size: 1.1rem;
        }
        
        .action-buttons {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .refresh-btn {
            background: var(--accent);
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.1rem;
            transition: var(--transition);
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
        }
        
        .refresh-btn:hover {
            background: #ff8533;
            transform: translateY(-2px) rotate(90deg);
            box-shadow: 0 6px 20px rgba(255, 107, 53, 0.4);
            color: white;
        }
        
        .sort-dropdown {
            position: relative;
        }
        
        .sort-btn {
            background: white;
            border: 2px solid #e9ecef;
            border-radius: 50px;
            padding: 12px 25px;
            color: var(--text);
            font-weight: 500;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            min-width: 150px;
        }
        
        .sort-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-1px);
        }
        
        .sort-btn i {
            transition: var(--transition);
        }
        
        .sort-dropdown.show .sort-btn i {
            transform: rotate(180deg);
        }
        
        .dropdown-menu {
            border: none;
            border-radius: 12px;
            box-shadow: var(--shadow);
            padding: 10px 0;
            min-width: 150px;
        }
        
        .dropdown-item {
            padding: 10px 20px;
            transition: var(--transition);
            font-weight: 500;
        }
        
        .dropdown-item:hover {
            background: rgba(11, 61, 11, 0.1);
            color: var(--primary);
        }
        
        /* Enhanced Product Cards */
        .product-item {
            border: none !important;
            border-radius: 16px;
            overflow: hidden;
            transition: var(--transition);
            background: white;
            box-shadow: var(--shadow);
            height: 100%;
        }
        
        .product-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }
        
        .card-header.product-img {
            height: 300px;
            padding: 0;
            border: none;
            overflow: hidden;
            position: relative;
        }
        
        .card-header.product-img:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent 70%, rgba(0,0,0,0.3));
            z-index: 1;
            opacity: 0;
            transition: var(--transition);
        }
        
        .product-item:hover .card-header.product-img:before {
            opacity: 1;
        }
        
        .card-header.product-img img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            transition: var(--transition);
        }
        
        .product-item:hover .card-header.product-img img {
            transform: scale(1.05);
        }
        
        .card-body {
            padding: 20px 15px 10px !important;
            border: none !important;
        }
        
        .card-body h6 {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 10px;
            font-size: 1.1rem;
            min-height: 2.6rem;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .card-body h6.price {
            color: var(--accent);
            font-weight: 700;
            font-size: 1.3rem;
            margin: 0;
        }
        
        .card-footer {
            background: white !important;
            border: none !important;
            padding: 15px !important;
            border-top: 1px solid rgba(0,0,0,0.05) !important;
        }
        
        /* Enhanced Add to Cart Button */
        .add-to-cart-btn {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            color: white;
            font-weight: 600;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(11, 61, 11, 0.3);
        }
        
        .add-to-cart-btn:hover {
            background: linear-gradient(135deg, #0a5c0a, var(--primary));
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(11, 61, 11, 0.4);
            color: white;
            text-decoration: none;
        }
        
        .add-to-cart-btn i {
            color: white;
        }
        
        /* Enhanced Alert */
        .alert-info {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border: none;
            border-radius: 12px;
            color: #1565c0;
            font-weight: 500;
            padding: 20px;
            text-align: center;
            box-shadow: var(--shadow);
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
        
        /* Enhanced Search Results */
        .search-results {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            max-height: 400px;
            overflow-y: auto;
            display: none;
            margin-top: 10px;
        }
        
        .search-result-item {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
            text-decoration: none;
            color: var(--text);
            transition: var(--transition);
        }
        
        .search-result-item:last-child {
            border-bottom: none;
        }
        
        .search-result-item:hover {
            background-color: #f8f9fa;
            text-decoration: none;
            color: var(--text);
        }
        
        .search-result-img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            object-fit: cover;
            margin-right: 15px;
        }
        
        .search-result-info {
            flex: 1;
        }
        
        .search-result-name {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 0.95rem;
        }
        
        .search-result-price {
            color: var(--accent);
            font-weight: 700;
            font-size: 0.9rem;
        }
        
        .search-loading {
            padding: 20px;
            text-align: center;
            color: #666;
        }
        
        .search-loading i {
            margin-right: 8px;
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
            
            .card-header.product-img {
                height: 250px;
            }
            
            .search-container {
                flex-direction: column;
                align-items: stretch;
            }
            
            .search-form {
                min-width: auto;
            }
            
            .action-buttons {
                justify-content: space-between;
            }
        }
        
        @media (max-width: 767px) {
            .brand-logo {
                font-size: 26px;
            }
            
            .cart-btn {
                padding: 10px 16px !important;
            }
            
            .search-section {
                padding: 20px 15px;
            }
            
            .card-header.product-img {
                height: 200px;
            }
            
            .sort-btn {
                min-width: 120px;
                padding: 10px 20px;
            }
            
            .search-results {
                max-height: 300px;
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
                            <a href="/shop" class="nav-item nav-link active">Products</a>
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

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-12 col-md-12">
                <!-- Enhanced Search Section -->
                <div class="search-section">
                    <div class="search-container">
                        <div class="search-form">
                            <input type="text" class="search-input" id="searchInput" name="search" placeholder="Search products...">
                            <i class="fas fa-search search-icon"></i>
                            <div class="search-results" id="searchResults">
                                <!-- Search results will be populated here -->
                            </div>
                        </div>
                        <div class="action-buttons">
                            <a href="/shop" class="refresh-btn" onclick="location.reload(true)" title="Refresh">
                                <i class="fas fa-sync-alt"></i>
                            </a>
                            <div class="sort-dropdown dropdown">
                                <button class="sort-btn dropdown-toggle" type="button" id="sortDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-sort"></i>
                                    Sort by
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sortDropdown">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pb-3" id="productContainer">
                    <?php if (empty($prod)): ?>
                        <div class="col-12">
                            <div class="alert alert-info mt-3" role="alert">
                                No items found.
                            </div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($prod as $pr): ?>
                            <div class="col-lg-3 col-md-6 col-sm-12 pb-4 product-card">
                                <div class="card product-item border-0 mb-4 h-100">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <a href="<?php echo BASE_URL . 'view/' . $pr['id']; ?>">
                                            <img class="img-fluid w-100" src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="<?= $pr['name'] ?>">
                                        </a>
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3"><?= $pr['name'] ?></h6>
                                        <div class="d-flex justify-content-center">
                                            <h6 class="price">₱<?= number_format($pr['prize'], 2) ?></h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="<?php echo BASE_URL . 'view/' . $pr['id']; ?>" class="add-to-cart-btn">
                                            <i class="fas fa-shopping-cart"></i>Add To Cart
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Shop End -->

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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/easing/easing.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/lib/owlcarousel/owl.carousel.min.js' ?>"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/jqBootstrapValidation.min.js' ?>"></script>
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/mail/contact.js' ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR . '/js/main.js' ?>"></script>

    <script>
        // Enhanced Search Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            const productContainer = document.getElementById('productContainer');
            const productCards = document.querySelectorAll('.product-card');
            
            let searchTimeout;
            
            // Function to perform search
            function performSearch(query) {
                if (query.length < 2) {
                    searchResults.style.display = 'none';
                    return;
                }
                
                // Show loading indicator
                searchResults.innerHTML = '<div class="search-loading"><i class="fas fa-spinner fa-spin"></i>Searching...</div>';
                searchResults.style.display = 'block';
                
                // Clear previous timeout
                clearTimeout(searchTimeout);
                
                // Set a new timeout to simulate API call
                searchTimeout = setTimeout(() => {
                    // Filter products based on query
                    const filteredProducts = Array.from(productCards).filter(card => {
                        const productName = card.querySelector('h6').textContent.toLowerCase();
                        return productName.includes(query.toLowerCase());
                    });
                    
                    // Update search results
                    if (filteredProducts.length > 0) {
                        searchResults.innerHTML = '';
                        filteredProducts.forEach(card => {
                            const productName = card.querySelector('h6').textContent;
                            const productPrice = card.querySelector('.price').textContent;
                            const productImage = card.querySelector('img').src;
                            const productLink = card.querySelector('a').href;
                            
                            const resultItem = document.createElement('a');
                            resultItem.className = 'search-result-item';
                            resultItem.href = productLink;
                            
                            resultItem.innerHTML = `
                                <img src="${productImage}" alt="${productName}" class="search-result-img">
                                <div class="search-result-info">
                                    <div class="search-result-name">${productName}</div>
                                    <div class="search-result-price">${productPrice}</div>
                                </div>
                            `;
                            
                            searchResults.appendChild(resultItem);
                        });
                    } else {
                        searchResults.innerHTML = '<div class="search-loading">No products found</div>';
                    }
                }, 300); // Simulate network delay
            }
            
            // Event listener for search input
            searchInput.addEventListener('input', function() {
                performSearch(this.value);
            });
            
            // Hide search results when clicking outside
            document.addEventListener('click', function(e) {
                if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                    searchResults.style.display = 'none';
                }
            });
            
            // Show search results when focusing on input
            searchInput.addEventListener('focus', function() {
                if (this.value.length >= 2) {
                    performSearch(this.value);
                }
            });
            
            // Filter products in the main container as user types
            searchInput.addEventListener('input', function() {
                const query = this.value.toLowerCase();
                
                productCards.forEach(card => {
                    const productName = card.querySelector('h6').textContent.toLowerCase();
                    if (productName.includes(query)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                // Show message if no products match
                const visibleProducts = Array.from(productCards).filter(card => card.style.display !== 'none');
                const noItemsAlert = document.querySelector('.alert-info');
                
                if (visibleProducts.length === 0 && !noItemsAlert) {
                    const alertDiv = document.createElement('div');
                    alertDiv.className = 'col-12';
                    alertDiv.innerHTML = '<div class="alert alert-info mt-3" role="alert">No items found matching your search.</div>';
                    productContainer.appendChild(alertDiv);
                } else if (visibleProducts.length > 0 && noItemsAlert) {
                    noItemsAlert.remove();
                }
            });
        });
    </script>
</body>

</html>