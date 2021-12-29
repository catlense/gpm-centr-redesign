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

  <div class="second-block" id="about">
    <div class="text">
      <h1>О компании</h1>
      <p>Компания ГПМ-Центр является официальным дилером компании Zoomlion.</p>
      <p>Компания Zoomlion Heavy Industry Science & Technology Co., Ltd. была основана в 1992 году. Главные направления деятельности – это разработка и производство тяжелых высокотехнологичных машин в сфере строительной и сельскохозяйственной техники. Имея более чем 20-летний опыт внедрения инноваций и совершенствования производства, компания в настоящее время является международным холдингом, выпускающим 10 категорий по 56 видов продукции, что составляет примерно 600 выдающихся видов техники.</p>
      <p>Нашей главной целью является качественная поддержка клиента на всех этапах сотрудничества при подборе техники, ее поставке и обслуживании.</p>
      <p>Вся поставляемая техника сертифицируется по российским стандартам и имеет необходимую разрешительную документацию ЕАС.</p>
    </div>
    <div class="image">
      <img src="/images/static/right-image-second.png" alt="Car">
    </div>
  </div>

  <div class="third-block" id="catalog">
    <h1>Каталог продукции</h1>
    <!-- catalog -->
  </div>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/index.js"></script>
</body>
</html>