<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/index.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  
  <div class="first-block">
    <div class="main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background: url(/images/slider/1.png)">
          <h1>ООО "ГПМ-Центр" - официальный дилер Zoomlion Havy Industry Science & Technology Co., Ltd.</h1>
          <button>О компании</button>
        </div>
        <div class="swiper-slide">Slide2</div>
        <div class="swiper-slide">Slide3</div>
        <div class="swiper-slide">Slide4</div>
        <div class="swiper-slide">Slide5</div>
      </div>
      <div class="swiper-navigation">
        <div class="main-slider-prev">
          <img src="/images/left-arrow.png" alt="">
        </div>
        <div class="main-slider-next">
          <img src="/images/right-arrow.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/index.js"></script>
</body>
</html>