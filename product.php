<?php

include 'all_products.array.php';

$product = [];
$link = $_GET['link'];
$category_link = '';
$category = '';

foreach($products as $p) {
  if($p['link'] == $link) $product = $p;
}

foreach ($categories as $c) {
  if($product['category'] == $c['link']) {
    $category = $c['title'];
    $category_link = '/catalog/'.explode('/', $_SERVER['REQUEST_URI'])[2];
  }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$product['title'];?> / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/product.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', $category_link=>$category, ''=>$product['title']];
    include 'components/breadcrumb/breadcrumb.php';
    ?>
    <h1><?=$product['title'];?></h1>
    <div class="up-pane">
      <div class="swiper-images">
        <div class="swiper-wrapper">
          <?php
            foreach ($product['images'] as $image) {
              echo '
              <div class="swiper-slide">
                <img src="'.$image.'" alt="">
              </div>
              ';
            }
          ?>
        </div>
        <div class="swiper-navigation">
          <div class="images-slider-prev">
            <img src="/images/slider-left-arrow.svg" alt="">
          </div>
          <div class="images-slider-next">
            <img src="/images/slider-arrow.svg" alt="">
          </div>
        </div>
      </div>
      <div class="description">
        <div class="short">
          <?php
          foreach ($product['description'] as $key => $value) {
            if(empty($key)) {
              echo "<p><span>$value</span></p>";
            } else {
              echo "<p>$key <span>$value</span></p>";
            }
          }
          ?>
        </div>
        <div class="normal">
        <?php
          if($product['ost_description']) {
            foreach ($product['ost_description'] as $desc) {
              echo "<p>$desc</p>";
            }
          }
        ?>
        </div>
      </div>
    </div>
    
    <?php
    
    if(count($product['params']) == 1) {
      echo "<div class='params_image'>".$product['params']['']."</div>";
    }
    
    ?>
    <?php if(count($product['params']) > 1): ?>
    <table class="params">
      <tr>
        <td>Параметры машины</td>
        <td><?=$product['title'];?></td>
      </tr>
      <?php
      foreach($product['params'] as $key => $value) {
        echo "
        <tr>
          <td>$key</td>
          <td>$value</td>
        </tr>
        ";
      }
      ?>
    </table>
    <?php endif; ?>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/product.js"></script>
  <script src="/js/app.js"></script>

</body>
</html>