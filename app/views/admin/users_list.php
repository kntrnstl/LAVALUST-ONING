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

  /* Table Styles */
  .table-container {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
  }
  
  .table {
    margin-bottom: 0;
  }
  
  .table thead th {
    background-color: var(--primary-green);
    color: white;
    border: none;
    padding: 15px 12px;
    font-weight: 600;
  }
  
  .table tbody td {
    padding: 12px;
    vertical-align: middle;
    border-color: var(--medium-gray);
  }
  
  .table tbody tr:nth-child(even) {
    background-color: var(--light-gray);
  }
  
  .table tbody tr:hover {
    background-color: rgba(30, 126, 30, 0.05);
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

  .btn-outline-primary {
    border: 1px solid #0d6efd;
    color: #0d6efd;
    padding: 10px 24px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
  }

  .btn-outline-primary:hover {
    background-color: #0d6efd;
    color: #fff;
    transform: translateY(-2px);
  }

  .btn-sm {
    padding: 6px 12px;
    font-size: 0.875rem;
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

  /* Role Badges */
  .role-badge {
    background-color: var(--light-green);
    color: var(--dark-green);
    border: 1px solid var(--accent-green);
    padding: 6px 12px;
    border-radius: 20px;
    font-weight: 500;
    font-size: 0.85rem;
    display: inline-block;
  }
  
  .role-badge.admin {
    background-color: #e8f5e8;
    color: var(--dark-green);
    border-color: var(--accent-green);
  }
  
  .role-badge.user {
    background-color: #e8f0f5;
    color: #0d3a5c;
    border-color: #1e6e7e;
  }

  /* Action buttons container - FIXED */
  .action-buttons {
    display: flex;
    gap: 8px;
    flex-wrap: nowrap;
    justify-content: center;
  }
  
  .action-buttons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    border-radius: 6px;
    font-weight: 500;
    font-size: 0.875rem;
    padding: 6px 12px;
    transition: all 0.3s;
    min-width: 60px;
  }
  
  .action-buttons .btn-outline-primary {
    border: 1px solid #0d6efd;
    color: #0d6efd;
    background-color: transparent;
  }
  
  .action-buttons .btn-outline-primary:hover {
    background-color: #0d6efd;
    color: white;
    transform: translateY(-2px);
  }
  
  .action-buttons .btn-outline-danger {
    border: 1px solid #dc3545;
    color: #dc3545;
    background-color: transparent;
  }
  
  .action-buttons .btn-outline-danger:hover {
    background-color: #dc3545;
    color: white;
    transform: translateY(-2px);
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 15px;
    }
    
    .card-body {
      padding: 20px;
    }
    
    .btn-green, .btn-outline-danger, .btn-outline-primary {
      width: 100%;
      margin-bottom: 10px;
    }
    
    .table-container {
      overflow-x: auto;
    }
    
    .action-buttons {
      flex-direction: column;
      gap: 5px;
    }
    
    .action-buttons a {
      width: 100%;
    }
  }
</style>

<body>
  <?php echo include('chop/header.php'); ?>
  <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1>User Management</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>User Management System</h3>
              <p>Manage user accounts, roles, and permissions</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="row">
        <!-- User List Table -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User List</h5>
              
              <div class="table-responsive">
                <table class="table table-borderless datatable align-middle">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Fullname</th>
                      <th>Role</th>
                      <th>Contact</th>
                      <th>Address</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($users as $u): ?>
                      <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['fullname'] ?></td>
                        <td>
                          <span class="role-badge <?= $u['role'] ?>">
                            <?= ucfirst($u['role']) ?>
                          </span>
                        </td>
                        <td><?= $u['number'] ?></td>
                        <td><?= $u['compAdd'] ?></td>
                        <td>
                          <div class="action-buttons">
                            <a href="/admin/users/edit/<?= $u['id'] ?>" class="btn-outline-primary">Edit</a>
                            <a onclick="return confirm('Delete this user?')" href="/admin/users/delete/<?= $u['id'] ?>" class="btn-outline-danger">Delete</a>
                          </div>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Add User Form -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add New User</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" action="/admin/users/add">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" name="email" placeholder=" " required>
                    <label for="floatingEmail">Email Address</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder=" " required>
                    <label for="floatingPassword">Password</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingFullname" name="fullname" placeholder=" " required>
                    <label for="floatingFullname">Full Name</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingContact" name="number" placeholder=" " required>
                    <label for="floatingContact">Contact Number</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingAddress" name="compAdd" placeholder=" " required>
                    <label for="floatingAddress">Address</label>
                  </div>
                </div>
                
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingRole" name="role" aria-label="Role">
                      <option value="admin">Admin</option>
                      <option value="user">User</option>
                    </select>
                    <label for="floatingRole">User Role</label>
                  </div>
                </div>
                
                <div class="col-12 text-center mt-4">
                  <button class="btn-green px-4" type="submit">Create User</button>
                  <button type="reset" class="btn-outline-danger px-4 btn">Reset Form</button>
                </div>
              </form>
              <!-- End Floating Labels Form -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php echo include('chop/script.php'); ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const dataTable = new simpleDatatables.DataTable(".datatable", {
      searchable: true,
      fixedHeight: true,
      perPage: 10,
      perPageSelect: [5, 10, 25, 50]
    });
  });
</script>

</body>
</html>