<!doctype html>
<html ⚡>

<head>
  <title>E-commerce | Backend Test | Categories</title>
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

<!-- Header -->
<?php include 'layouts/header.php'; ?>
<!-- Header -->

<body>
  <!-- Main Content -->
  <main class="content">
    <div class="header-list-page">
      <h1 class="title">Categories</h1>
      <a href="addcategory" class="btn-action">Add new Category</a>
    </div>
    <table class="data-grid">
      <tr class="data-row">
        <th class="data-grid-th">
          <span class="data-grid-cell-content">Name</span>
        </th>
        <th class="data-grid-th">
          <span class="data-grid-cell-content">Code</span>
        </th>
        <th class="data-grid-th">
          <span class="data-grid-cell-content">Actions</span>
        </th>
      </tr>
      <?php foreach ($categories as $category) {  ?>
        <tr class="data-row">
          <td class="data-grid-td">
            <span class="data-grid-cell-content"><?php echo $category['name']; ?></span>
          </td>

          <td class="data-grid-td">
            <span class="data-grid-cell-content"><?php echo $category['code']; ?></span>
          </td>

          <td class="data-grid-td">
            <div class="actions">
              <a href="category/<?php echo $category['id']; ?>">
                <div class="action edit"><span>Edit</span></div>
              </a>
              <a onclick="return confirm('Deseja deletar <?php echo $category['name'] ?> ?')" href="deletecategory/<?php echo $category['id']; ?>">
                <div class="action delete"><span>Delete</span></div>
              </a>
            </div>
          </td>
        </tr>
      <?php }  ?>
    </table>
  </main>
  <!-- Main Content -->

  <!-- Footer -->
  <?php include 'layouts/footer.php'; ?>
  <!-- Footer -->
</body>

</html>