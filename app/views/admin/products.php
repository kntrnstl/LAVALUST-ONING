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

  .card.info-card {
    background-color: var(--white);
    border-top: 4px solid var(--primary-green);
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

  .table-responsive {
    overflow-x: auto;
  }

  table {
    color: #2d2d2d;
    border-collapse: separate;
    border-spacing: 0;
  }

  thead th {
    color: var(--dark-green);
    font-weight: 600;
    border-bottom: 2px solid var(--light-green);
    background-color: var(--light-green);
    padding: 12px 15px;
  }

  tbody td {
    padding: 12px 15px;
    border-bottom: 1px solid var(--medium-gray);
  }

  tbody tr:hover {
    background-color: var(--light-green);
  }

  tbody tr.low-stock {
    background-color: #ffdddd !important;
    color: #b71c1c !important;
    font-weight: 600;
  }

  tbody tr.low-stock td {
    border-bottom: 1px solid #ffaaaa;
  }

  img {
    border-radius: 8px;
    width: 50px;
    height: 50px;
    object-fit: cover;
  }

  .main {
    padding: 20px 30px;
  }

  /* Custom scrollbar for table */
  .table-responsive::-webkit-scrollbar {
    height: 8px;
  }

  .table-responsive::-webkit-scrollbar-track {
    background: var(--medium-gray);
    border-radius: 10px;
  }

  .table-responsive::-webkit-scrollbar-thumb {
    background: var(--primary-green);
    border-radius: 10px;
  }

  /* DataTables customization */
  .dataTables_wrapper .dataTables_filter,
  .dataTables_wrapper .dataTables_length,
  .dataTables_wrapper .dataTables_info,
  .dataTables_wrapper .dataTables_paginate {
    color: var(--dark-gray);
    padding: 10px 15px;
  }

  .dataTables_wrapper .dataTables_filter input,
  .dataTables_wrapper .dataTables_length select {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 4px 6px;
    color: #212529;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button {
    color: var(--primary-green) !important;
    background-color: var(--light-green);
    border-radius: 5px;
    margin: 0 2px;
    padding: 4px 8px;
    border: none;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background-color: var(--primary-green) !important;
    color: #fff !important;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: var(--accent-green) !important;
    color: white !important;
  }

  /* Status badges */
  .badge-green {
    background-color: var(--primary-green);
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.75rem;
  }

  .badge-red {
    background-color: #dc3545;
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.75rem;
  }

  /* Stats highlight */
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

  /* Product summary cards */
  .summary-card {
    background-color: var(--white);
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 20px;
  }

  .summary-card .number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--dark-green);
    margin-bottom: 5px;
  }

  .summary-card .label {
    font-size: 0.9rem;
    color: var(--dark-gray);
  }

  .summary-card.low-stock {
    border-left: 4px solid #dc3545;
  }

  .summary-card.total-products {
    border-left: 4px solid var(--primary-green);
  }

  .summary-card.categories {
    border-left: 4px solid #0d6efd;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 15px;
    }
  }
</style>

<body>
  <?php echo include('chop/header.php'); ?>
  <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1>Products</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>Product Management</h3>
              <p>Manage your inventory, track stock levels, and update product information</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Summary Cards -->
    <div class="row">
      <div class="col-md-4">
        <div class="summary-card total-products">
          <div class="number"><?= count($prod) ?></div>
          <div class="label">Total Products</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="summary-card">
          <div class="number">
            <?php
              $categories = array_unique(array_column($prod, 'category'));
              echo count($categories);
            ?>
          </div>
          <div class="label">Categories</div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="summary-card low-stock">
          <div class="number">
            <?php
              $lowStockCount = 0;
              foreach ($prod as $pr) {
                if ($pr['quantity'] < 5) {
                  $lowStockCount++;
                }
              }
              echo $lowStockCount;
            ?>
          </div>
          <div class="label">Low Stock Items</div>
        </div>
      </div>
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="col-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Product List</h5>
              <div class="table-responsive">
                <table class="table table-borderless datatable align-middle">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Image</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Category</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($prod as $pr): ?>
                      <tr class="<?= $pr['quantity'] < 5 ? 'low-stock' : '' ?>">
                        <th scope="row"><?= $pr['id'] ?></th>
                        <td>
                          <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" alt="product image">
                        </td>
                        <td><?= $pr['name'] ?></td>
                        <td><?= $pr['description'] ?></td>
                        <td>
                          <span class="badge-green"><?= $pr['category'] ?></span>
                        </td>
                        <td>
                          <?= $pr['quantity'] ?>
                          <?php if($pr['quantity'] < 5): ?>
                            <span class="badge-red ms-1">Low Stock</span>
                          <?php endif; ?>
                        </td>
                        <td><strong>₱<?= number_format($pr['prize'], 2) ?></strong></td>
                        <td><?= $pr['date'] ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
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