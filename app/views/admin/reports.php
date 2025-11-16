<!DOCTYPE html>
<html lang="en">

<?php include('chop/head.php'); ?>

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

  .breadcrumb {
    background-color: transparent;
    padding: 0;
  }

  .breadcrumb-item a {
    color: var(--dark-green);
    text-decoration: none;
  }

  .breadcrumb-item.active {
    color: var(--dark-gray);
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
    font-size: 1.1rem;
    margin-bottom: 1rem;
  }

  .card-title span {
    color: var(--dark-gray);
    font-weight: 400;
    font-size: 0.9rem;
  }

  .card-icon {
    width: 60px;
    height: 60px;
    border-radius: 12px;
    background-color: var(--light-green);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-green);
    font-size: 1.5rem;
    margin-right: 15px;
  }

  .revenue-amount {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark-green);
    margin: 0;
  }

  .table-responsive {
    overflow-x: auto;
  }

  table {
    color: #2d2d2d;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 8px;
    overflow: hidden;
  }

  thead th {
    color: var(--dark-green);
    font-weight: 600;
    border-bottom: 2px solid var(--light-green);
    background-color: var(--light-green);
    padding: 15px;
    text-align: center;
  }

  tbody td {
    padding: 15px;
    border-bottom: 1px solid var(--medium-gray);
    text-align: center;
    font-weight: 500;
  }

  tbody tr:hover {
    background-color: var(--light-green);
  }

  .main {
    padding: 20px 30px;
  }

  /* Button Styles */
  .btn-green {
    background-color: var(--primary-green);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
    font-size: 1rem;
  }
  
  .btn-green:hover {
    background-color: var(--dark-green);
    color: white;
    transform: translateY(-2px);
  }

  /* Stats Highlight */
  .stats-highlight {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--accent-green) 100%);
    color: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 25px;
  }
  
  .stats-highlight h3 {
    font-weight: 700;
    margin-bottom: 8px;
    font-size: 1.5rem;
  }
  
  .stats-highlight p {
    opacity: 0.9;
    margin-bottom: 0;
    font-size: 1rem;
  }

  /* Revenue Cards Layout */
  .revenue-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    margin-bottom: 25px;
  }

  .revenue-card {
    background: var(--white);
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    border-left: 4px solid var(--primary-green);
    transition: all 0.3s ease;
  }

  .revenue-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  }

  .revenue-card.today {
    border-left-color: #28a745;
  }

  .revenue-card.weekly {
    border-left-color: #17a2b8;
  }

  .revenue-card.monthly {
    border-left-color: #ffc107;
  }

  .revenue-card.yearly {
    border-left-color: #6f42c1;
  }

  .revenue-card.overall {
    border-left-color: var(--dark-green);
  }

  .revenue-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
  }

  .revenue-icon {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    background-color: var(--light-green);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-green);
    font-size: 1.3rem;
    margin-right: 15px;
  }

  .revenue-title {
    font-size: 1rem;
    color: var(--dark-gray);
    margin: 0;
    font-weight: 500;
  }

  .revenue-period {
    font-size: 0.85rem;
    color: var(--dark-gray);
    opacity: 0.8;
  }

  .revenue-value {
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--dark-green);
    margin: 0;
  }

  /* Summary Table */
  .summary-table {
    margin-top: 10px;
  }

  .summary-table thead th {
    background-color: var(--light-green);
    color: var(--dark-green);
    font-weight: 600;
    padding: 15px;
  }

  .summary-table tbody td {
    font-weight: 600;
    font-size: 1.1rem;
  }

  /* Print Styles */
  @media print {
    .btn-green, .breadcrumb, .stats-highlight {
      display: none !important;
    }
    
    .card {
      box-shadow: none !important;
      border: 1px solid #ddd !important;
    }
    
    .revenue-card {
      break-inside: avoid;
    }
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 15px;
    }
    
    .revenue-grid {
      grid-template-columns: 1fr;
    }
    
    .revenue-value {
      font-size: 1.5rem;
    }
    
    .btn-green {
      width: 100%;
    }
  }
</style>

<body>
  <!-- ======= Header ======= -->
  <?php include('chop/header.php'); ?>
  <!-- ======= Sidebar ======= -->
  <?php include('chop/aside.php'); ?>

  <main id="main" class="main">
    <div class="pagetitle mb-4">
      <h1>Reports</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
          <li class="breadcrumb-item active">Reports</li>
        </ol>
      </nav>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>Sales Reports & Analytics</h3>
              <p>Comprehensive overview of your store's financial performance across different time periods</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
          <!-- Revenue Cards Grid -->
          <div class="revenue-grid">
            <!-- Today Revenue Card -->
            <div class="revenue-card today">
              <div class="revenue-header">
                <div class="revenue-icon">
                  <i class="bi bi-cart"></i>
                </div>
                <div>
                  <h5 class="revenue-title">Revenue</h5>
                  <div class="revenue-period">Today</div>
                </div>
              </div>
              <div class="revenue-value">₱<?= number_format($today, 2) ?></div>
            </div>

            <!-- Weekly Revenue Card -->
            <div class="revenue-card weekly">
              <div class="revenue-header">
                <div class="revenue-icon">
                  <i class="bi bi-wallet2"></i>
                </div>
                <div>
                  <h5 class="revenue-title">Revenue</h5>
                  <div class="revenue-period">This Week</div>
                </div>
              </div>
              <div class="revenue-value">₱<?= number_format($weekly, 2) ?></div>
            </div>

            <!-- Monthly Revenue Card -->
            <div class="revenue-card monthly">
              <div class="revenue-header">
                <div class="revenue-icon">
                  <i class="bi bi-cash-stack"></i>
                </div>
                <div>
                  <h5 class="revenue-title">Revenue</h5>
                  <div class="revenue-period">This Month</div>
                </div>
              </div>
              <div class="revenue-value">₱<?= number_format($monthly, 2) ?></div>
            </div>

            <!-- Yearly Revenue Card -->
            <div class="revenue-card yearly">
              <div class="revenue-header">
                <div class="revenue-icon">
                  <i class="bi bi-bar-chart"></i>
                </div>
                <div>
                  <h5 class="revenue-title">Revenue</h5>
                  <div class="revenue-period">This Year</div>
                </div>
              </div>
              <div class="revenue-value">₱<?= number_format($yearly, 2) ?></div>
            </div>

            <!-- Overall Revenue Card -->
            <div class="revenue-card overall">
              <div class="revenue-header">
                <div class="revenue-icon">
                  <i class="bi bi-graph-up"></i>
                </div>
                <div>
                  <h5 class="revenue-title">Revenue</h5>
                  <div class="revenue-period">Overall</div>
                </div>
              </div>
              <div class="revenue-value">₱<?= number_format($overall_sales, 2) ?></div>
            </div>
          </div>

          <!-- Sales Summary Table -->
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Sales Summary</h5>

              <div class="table-responsive">
                <table class="table table-borderless summary-table">
                  <thead>
                    <tr>
                      <th>Today</th>
                      <th>Weekly</th>
                      <th>Monthly</th>
                      <th>Yearly</th>
                      <th>Overall Sales</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>₱<?= number_format($today, 2) ?></td>
                      <td>₱<?= number_format($weekly, 2) ?></td>
                      <td>₱<?= number_format($monthly, 2) ?></td>
                      <td>₱<?= number_format($yearly, 2) ?></td>
                      <td>₱<?= number_format($overall_sales, 2) ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <!-- Download Form (Hidden) -->
              <form id="downloadForm" method="post" action="/downloadReportsPdf">
                <input type="hidden" name="today" value="<?= $today ?>">
                <input type="hidden" name="weekly" value="<?= $weekly ?>">
                <input type="hidden" name="monthly" value="<?= $monthly ?>">
                <input type="hidden" name="yearly" value="<?= $yearly ?>">
                <input type="hidden" name="overall_sales" value="<?= $overall_sales ?>">
              </form>

              <!-- Action Buttons -->
              <div class="d-flex gap-3 mt-4 flex-wrap">
                <button class="btn-green" type="button" onclick="printPage()">
                  <i class="bi bi-printer me-2"></i>Print Report
                </button>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <script>
    function printPage() {
      window.print();
    }
  </script>

  <?php include('chop/script.php'); ?>
</body>
</html>