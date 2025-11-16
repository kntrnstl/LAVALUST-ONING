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

  tbody tr.pending-order {
    background-color: #ffdddd !important;
  }

  tbody tr.pending-order td {
    border-bottom: 1px solid #ffaaaa;
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
  .status-badge {
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .status-pending {
    background-color: #dc3545;
    color: white;
  }

  .status-preparing {
    background-color: #ffc107;
    color: #212529;
  }

  .status-out-for-delivery {
    background-color: #0dcaf0;
    color: #212529;
  }

  .status-delivered {
    background-color: #198754;
    color: white;
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

  .btn-modify {
    background-color: var(--light-green);
    color: var(--dark-green);
    border: 1px solid var(--accent-green);
    padding: 6px 12px;
    border-radius: 6px;
    font-weight: 500;
    font-size: 0.875rem;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
  }

  .btn-modify:hover {
    background-color: var(--accent-green);
    color: white;
    transform: translateY(-1px);
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

  .form-label {
    color: var(--dark-gray);
    font-weight: 500;
    margin-bottom: 8px;
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

  /* Order Statistics */
  .order-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin-bottom: 25px;
  }

  .stat-card {
    background: white;
    border-radius: 12px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    border-left: 4px solid var(--primary-green);
  }

  .stat-card.pending {
    border-left-color: #dc3545;
  }

  .stat-card.preparing {
    border-left-color: #ffc107;
  }

  .stat-card.delivery {
    border-left-color: #0dcaf0;
  }

  .stat-card.delivered {
    border-left-color: #198754;
  }

  .stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: var(--dark-green);
    margin-bottom: 5px;
  }

  .stat-label {
    font-size: 0.9rem;
    color: var(--dark-gray);
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 15px;
    }
    
    .btn-green, .btn-outline-danger {
      width: 100%;
      margin-bottom: 10px;
    }
    
    .order-stats {
      grid-template-columns: 1fr;
    }
  }
</style>

<body>
  <?php echo include('chop/header.php'); ?>
  <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle mb-4">
      <h1>Purchase Items Tracking</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>Order Management</h3>
              <p>Track and manage customer orders with real-time status updates</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Order Statistics -->
    <div class="order-stats">
      <?php
        $statusCounts = [
          'Pending' => 0,
          'Preparing' => 0,
          'Out for Delivery' => 0,
          'Delivered' => 0
        ];
        
        foreach ($purchase_items as $item) {
          if (isset($statusCounts[$item['status']])) {
            $statusCounts[$item['status']]++;
          }
        }
      ?>
      
      <div class="stat-card pending">
        <div class="stat-number"><?= $statusCounts['Pending'] ?></div>
        <div class="stat-label">Pending Orders</div>
      </div>
      
      <div class="stat-card preparing">
        <div class="stat-number"><?= $statusCounts['Preparing'] ?></div>
        <div class="stat-label">Preparing</div>
      </div>
      
      <div class="stat-card delivery">
        <div class="stat-number"><?= $statusCounts['Out for Delivery'] ?></div>
        <div class="stat-label">Out for Delivery</div>
      </div>
      
      <div class="stat-card delivered">
        <div class="stat-number"><?= $statusCounts['Delivered'] ?></div>
        <div class="stat-label">Delivered</div>
      </div>
    </div>

    <!-- PURCHASE ITEMS TABLE -->
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Purchase Items List</h5>

              <div class="table-responsive">
                <table class="table table-borderless datatable align-middle">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Item Name</th>
                      <th>Customer</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Total Price</th>
                      <th>Status</th>
                      <th>Order Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($purchase_items as $item): ?>
                      <tr class="<?= $item['status'] == 'Pending' ? 'pending-order' : '' ?>">
                        <td><?= $item['id'] ?></td>
                        <td><strong><?= $item['Item_name'] ?></strong></td>
                        <td><?= $item['Customer'] ?></td>
                        <td><?= $item['quantity'] ?></td>
                        <td>₱<?= number_format($item['prize'], 2) ?></td>
                        <td><strong>₱<?= number_format($item['total_price'], 2) ?></strong></td>
                        <td>
                          <?php
                            $statusClass = match($item['status']) {
                              'Pending' => 'status-badge status-pending',
                              'Preparing' => 'status-badge status-preparing',
                              'Out for Delivery' => 'status-badge status-out-for-delivery',
                              'Delivered' => 'status-badge status-delivered',
                              default => 'status-badge status-pending'
                            };
                          ?>
                          <span class="<?= $statusClass; ?>">
                            <?= $item['status'] ?>
                          </span>
                        </td>
                        <td><?= $item['order_at'] ?></td>
                        <td>
                          <a href="/trackEdit/<?= $item['id'] ?>" 
                             class="btn-modify">
                             <i class="bi bi-pencil"></i> Modify
                          </a>
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

    <!-- EDIT FORM -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title"><?= isset($trackEdit['id']) ? 'Edit Order Details' : 'Add New Order' ?></h5>

              <form action="/trackSubmitEdit/<?= isset($trackEdit['id']) ? $trackEdit['id'] : '' ?>" 
                    method="post" enctype="multipart/form-data" class="row g-3">

                <div class="col-md-6">
                  <label class="form-label">Item Name</label>
                  <input type="text" name="item_name" class="form-control"
                         placeholder="Item Name"
                         value="<?= isset($trackEdit['Item_name']) ? $trackEdit['Item_name'] : '' ?>" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Customer</label>
                  <input type="text" name="customer" class="form-control"
                         placeholder="Customer"
                         value="<?= isset($trackEdit['Customer']) ? $trackEdit['Customer'] : '' ?>" required>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Quantity</label>
                  <input type="number" name="quantity" min="1" class="form-control"
                         placeholder="Quantity"
                         value="<?= isset($trackEdit['quantity']) ? $trackEdit['quantity'] : '' ?>" required>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Price</label>
                  <input type="number" step="0.01" name="prize" class="form-control"
                         placeholder="Price"
                         value="<?= isset($trackEdit['prize']) ? $trackEdit['prize'] : '' ?>" required>
                </div>

                <div class="col-md-4">
                  <label class="form-label">Customer ID</label>
                  <input type="text" name="customer_id" class="form-control"
                         placeholder="Customer ID"
                         value="<?= isset($trackEdit['CustomerId']) ? $trackEdit['CustomerId'] : '' ?>" required>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Status</label>
                  <select name="status" class="form-select" required>
                    <option value="Pending" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="Preparing" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Preparing' ? 'selected' : '' ?>>Preparing</option>
                    <option value="Out for Delivery" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Out for Delivery' ? 'selected' : '' ?>>Out for Delivery</option>
                    <option value="Delivered" <?= isset($trackEdit['status']) && $trackEdit['status'] == 'Delivered' ? 'selected' : '' ?>>Delivered</option>
                  </select>
                </div>

                <div class="col-12 text-center mt-4">
                  <button type="submit" class="btn-green px-4">
                    <?= isset($trackEdit['id']) ? 'Update Order' : 'Create Order' ?>
                  </button>
                  <a href="/tracking" class="btn-outline-danger px-4 btn">Reset</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php echo include('chop/script.php'); ?>

  <script>
    function resetForm() {
      document.querySelector('form').reset();
    }

    // Auto-scroll to form when editing
    document.addEventListener('DOMContentLoaded', function() {
      <?php if (isset($trackEdit['id'])): ?>
        document.querySelector('.card.info-card:last-of-type').scrollIntoView({
          behavior: 'smooth'
        });
      <?php endif; ?>
    });
  </script>

</body>
</html>