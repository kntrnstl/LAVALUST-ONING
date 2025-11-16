<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ONING FLIP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Sneakers, Footwear, Fashion" name="keywords">
    <meta content="Premium sneakers and footwear at ONING FLIP." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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
    
    /* Enhanced Carousel */
    .carousel-item {
        height: 500px;
        position: relative;
    }
    
    .carousel-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0,0,0,0.7), rgba(0,0,0,0.3));
        z-index: 1;
    }
    
    .carousel-item img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }
    
    .carousel-caption {
        z-index: 2;
        bottom: 30% !important;
        text-align: left;
        max-width: 600px;
        left: 10%;
    }
    
    .carousel-caption h4 {
        font-size: 1.3rem;
        font-weight: 500;
        letter-spacing: 1px;
        margin-bottom: 15px;
        color: var(--primary-light);
    }
    
    .carousel-caption h3 {
        font-size: 3.2rem;
        font-weight: 700;
        margin-bottom: 25px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        line-height: 1.2;
    }
    
    /* Enhanced Carousel Buttons */
    .carousel-caption .btn {
        background: linear-gradient(135deg, var(--accent), #ff8533);
        border: none;
        border-radius: 12px;
        padding: 14px 40px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: var(--transition);
        box-shadow: 0 6px 20px rgba(255, 107, 53, 0.4);
        position: relative;
        overflow: hidden;
    }
    
    .carousel-caption .btn:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
        transition: var(--transition);
    }
    
    .carousel-caption .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 107, 53, 0.5);
    }
    
    .carousel-caption .btn:hover:before {
        left: 100%;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.8;
        transition: var(--transition);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .carousel-control-prev {
        left: 30px;
    }
    
    .carousel-control-next {
        right: 30px;
    }
    
    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        opacity: 1;
        background: rgba(255, 255, 255, 0.25);
        transform: translateY(-50%) scale(1.1);
    }
    
    /* Enhanced Featured Section */
    .feature-box {
        border: none !important;
        border-radius: 16px;
        padding: 40px 25px !important;
        transition: var(--transition);
        background: white;
        box-shadow: var(--shadow);
        text-align: center;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .feature-box:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary), var(--accent));
    }
    
    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .feature-box i {
        font-size: 2.8rem;
        margin-bottom: 20px;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
        transition: var(--transition);
    }
    
    .feature-box:hover i {
        transform: scale(1.1);
    }
    
    .feature-box h5 {
        font-weight: 600;
        color: var(--dark);
        margin-bottom: 10px;
    }
    
    /* Enhanced Contact Section */
    .contact-section {
        padding: 80px 0;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-radius: 20px;
        margin: 40px 0;
    }
    
    .section-title {
        position: relative;
        display: inline-block;
        margin-bottom: 50px;
    }
    
    .section-title:before {
        content: '';
        position: absolute;
        width: 80%;
        height: 4px;
        bottom: -15px;
        left: 10%;
        background: linear-gradient(90deg, var(--primary), var(--accent));
        border-radius: 10px;
    }
    
    .contact-heading {
        color: var(--accent) !important;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 10px;
    }
    
    .contact-subheading {
        color: var(--primary) !important;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 30px;
    }
    
    .contact-description {
        font-size: 1.1rem;
        color: #666;
        margin-bottom: 40px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .contact-card {
        background: white;
        border-radius: 20px;
        padding: 50px 40px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(11, 61, 11, 0.1);
        position: relative;
        overflow: hidden;
    }
    
    .contact-card:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, var(--primary), var(--accent));
    }
    
    .contact-info-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
        padding: 20px;
        border-radius: 12px;
        transition: var(--transition);
        background: rgba(11, 61, 11, 0.03);
    }
    
    .contact-info-item:hover {
        background: rgba(11, 61, 11, 0.08);
        transform: translateX(10px);
    }
    
    .contact-icon {
        color: var(--accent);
        font-size: 1.5rem;
        margin-right: 20px;
        min-width: 30px;
        text-align: center;
    }
    
    .contact-details h5 {
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 1.1rem;
    }
    
    .contact-details p {
        color: #666;
        margin: 0;
        font-size: 1rem;
    }
    
    .contact-divider {
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--primary), transparent);
        margin: 30px 0;
        opacity: 0.3;
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
    
    /* Responsive Adjustments */
    @media (max-width: 991px) {
        .carousel-item {
            height: 400px;
        }
        
        .carousel-caption h3 {
            font-size: 2.2rem;
        }
        
        .carousel-caption h4 {
            font-size: 1.1rem;
        }
        
        .nav-link {
            padding: 12px 20px !important;
            margin: 2px 0;
        }
        
        .navbar-container {
            border-radius: 0;
        }
        
        .contact-card {
            padding: 30px 25px;
        }
    }
    
    @media (max-width: 767px) {
        .carousel-item {
            height: 350px;
        }
        
        .carousel-caption {
            bottom: 20% !important;
            left: 5%;
        }
        
        .carousel-caption h3 {
            font-size: 1.8rem;
        }
        
        .carousel-caption h4 {
            font-size: 1rem;
        }
        
        .carousel-caption .btn {
            padding: 12px 30px;
            font-size: 0.9rem;
        }
        
        .feature-box {
            margin-bottom: 20px;
        }
        
        .brand-logo {
            font-size: 26px;
        }
        
        .cart-btn {
            padding: 10px 16px !important;
        }
        
        .contact-section {
            padding: 50px 0;
            margin: 20px 0;
        }
        
        .contact-heading {
            font-size: 2rem;
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
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/menu" class="nav-item nav-link">Products</a>
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="/register" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="height: 410px;">
                <img class="img-fluid" src="public/img/1.jpg" alt="Sneaker Collection">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Premium Sneakers</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Step Up Your Style</h3>
                        <a href="/menu" class="btn btn-light py-2 px-3">Shop Now</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid" src="public/img/2.jpg" alt="Comfortable Footwear">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Comfort Meets Style</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Made for Everyday Wear</h3>
                        <a href="/menu" class="btn btn-light py-2 px-3">Shop Now</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid" src="public/img/3.jpg" alt="Limited Edition Shoes">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Exclusive Releases</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Limited Edition Sneakers</h3>
                        <a href="/menu" class="btn btn-light py-2 px-3">Grab Yours Now</a>
                    </div>
                </div>
            </div>

            <!-- Slide 4 -->
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid" src="public/img/4.jpg" alt="Sports Shoes">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Performance Ready</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">Engineered for Athletes</h3>
                        <a href="/menu" class="btn btn-light py-2 px-3">Explore Collection</a>
                    </div>
                </div>
            </div>

            <!-- Slide 5 -->
            <div class="carousel-item" style="height: 410px;">
                <img class="img-fluid" src="public/img/5.jpg" alt="Stylish Sneakers">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h4 class="text-light text-uppercase font-weight-medium mb-3">Trendy Footwear</h4>
                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">For Every Occasion</h3>
                        <a href="/menu" class="btn btn-light py-2 px-3">Shop Now</a>
                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4 feature-box">
                    <h1 class="fa fa-leaf m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Walk Naturally</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4 feature-box">
                    <h1 class="fa fa-shipping-fast m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Fast Delivery</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4 feature-box">
                    <h1 class="fas fa-box-open m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Products</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4 feature-box">
                    <h1 class="fa fa-headset m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Customer Support</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->

    <!-- Enhanced Contact Section -->
    <div class="container-fluid contact-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title px-5">
                    <span class="px-2 contact-heading">Contact Us</span>
                </h2>
                <h5 class="contact-subheading">Get In Touch</h5>
                <p class="contact-description">Have questions about our products, need help with your order, or want to collaborate? Feel free to reach out to us. We're here to assist you!</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <div class="text-center mb-4">
                            <h5 class="contact-subheading">Main Office</h5>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h5>Our Location</h5>
                                <p>8C, Greenville Drive, Sauyo, Quezon City, Philippines, 1116</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-details">
                                <h5>Email Address</h5>
                                <p>oningflip@gmail.com</p>
                            </div>
                        </div>
                        
                        <div class="contact-info-item">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-details">
                                <h5>Phone Number</h5>
                                <p>0915 977 2091</p>
                            </div>
                        </div>
                        
                        <div class="contact-divider"></div>
                        
                        <div class="text-center">
                            <p class="text-muted mb-0">We typically respond within 24 hours</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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
</body>

</html>