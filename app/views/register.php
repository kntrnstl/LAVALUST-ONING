<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ONING FLIP - Register</title>
  <meta content="Shoes Store Registration" name="description">
  <meta content="shoes store, registration, account" name="keywords">

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
    .register-wrapper {
      display: flex;
      align-items: stretch; /* make both sides equal height */
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
      display: flex;
      align-items: center;
      justify-content: center;
      background: #2a4d2a; /* green box background */
      overflow: hidden;
    }

    .left-side img {
      width: 100%;
      height: 100%;
      object-fit: contain; /* show full image without cropping */
      transition: transform 0.5s ease;
    }

    .left-side img:hover {
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
      max-width: 500px;
    }

    .card-title {
      font-weight: 600;
      font-size: 26px;
      color: #d4f1be; /* soft green text */
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
      background: linear-gradient(90deg, #66bb6a, #a5d6a7); /* brighter green on hover */
      transform: scale(1.05);
      box-shadow: 0 6px 15px rgba(102, 187, 106, 0.6); /* soft green glow */
      color: #fff; /* text stays white */
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
      .register-wrapper {
        flex-direction: column;
      }

      .left-side {
        height: 220px;
      }
    }

    .password-toggle {
    position: absolute;
    right: 30px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #000; /* black color */
    font-size: 1.2rem;
  }
  </style>
</head>

<body>
  <main>
    <div class="register-wrapper">
      <!-- Left image -->
      <div class="left-side">
        <a href="/">
          <img src="public/img/ONING.jpg" alt="ONING FLIP Image">
        </a>
      </div>

      <!-- Right registration form -->
      <div class="right-side">
        <div class="card">
          <div class="card-body">
            <div class="pt-3 pb-2 text-center">
              <h5 class="card-title">Create Your Account</h5>
              <p class="small text-muted">Enter your personal details to register</p>
            </div>

            <form class="row g-3 needs-validation" novalidate method="post" action="/create">
              <div class="col-12">
                <input type="text" name="fullname" class="form-control" id="yourFullname" placeholder="Full Name" required>
                <div class="invalid-feedback">Please enter your full name!</div>
              </div>

              <div class="col-12">
                <input type="text" name="compAdd" class="form-control" id="yourCompAdd" placeholder="Address">
                <div class="invalid-feedback">Please enter your address!</div>
              </div>

              <div class="col-12">
                <input type="text" name="number" class="form-control" id="yourNumber" placeholder="Phone Number" required>
                <div class="invalid-feedback">Please enter your phone number!</div>
              </div>

              <div class="col-12">
                <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Your Email" required>
                <div class="invalid-feedback">Please enter a valid email address!</div>
              </div>

              <div class="col-12 position-relative">
                <input type="password" name="password" class="form-control" id="yourPassword" placeholder="Password" required>
                <i class="bi bi-eye-slash password-toggle" id="togglePassword"></i>
                <div class="invalid-feedback">Please enter your password!</div>
              </div>

              <div class="col-12">
                <button class="btn btn-warning w-100" type="submit">Create Account</button>
              </div>
              <div class="col-12 text-center">
                <p class="small mb-0">Already have an account? <a href="/login" class="footer-links">Log in</a></p>
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
