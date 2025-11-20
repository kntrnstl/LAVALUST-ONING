<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Thank You - ONING FLIP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <style>
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

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            color: var(--text);
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .thank-you-container {
            background: white;
            border-radius: 20px;
            box-shadow: var(--shadow);
            padding: 50px 40px;
            text-align: center;
            max-width: 600px;
            width: 100%;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(11, 61, 11, 0.1);
        }

        .thank-you-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 8px 20px rgba(11, 61, 11, 0.3);
            position: relative;
            animation: pulse 2s infinite;
        }

        .success-icon i {
            color: white;
            font-size: 48px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 8px 20px rgba(11, 61, 11, 0.3);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 12px 25px rgba(11, 61, 11, 0.4);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 8px 20px rgba(11, 61, 11, 0.3);
            }
        }

        .thank-you-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .thank-you-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: var(--accent);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .thank-you-subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
            font-weight: 500;
        }

        .thank-you-message {
            font-size: 1.1rem;
            margin-bottom: 40px;
            color: #555;
            line-height: 1.8;
        }

        .order-details {
            background: rgba(11, 61, 11, 0.05);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: left;
            border-left: 4px solid var(--primary);
        }

        .order-details h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.2rem;
        }

        .order-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px dashed rgba(11, 61, 11, 0.2);
        }

        .order-info:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .info-label {
            font-weight: 600;
            color: var(--text);
        }

        .info-value {
            color: var(--primary);
            font-weight: 600;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .btn {
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
            border: none;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #0a5c0a);
            color: white;
            box-shadow: 0 6px 15px rgba(11, 61, 11, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #0a5c0a, var(--primary));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(11, 61, 11, 0.4);
            color: white;
        }

        .btn-outline {
            background: white;
            color: var(--primary);
            border: 2px solid var(--primary);
            box-shadow: 0 4px 10px rgba(11, 61, 11, 0.1);
        }

        .btn-outline:hover {
            background: rgba(11, 61, 11, 0.05);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(11, 61, 11, 0.2);
        }

        .confirmation-message {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 25px;
            border-left: 4px solid #28a745;
            font-weight: 500;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 0.9rem;
        }

        .footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .footer a:hover {
            color: var(--accent);
        }

        .brand-logo {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 10px;
            display: inline-block;
        }

        .brand-primary {
            color: var(--primary);
            position: relative;
        }

        .brand-primary::after {
            content: '';
            position: absolute;
            width: 6px;
            height: 6px;
            background: var(--accent);
            border-radius: 50%;
            bottom: 5px;
            right: -5px;
        }

        .brand-secondary {
            color: var(--dark);
            font-weight: 600;
        }

        /* Responsive adjustments */
        @media (max-width: 576px) {
            .thank-you-container {
                padding: 40px 25px;
            }

            .thank-you-title {
                font-size: 2rem;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="thank-you-container">
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        
        <h1 class="thank-you-title">THANK YOU!</h1>
        <p class="thank-you-subtitle">Your order has been confirmed</p>
        
        <div class="confirmation-message">
            <i class="fas fa-check-circle"></i> Order confirmed successfully
        </div>
        
        <p class="thank-you-message">
            Thank you for choosing ONING FLIP! Your order has been received and is being processed. 
            You will receive a confirmation email shortly with your order details.
        </p>
        
        <div class="order-details">
            <h3><i class="fas fa-receipt"></i> Order Summary</h3>
            <div class="order-info">
                <span class="info-label">Order Number:</span>
                <span class="info-value">#ONF-<?php echo rand(1000, 9999); ?></span>
            </div>
            <div class="order-info">
                <span class="info-label">Order Date:</span>
                <span class="info-value"><?php echo date('F j, Y'); ?></span>
            </div>
            <div class="order-info">
                <span class="info-label">Total Amount:</span>
                <span class="info-value">₱<?php 
                    $total = $_SESSION['thankyou_total'] ?? 0.00;
                    echo number_format($total, 2); 
                ?></span>
            </div>
            <div class="order-info">
                <span class="info-label">Payment Method:</span>
                <span class="info-value"><?php 
                    $payment = $_SESSION['thankyou_payment'] ?? 'Cash on Delivery';
                    echo $payment;
                ?></span>
            </div>
        </div>
        
        <div class="action-buttons">
            <a href="/shop" class="btn btn-outline">
                <i class="fas fa-shopping-bag"></i> Continue Shopping
            </a>
            <a href="/main" class="btn btn-primary">
                <i class="fas fa-home"></i> Back to Home
            </a>
        </div>
        
        <div class="footer">
            <div class="brand-logo">
                <span class="brand-primary">ONING</span>
                <span class="brand-secondary">FLIP</span>
            </div>
            <p>Need help? <a href="mailto:oningflip@gmail.com">Contact our support team</a></p>
            <p class="site-footer__fineprint">Copyright ©<?php echo date('Y'); ?> ONING FLIP | All Rights Reserved</p>
        </div>
    </div>

    <script>
        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add confetti effect on page load
            setTimeout(function() {
                createConfetti();
            }, 500);
            
            function createConfetti() {
                const colors = ['#0b3d0b', '#a3ffb3', '#ff6b35', '#1a1a1a'];
                const confettiCount = 50;
                
                for (let i = 0; i < confettiCount; i++) {
                    const confetti = document.createElement('div');
                    confetti.style.position = 'fixed';
                    confetti.style.width = '10px';
                    confetti.style.height = '10px';
                    confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.borderRadius = '50%';
                    confetti.style.top = '0';
                    confetti.style.left = Math.random() * 100 + 'vw';
                    confetti.style.opacity = '0.7';
                    confetti.style.zIndex = '9999';
                    confetti.style.pointerEvents = 'none';
                    document.body.appendChild(confetti);
                    
                    // Animate confetti
                    const animation = confetti.animate([
                        { transform: 'translateY(0) rotate(0deg)', opacity: 0.7 },
                        { transform: `translateY(${window.innerHeight}px) rotate(${Math.random() * 360}deg)`, opacity: 0 }
                    ], {
                        duration: 2000 + Math.random() * 2000,
                        easing: 'cubic-bezier(0.1, 0.8, 0.2, 1)'
                    });
                    
                    animation.onfinish = () => confetti.remove();
                }
            }
        });
    </script>
</body>
</html>