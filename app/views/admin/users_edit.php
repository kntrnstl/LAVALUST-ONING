<!DOCTYPE html>
<html lang="en">

<?php echo include('chop/head.php'); ?>

<style>
  :root {
    --primary-green: #145214;
    --dark-green: #0d3a0d;
    --light-green: #e8f5e8;
    --accent-green: #1e7e1e;
    --white: #ffffff;
    --light-gray: #f8f9fa;
    --medium-gray: #e9ecef;
    --dark-gray: #495057;
  }

  body {
    background-color: var(--white);
    font-family: 'Poppins', sans-serif;
    color: #2d2d2d;
  }

  .pagetitle h1 {
    color: var(--dark-green);
    font-weight: 700;
    font-size: 1.8rem;
    position: relative;
    padding-bottom: 10px;
  }

  .pagetitle h1::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background-color: var(--accent-green);
    border-radius: 2px;
  }

  .card {
    border: none;
    border-radius: 12px;
    transition: 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    margin-bottom: 1.5rem;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  }

  .card-body h5.card-title {
    color: var(--dark-green);
    font-weight: 600;
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 10px;
  }
  
  .card-body h5.card-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: var(--accent-green);
  }

  /* Form Styles */
  .form-control, .form-select {
    border: 1px solid var(--medium-gray);
    border-radius: 8px;
    padding: 12px 16px;
    font-size: 0.95rem;
    transition: all 0.3s ease;
  }

  .form-control:focus, .form-select:focus {
    border-color: var(--accent-green);
    box-shadow: 0 0 0 0.2rem rgba(30, 126, 30, 0.15);
  }

  .form-floating > .form-control:focus ~ label,
  .form-floating > .form-control:not(:placeholder-shown) ~ label {
    color: var(--dark-green);
    font-weight: 500;
  }

  .form-label {
    color: var(--dark-gray);
    font-weight: 500;
    margin-bottom: 8px;
  }

  /* Button Styles */
  .btn-green {
    background-color: var(--primary-green);
    color: white;
    border: none;
    padding: 10px 24px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
  }
  
  .btn-green:hover {
    background-color: var(--dark-green);
    color: white;
    transform: translateY(-2px);
  }

  .btn-outline-danger {
    border: 1px solid #dc3545;
    color: #dc3545;
    padding: 10px 24px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
  }

  .btn-outline-danger:hover {
    background-color: #dc3545;
    color: #fff;
    transform: translateY(-2px);
  }

  /* Stats Highlight */
  .stats-highlight {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--accent-green) 100%);
    color: white;
    border-radius: 12px;
    padding: 20px;
    margin-bottom: 20px;
  }
  
  .stats-highlight h3 {
    font-weight: 700;
    margin-bottom: 5px;
  }
  
  .stats-highlight p {
    opacity: 0.9;
    margin-bottom: 0;
  }

  /* Note Text */
  .note-text {
    color: var(--dark-gray);
    font-size: 0.9rem;
    font-style: italic;
    margin-bottom: 15px;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 15px;
    }
    
    .card-body {
      padding: 20px;
    }
    
    .btn-green, .btn-outline-danger {
      width: 100%;
      margin-bottom: 10px;
    }
  }
</style>

<body>
  <?php echo include('chop/header.php'); ?>
  <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1>Edit User</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>User Management</h3>
              <p>Update user information and permissions</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit User Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" action="/admin/users/update/<?= $user['id'] ?>">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" name="email" 
                           value="<?= $user['email'] ?>" placeholder="Email" required>
                    <label for="floatingEmail">Email Address</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" 
                           placeholder="Password">
                    <label for="floatingPassword">Password (Leave empty to keep current)</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingFullname" name="fullname" 
                           value="<?= $user['fullname'] ?>" placeholder="Fullname">
                    <label for="floatingFullname">Full Name</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingContact" name="number" 
                           value="<?= $user['number'] ?>" placeholder="Contact Number">
                    <label for="floatingContact">Contact Number</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingAddress" name="compAdd" 
                           value="<?= $user['compAdd'] ?>" placeholder="Company Address">
                    <label for="floatingAddress">Address</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingRole" name="role" aria-label="Role">
                      <option value="admin" <?= $user['role']=='admin'?'selected':'' ?>>Admin</option>
                      <option value="user" <?= $user['role']=='user'?'selected':'' ?>>User</option>
                    </select>
                    <label for="floatingRole">User Role</label>
                  </div>
                </div>
                
                <div class="col-12 text-center mt-4">
                  <button class="btn-green px-4" type="submit">Update User</button>
                  <a href="/admin/users" class="btn-outline-danger px-4 btn">Cancel</a>
                </div>
              </form>
              <!-- End Floating Labels Form -->
            </div>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User Information</h5>
              <p class="note-text">User ID: <?= $user['id'] ?></p>
              
              <div class="mb-4">
                <h6 class="fw-semibold mb-3" style="color: var(--dark-green);">Current Details:</h6>
                <div class="mb-2">
                  <strong>Email:</strong> <?= $user['email'] ?>
                </div>
                <div class="mb-2">
                  <strong>Full Name:</strong> <?= $user['fullname'] ?>
                </div>
                <div class="mb-2">
                  <strong>Role:</strong> 
                  <span class="role-badge <?= $user['role'] ?>" style="margin-left: 8px;">
                    <?= ucfirst($user['role']) ?>
                  </span>
                </div>
                <div class="mb-2">
                  <strong>Contact:</strong> <?= $user['number'] ?>
                </div>
                <div class="mb-2">
                  <strong>Company Address:</strong> <?= $user['compAdd'] ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php echo include('chop/script.php'); ?>

</body>
</html>