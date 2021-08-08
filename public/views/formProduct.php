<!doctype html>
<html ⚡>

<head>
  <title>E-commerce | Backend Test | Add Product</title>
  <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" media="all" href="<?php echo asset('css/index.min.css') ?>" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
  <meta name="viewport" content="width=device-width,minimum-scale=1">
  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }
  </style><noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
</head>

<body>
  <!-- Header -->
  <?php include 'layouts/header.php'; ?>
  <!-- Header -->
  <!-- Main Content -->
  <main class="content">
    <h1 class="title new-item">New Product</h1>

    <form action="/<?php echo isset($product['id']) ? 'updateproduct' : 'addproduct' ?>" method="POST">
      <?php if (isset($product['id'])) { ?>
        <input hidden type="id" name="id" value="<?php echo $product['id'] ?? '' ?>">
      <?php } ?>
      <div class="input-field">
        <label for="sku" class="label">Product SKU</label>
        <input type="text" id="sku" name="sku" class="input-text" value="<?php echo $product['sku'] ?? '' ?>" required />
      </div>
      <div class="input-field">
        <label for="name" class="label">Product Name</label>
        <input type="text" id="name" name="name" class="input-text" value="<?php echo $product['name'] ?? '' ?>" required />
      </div>
      <div class="input-field">
        <label for="price" class="label">Price</label>
        <input type="number" id="price" min="0" step="0.01" name="price" class="input-text" value="<?php echo $product['price'] ?? '' ?>" required />
      </div>
      <div class="input-field">
        <label for="quantity" class="label">Quantity</label>
        <input type="number" min="0" id="quantity" step="1"  name="quantity" class="input-text" value="<?php echo $product['quantity'] ?? '' ?>" required />
      </div>
      <div class="input-field">
        <label for="categories" class="label">Categories</label>
        <select name="categories[]" multiple id="category" class="input-text" required>
          <?php foreach ($categories as $category) { ?>
            <option <?php echo isset($category['isProd']) ? 'selected' : '' ?> value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
          <?php  } ?>
        </select>
      </div>
      <div class="input-field">
        <label for="description" class="label" required>Description</label>
        <textarea id="description" name="description" class="input-text"><?php echo $product['description'] ?? '' ?></textarea>
      </div>
      <div class="actions-form">
        <a href="/products" class="action back">Back</a>
        <input class="btn-submit btn-action" type="submit" value="Save Product" />
      </div>

    </form>
  </main>
  <!-- Main Content -->

  <!-- Footer -->
  <?php include 'layouts/footer.php'; ?>
  <!-- Footer -->
</body>

</html>