<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ONING FLIP - Login</title>
  <meta content="Restaurant Login" name="description">
  <meta content="restaurant, login, account" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap-icons/bootstrap-icons.css' ?>" rel="stylesheet">
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/boxicons/css/boxicons.min.css' ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo BASE_URL . PUBLIC_DIR . '/assets/css/style.css' ?>" rel="stylesheet">

  <style>
    /* === Background === */
    body {
      background: linear-gradient(135deg, #1e3d2f, #2b5e3c, #4caf50);
      font-family: 'Poppins', sans-serif;
      color: #fff;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* === Main container holding image + form === */
    .login-wrapper {
      display: flex;
      align-items: stretch;
      justify-content: center;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
      overflow: hidden;
      backdrop-filter: blur(15px);
      -webkit-backdrop-filter: blur(15px);
      max-width: 1300px;
      width: 100%;
      height: 600px;
    }

    /* === Left image side === */
    .left-side {
      flex: 1;
      background: #2a4d2a;
      position: relative;
    }

    .left-side img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.95;
      transition: 0.5s;
    }

    .left-side img:hover {
      opacity: 1;
      transform: scale(1.02);
    }

    /* === Right form side === */
    .right-side {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.4);
      padding: 50px 40px;
    }

    .card {
      background: transparent;
      border: none;
      color: #fff;
      width: 100%;
    }

    .card-title {
      font-weight: 600;
      font-size: 26px;
      color: #d4f1be;
    }

    .small.text-muted {
      color: #b8e0a5 !important;
    }

    /* === Input fields === */
    .form-control {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 15px;
      color: #e8f5e9;
      padding: 10px 15px;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #76c893;
      box-shadow: 0 0 10px rgba(118, 200, 147, 0.4);
      background: rgba(255, 255, 255, 0.12);
    }

    .form-control::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    /* === Password eye icon === */
    .password-toggle {
      position: absolute;
      right: 30px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #000; /* black color */
      font-size: 1.2rem;
    }

    /* === Button === */
    .btn-warning {
      background: linear-gradient(90deg, #43a047, #81c784);
      border: none;
      border-radius: 15px;
      font-weight: 600;
      color: #fff;
      transition: all 0.3s ease;
      box-shadow: 0 4px 8px rgba(67, 160, 71, 0.3);
    }

    .btn-warning:hover {
      background: linear-gradient(90deg, #66bb6a, #a5d6a7);
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(102, 187, 106, 0.6);
      color: #fff;
    }

    /* === Checkbox & footer === */
    .form-check-label {
      color: #d4f1be;
    }

    .footer-links {
      color: #a5d6a7;
      transition: 0.3s ease;
    }

    .footer-links:hover {
      color: #ffffff;
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .login-wrapper {
        flex-direction: column;
      }

      .left-side {
        height: 220px;
      }
    }
  </style>
</head>

<body>
  <main>
    <div class="login-wrapper">
      <!-- Left image -->
      <div class="left-side">
        <a href="/">
          <img src="public/img/ONING.jpg" alt="ONING FLIP Image">
        </a>
      </div>

      <!-- Right login form -->
      <div class="right-side">
        <div class="card">
          <div class="card-body">
            <div class="pt-3 pb-2 text-center">
              <h5 class="card-title">Login to Your Account</h5>
              <p class="small text-muted">Enter your email & password to login</p>
            </div>

            <form class="row g-3 needs-validation" novalidate method="post" action="/auth">
              <div class="col-12">
                <input type="text" name="email" class="form-control" id="yourEmail" placeholder="Email" required>
                <div class="invalid-feedback">Please enter your email address!</div>
              </div>

              <div class="col-12 position-relative">
                <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                <i class="bi bi-eye-slash password-toggle" id="togglePassword"></i>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
              </div>

              <div class="col-12">
                <button class="btn btn-warning w-100" type="submit">Login</button>
              </div>
              <div class="col-12 text-center">
                <p class="small mb-0">Don't have an account? <a href="/register" class="footer-links">Create an account</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Vendor JS Files -->
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>
  <script src="<?php echo BASE_URL . PUBLIC_DIR . '/assets/js/main.js' ?>"></script>

  <!-- Password Toggle Script -->
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#yourPassword');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.classList.toggle('bi-eye');
      this.classList.toggle('bi-eye-slash');
    });
  </script>
</body>

</html>
