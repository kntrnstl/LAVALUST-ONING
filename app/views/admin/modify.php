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

  .btn-edit {
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

  .btn-edit:hover {
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

  /* Image Preview */
  #imagePreviewContainer {
    margin-top: 15px;
    text-align: center;
  }

  #imagePreview {
    border: 2px solid var(--light-green);
    border-radius: 8px;
    padding: 5px;
    background-color: var(--light-gray);
    max-width: 250px;
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

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 15px;
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
      <h1>Modify Items</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>Item Management</h3>
              <p>Edit and update product information in your inventory</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ITEM LIST TABLE -->
    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title">Item List</h5>

              <div class="table-responsive">
                <table class="table table-borderless datatable align-middle">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Product Name</th>
                      <th scope="col">Description</th>
                      <th scope="col">Category</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Image</th>
                      <th scope="col">Price</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($prod as $pr): ?>
                      <tr class="<?= $pr['quantity'] < 5 ? 'low-stock' : '' ?>">
                        <th scope="row"><?= $pr['id'] ?></th>
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
                        <td>
                          <img src="<?= BASE_URL . 'uploads/' . $pr['image'] ?>" 
                               alt="product image">
                        </td>
                        <td><strong>₱<?= number_format($pr['prize'], 2) ?></strong></td>
                        <td><?= $pr['date'] ?></td>
                        <td>
                          <a href="/edit/<?= $pr['id'] ?>" class="btn-edit">
                            <i class="bi bi-pencil"></i> Edit
                          </a>
                        </td>
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

    <!-- MODIFY FORM -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card info-card">
            <div class="card-body">
              <h5 class="card-title"><?= (isset($edit['id'])) ? "Edit Item" : "Add New Item" ?></h5>

              <form class="row g-3" 
                    action="/<?= (isset($edit['id'])) ? "submitedit/" . $edit['id'] : " " ?>" 
                    method="post" enctype="multipart/form-data" id="imageForm">

                <div class="col-md-6">
                  <label for="floatingName" class="form-label">Item Name</label>
                  <input type="text" class="form-control" id="floatingName" 
                         name="name" placeholder="Item Name" 
                         value="<?= (isset($edit['name'])) ? $edit['name'] : "" ?>" required>
                </div>

                <div class="col-md-6">
                  <label for="floatingPrize" class="form-label">Price</label>
                  <input type="text" class="form-control" id="floatingPrize" 
                         name="prize" placeholder="Price"
                         value="<?= (isset($edit['prize'])) ? $edit['prize'] : "" ?>" required>
                </div>

                <div class="col-12">
                  <label for="floatingTextarea" class="form-label">Item Description</label>
                  <textarea required class="form-control" name="description" id="floatingTextarea"
                            placeholder="Description" rows="3"><?= (isset($edit['description'])) ? $edit['description'] : "" ?></textarea>
                </div>

                <div class="col-md-4">
                  <label for="floatingSelect" class="form-label">Category</label>
                  <select class="form-select" id="floatingSelect" name="category" required>
                    <option value="">Select Category</option>
                    <?php foreach ($cat as $c): ?>
                      <option value="<?= $c['categories'] ?>" 
                          <?= (isset($edit['category']) && $edit['category'] == $c['categories']) ? "selected" : "" ?>>
                          <?= $c['categories'] ?>
                      </option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="col-md-4">
                  <label for="floatingQuantity" class="form-label">Quantity</label>
                  <input min="1" type="number" class="form-control" id="floatingQuantity" 
                         name="quantity" placeholder="Quantity"
                         value="<?= (isset($edit['quantity'])) ? $edit['quantity'] : "" ?>" required>
                </div>

                <div class="col-md-4">
                  <label for="formFile" class="form-label">Upload Image</label>
                  <input class="form-control" type="file" id="formFile" name="image"
                         onchange="previewImage()" accept="image/*">
                </div>

                <!-- Image Preview -->
                <div class="col-12 mt-3" id="imagePreviewContainer" 
                     style="display: <?= isset($edit['image']) && !empty($edit['image']) ? 'block' : 'none' ?>;">
                  <label class="form-label">Image Preview</label>
                  <div>
                    <img id="imagePreview" 
                         src="<?= isset($edit['image']) ? BASE_URL . 'uploads/' . $edit['image'] : '' ?>" 
                         alt="Image Preview" 
                         class="img-fluid rounded">
                  </div>
                </div>

                <!-- Submit Buttons -->
                <div class="col-12 text-center mt-4">
                  <button class="btn-green px-4" type="submit">
                    <?= (isset($edit['id'])) ? "Update Item" : "Save Item" ?>
                  </button>
                  <a href="/modify" class="btn-outline-danger px-4 btn">Reset</a>
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
    function previewImage() {
      var input = document.getElementById('formFile');
      var imagePreview = document.getElementById('imagePreview');
      var imagePreviewContainer = document.getElementById('imagePreviewContainer');

      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          imagePreview.src = e.target.result;
          imagePreviewContainer.style.display = 'block';
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

    function resetForm() {
      document.getElementById('imageForm').reset();
      document.getElementById('imagePreviewContainer').style.display = 'none';
    }

    // Auto-scroll to form when editing
    document.addEventListener('DOMContentLoaded', function() {
      <?php if (isset($edit['id'])): ?>
        document.querySelector('.card.info-card:last-of-type').scrollIntoView({
          behavior: 'smooth'
        });
      <?php endif; ?>
    });
  </script>

</body>
</html>