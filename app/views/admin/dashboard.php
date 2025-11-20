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
    border-left: 4px solid var(--primary-green);
  }

  .card.info-card .card-title {
    color: var(--dark-gray);
    font-weight: 500;
    font-size: 0.9rem;
    margin-bottom: 0.5rem;
  }

  .card.info-card .card-title span {
    color: var(--dark-green);
    font-weight: 600;
  }

  .card.info-card h6 {
    font-size: 1.6rem;
    color: var(--dark-green);
    font-weight: 700;
    margin: 0;
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
    font-size: 1.6rem;
  }

  .chart-card {
    background-color: var(--white);
    border-top: 4px solid var(--primary-green);
  }

  .chart-card .card-title {
    color: var(--dark-green);
    font-weight: 600;
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
  }

  .section h5 {
    color: var(--dark-green);
    font-weight: 600;
    font-size: 1.2rem;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 10px;
  }

  .section h5::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 2px;
    background-color: var(--accent-green);
  }

  .card.top-selling, .card.recent-sales {
    background-color: var(--white);
    border-top: 4px solid var(--primary-green);
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

  tbody tr:last-child td {
    border-bottom: none;
  }

  img {
    border-radius: 8px;
    width: 50px;
    height: 50px;
    object-fit: cover;
  }

  .badge-green {
    background-color: var(--primary-green);
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 0.75rem;
  }

  .main {
    padding: 20px 30px;
  }

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
</style>

<body>
  <!-- ======= Header ======= -->
  <?php echo include('chop/header.php'); ?>
  <!-- ======= Sidebar ======= -->
  <?php echo include('chop/aside.php'); ?>

  <main id="main" class="main">
    <div class="pagetitle mb-4">
      <h1>Admin Dashboard</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>Welcome back, Administrator!</h3>
              <p>Here's an overview of your store performance</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <section class="section dashboard">
      <div class="row g-4">
        <!-- Daily Sales -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Sales <span>| Today</span></h5>
              <div class="d-flex align-items-center mt-3">
                <div class="card-icon me-3">
                  <i class="bi bi-cart"></i>
                </div>
                <div>
                  <h6>₱<?= number_format($today, 2) ?></h6>
                  <span class="text-muted small">+12% from yesterday</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Monthly Sales -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Sales <span>| Monthly</span></h5>
              <div class="d-flex align-items-center mt-3">
                <div class="card-icon me-3">
                  <i class="bi bi-calendar"></i>
                </div>
                <div>
                  <h6>₱<?= number_format($monthly, 2) ?></h6>
                  <span class="text-muted small">+8% from last month</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Overall Sales -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Sales <span>| Overall</span></h5>
              <div class="d-flex align-items-center mt-3">
                <div class="card-icon me-3">
                  <i class="bi bi-bar-chart"></i>
                </div>
                <div>
                  <h6>₱<?= number_format($overall_sales, 2) ?></h6>
                  <span class="text-muted small">All-time performance</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Sales Chart -->
        <div class="col-12">
          <div class="card chart-card">
            <div class="card-body">
              <h5 class="card-title">Sales Overview</h5>
              <canvas id="salesChart"></canvas>
            </div>
          </div>
        </div>

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales">
            <div class="card-body">
              <h5 class="card-title">
                Recent Sales <span id="recentFilterLabel" class="light-green">Today</span>
              </h5>

              <!-- Filter Dropdown -->
              <div class="d-flex align-items-center gap-3 mb-3">
                <label style="font-weight:600; color:#145214;">Filter by:</label>
                
                <select id="recentFilter" class="form-select" 
                  style="width:200px; border-color:#145214; background-color:#e8f5e8; color:#145214; font-weight:500;">
                  <option value="today">Today</option>
                  <option value="week">This Week</option>
                  <option value="month">This Month</option>
                  <option value="year">This Year</option>
                  <option value="all">Overall</option>
                </select>
              </div>

              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Customer</th>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Total</th>
                      <th>Date and Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($purchase_items as $g): ?>
                      <tr data-date="<?= date('Y-m-d', strtotime($g['order_at'])) ?>">
                          <td><strong>#<?= $g['purchase_id'] ?></strong></td>
                          <td><?= $g['Customer'] ?></td>
                          <td><?= $g['Item_name'] ?></td>
                          <td><?= $g['quantity'] ?></td>
                          <td><strong>₱<?= $g['total_price'] ?></strong></td>
                          <td><?= date('M d, Y h:i A', strtotime($g['order_at'])) ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling">
            <div class="card-body">
              <h5 class="card-title">Top 10 Selling Products</h5>
              <div class="table-responsive">
                <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th>Preview</th>
                      <th>Product</th>
                      <th>Price</th>
                      <th>Sold</th>
                      <th>Revenue</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($Topitems as $g): ?>
                      <tr>
                        <td><img src="<?= BASE_URL . 'uploads/' . $g['max_image'] ?>" alt=""></td>
                        <td><strong><?= $g['Item_name'] ?></strong></td>
                        <td>₱<?= $g['max_prize'] ?></td>
                        <td><span class="badge bg-success"><?= $g['total_quantity'] ?></span></td>
                        <td><strong>₱<?= $g['total_sales'] ?></strong></td>
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

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Daily', 'Monthly', 'Overall'],
        datasets: [{
          label: 'Sales (₱)',
          data: [<?= $today ?>, <?= $monthly ?>, <?= $overall_sales ?>],
          backgroundColor: ['#28a745', '#198754', '#145214'],
          borderWidth: 0,
          borderRadius: 6,
          borderSkipped: false,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false },
          tooltip: {
            backgroundColor: 'rgba(20, 82, 20, 0.9)',
            titleColor: '#fff',
            bodyColor: '#fff',
            borderColor: '#145214',
            borderWidth: 1,
            cornerRadius: 6,
            displayColors: false
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: { color: 'rgba(0, 0, 0, 0.05)' },
            ticks: {
              callback: function(value) {
                return '₱' + value.toLocaleString();
              }
            }
          },
          x: { grid: { display: false } }
        }
      }
    });
  </script>


  <script>
    const filter = document.getElementById('recentFilter');
    const rows = document.querySelectorAll('.recent-sales tbody tr');

    filter.addEventListener('change', () => {
      const period = filter.value;
      const today = new Date();

      rows.forEach(row => {
        const rowDate = new Date(row.getAttribute('data-date'));
        let show = false;

        if (period === "today") {
          show = rowDate.toDateString() === today.toDateString();
        } 
        else if (period === "week") {
          const weekStart = new Date(today);
          weekStart.setDate(today.getDate() - today.getDay()); // Sunday
          const weekEnd = new Date(weekStart);
          weekEnd.setDate(weekStart.getDate() + 6); // Saturday
          show = rowDate >= weekStart && rowDate <= weekEnd;
        } 
        else if (period === "month") {
          show = rowDate.getMonth() === today.getMonth() &&
                rowDate.getFullYear() === today.getFullYear();
        } 
        else if (period === "year") {
          show = rowDate.getFullYear() === today.getFullYear();
        } 
        else {
          show = true; // overall
        }

        row.style.display = show ? "" : "none";
      });
    });

    // Default filter: Today
    filter.dispatchEvent(new Event('change'));
  </script>
</body>
</html>
