<!doctype html>
<html ⚡>

<head>
  <title>E-commerce | Backend Test | Dashboard</title>

  <?php include 'layouts/head.php'; ?>

  <link rel="stylesheet" type="text/css" media="all" href="<?php echo asset('css/index.min.css') ?>" />
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
  </style>
  <noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>

</head>

<!-- Header -->
<?php include 'layouts/header.php'; ?>
<!-- Header -->

<!-- Main Content -->
<main class="content">
  <div class="header-list-page">
    <h1 class="title">Dashboard</h1>
  </div>
  <div class="infor">
    You have <?php echo count($products) ?> products added on this store: <a href="addproduct" class="btn-action">Add new Product</a>
  </div>
  <ul class="product-list">

    <?php foreach ($products as $product) { ?>
      <li>
        <div class="product-image">
          <img src="https://placeimg.com/200/200/tech" layout="responsive" width="164" height="145" alt="Tênis Runner Bolt" />
        </div>
        <div class="product-info">
          <div class="product-name"><span><?php echo $product['name'] ?></span></div>
          <div class="product-price"><span class="special-price"><?php echo number_format($product['quantity'], 2, ',') ?> available</span> <span>R$<?php echo number_format($product['price'], 2, ',') ?></span></div>
        </div>
      </li>
    <?php } ?>
<!--
    <li>
      <div class="product-image">
        <img src="<?php echo asset('images/product/tenis-runner-bolt.png') ?>" layout="responsive" width="164" height="145" alt="Tênis Runner Bolt" />
      </div>
      <div class="product-info">
        <div class="product-name"><span>Tênis Runner Bolt</span></div>
        <div class="product-price"><span class="special-price">9 available</span> <span>R$459,99</span></div>
      </div>
    </li>
    <li>
      <div class="product-image">
        <a href="tenis-basket-light" title="Tênis Basket Light">
          <img src="<?php echo asset('images/product/tenis-basket-light.png') ?>" layout="responsive" width="164" height="145" alt="Tênis Basket Light" />
        </a>
      </div>
      <div class="product-info">
        <div class="product-name"><span>Tênis Basket Light</span></div>
        <div class="product-price"><span class="special-price">1 available</span> <span>R$459,99</span></div>
      </div>
    </li>
    <li>
      <div class="product-image">
        <a href="tenis-basket-light" title="Tênis Basket Light">
          <img src="<?php echo asset('images/product/tenis-2d-shoes.png') ?>" layout="responsive" width="164" height="145" alt="Tênis 2D Shoes" />
        </a>
      </div>
      <div class="product-info">
        <div class="product-name"><span>Tênis 2D Shoes</span></div>
        <div class="product-price"><span class="special-price">2 Available</span> <span>R$459,99</span></div>
      </div>
    </li>
    <li>
      <div class="product-image">
        <img src="<?php echo asset('images/product/tenis-sneakers-43n.png') ?>" layout="responsive" width="164" height="145" alt="Tênis Sneakers 43N" />
      </div>
      <div class="product-info">
        <div class="product-name"><span>Tênis Sneakers 43N</span></div>
        <div class="product-price"><span class="special-price">Out of stock</span> <span>R$459,99</span></div>
      </div>
    </li> -->
  </ul>
</main>
<!-- Main Content -->

<!-- Footer -->
<?php include 'layouts/footer.php'; ?>
<!-- Footer -->
</body>

</html>