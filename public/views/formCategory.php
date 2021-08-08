<!doctype html>
<html ⚡>

<head>
  <title>E-commerce | Backend Test | Add Category</title>
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
    <h1 class="title new-item">New Category</h1>

    <form action="/<?php echo isset($category['id']) ? 'updatecategory' : 'addcategory' ?>" method="POST">
      <?php if (isset($category['id'])) { ?>
        <input hidden type="id" name="id" value="<?php echo $category['id'] ?? '' ?>">
      <?php } ?>
      <div class="input-field">
        <label for="category-name" class="label">Category Name</label>
        <input type="text" name="name" id="category-name" class="input-text" value="<?php echo $category['name'] ?? '' ?>" required />
      </div>
      <div class="input-field">
        <label for="category-code" class="label">Category Code</label>
        <input type="text" name="code" maxlength="10" id="category-code" class="input-text" value="<?php echo $category['code'] ?? '' ?>" required />

      </div>
      <div class="actions-form">
        <a href="/categories" class="action back">Back</a>
        <input class="btn-submit btn-action" type="submit" value="Save" />
      </div>
    </form>
  </main>
  <!-- Main Content -->

  <!-- Footer -->
  <?php include 'layouts/footer.php'; ?>
  <!-- Footer -->
</body>

</html>