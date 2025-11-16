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

  /* Category Badges */
  .category-badge {
    background-color: var(--light-green);
    color: var(--dark-green);
    border: 1px solid var(--accent-green);
    padding: 8px 12px;
    border-radius: 6px;
    font-weight: 500;
    margin: 0 8px 8px 0;
    display: inline-block;
    transition: all 0.2s ease;
  }

  .category-badge a {
    color: inherit;
    text-decoration: none;
  }

  .category-badge:hover {
    background-color: #ffdddd;
    border-color: #dc3545;
    transform: scale(1.05);
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
      <h1>Add Products</h1>
    </div>

    <!-- Stats Highlight -->
    <div class="row">
      <div class="col-12">
        <div class="stats-highlight">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h3>Product Management</h3>
              <p>Add new products to your inventory and manage categories</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section">
      <div class="row">
        <!-- Left Side: Product Form -->
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Product Details</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" action="/save" method="post" enctype="multipart/form-data" id="imageForm">
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="name"
                           placeholder="Item Name" required>
                    <label for="floatingName">Item Name</label>
                  </div>
                </div>

                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" name="description" placeholder="Description"
                              id="floatingTextarea" style="height: 100px;" required></textarea>
                    <label for="floatingTextarea">Item Description</label>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="categorySelect" name="category" aria-label="Category">
                      <?php foreach ($cat as $c): ?>
                        <option value="<?= $c['categories'] ?>"><?= $c['categories'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    <label for="categorySelect">Category</label>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="number" class="form-control" id="floatingQuantity" name="quantity"
                           placeholder="Quantity" min="0" required>
                    <label for="floatingQuantity">Quantity</label>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPrize" name="prize"
                           placeholder="Price" required>
                    <label for="floatingPrize">Price</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="formFile" class="form-label">Upload Image</label>
                  <input class="form-control" type="file" id="formFile" name="image"
                         onchange="previewImage()" accept="image/*">
                </div>

                <!-- Image Preview -->
                <div class="col-md-6" id="imagePreviewContainer" style="display: none;">
                  <label class="form-label">Image Preview</label>
                  <div>
                    <img id="imagePreview" alt="Image Preview"
                         style="max-width: 100%; max-height: 150px; border-radius:8px;">
                  </div>
                </div>

                <div class="col-12 text-center mt-4">
                  <button class="btn-green px-4" type="submit">Save Product</button>
                  <a href="/items" class="btn-outline-danger px-4 btn">Reset</a>
                </div>
              </form>
              <!-- End Floating Labels Form -->
            </div>
          </div>
        </div>

        <!-- Right Side: Category Management -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Management</h5>
              <p class="note-text">Note: Click a category to delete</p>

              <div class="mb-4">
                <h6 class="fw-semibold mb-3" style="color: var(--dark-green);">Existing Categories:</h6>
                <div class="d-flex flex-wrap">
                  <?php foreach ($cat as $c): ?>
                    <span class="category-badge">
                      <a href="/delcat/<?= $c['id'] ?>" onclick="return confirm('Are you sure you want to delete this category?')">
                        <?= $c['categories'] ?>
                      </a>
                    </span>
                  <?php endforeach; ?>
                </div>
              </div>

              <form method="post" action="addcat" class="mt-4">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingNewCat" name="newcat"
                         placeholder="New Category" required>
                  <label for="floatingNewCat">Insert New Category</label>
                </div>
                <button class="btn-green w-100" type="submit">Add Category</button>
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
      } else {
        imagePreviewContainer.style.display = 'none';
      }
    }

    // Add confirmation for category deletion
    document.addEventListener('DOMContentLoaded', function() {
      const categoryLinks = document.querySelectorAll('.category-badge a');
      categoryLinks.forEach(link => {
        link.addEventListener('click', function(e) {
          if (!confirm('Are you sure you want to delete this category?')) {
            e.preventDefault();
          }
        });
      });
    });
  </script>

</body>
</html>