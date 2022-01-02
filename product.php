<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Продукт / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/product.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', '/es'=>'Экскаваторы', '/product'=>'Экскаватор...'];
    include 'components/breadcrumb/breadcrumb.php';
    ?>
    <h1>Экскаватор...</h1>
    <div class="up-pane">
      <div class="swiper-images">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="/images/static/ekskavatory.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/images/static/ekskavatory.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/images/static/ekskavatory.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="/images/static/ekskavatory.png" alt="">
          </div>
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
          <p>property - <span>value</span></p>
          <p>property - <span>value</span></p>
          <p>property - <span>value</span></p>
          <p>property - <span>value</span></p>
        </div>
        <div class="normal">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum tempora voluptate sunt beatae commodi ab consectetur earum nemo? Iure alias beatae architecto porro ipsam a asperiores repellat ex magnam!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque illum tempora voluptate sunt beatae commodi ab consectetur earum nemo? Iure alias beatae architecto porro ipsam a asperiores repellat ex magnam!</p>
        </div>
      </div>
    </div>

    <table class="params">
      <tr>
        <td>Параметры машины</td>
        <td>Экскаватор</td>
      </tr>
      <tr>
        <td>property</td>
        <td>value</td>
      </tr>
      <tr>
        <td>property</td>
        <td>value</td>
      </tr>
      <tr>
        <td>property</td>
        <td>value</td>
      </tr>
      <tr>
        <td>property</td>
        <td>value</td>
      </tr>
    </table>

  </div>

  <?php include 'components/footer/footer.php' ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/product.js"></script>
  <script src="/js/app.js"></script>

</body>
</html>