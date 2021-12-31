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
    <a href="#hot">Горячие предложения</a>
    <div class="main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background: url(/images/slider/1.png)">
          <h1>ООО "ГПМ-Центр" - официальный дилер Zoomlion Havy Industry Science & Technology Co., Ltd.</h1>
          <a href="#about"><button>О компании</button></a>
        </div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
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
    <div class="catalog">
      <div class="cart" href="vp" style="background: url(/images/static/vp.png) #fff">
        Вилочные погрузчики
      </div>
      <div class="cart" href="ekskavatory" style="background: url(/images/static/ekskavatory.png) #fff">
        Экскаваторы
      </div>
      <div class="cart" href="teleskopicheskie-pod-jomniki" style="background: url(/images/static/podjomniki.png) #fff">
        Телескопические подъёмники
      </div>
      <div class="cart" href="kolenchatye-pod-jomniki" style="background: url(/images/static/kolenchetie-podjomniki.png) #fff">
        Коленчатые подъёмники
      </div>
      <div class="cart" href="nozhnichnye-pod-jomnik" style="background: url(/images/static/nozhnichnie-podjomniki.png) #fff">
        Вилочные погрузчики
      </div>
    </div>
  </div>

  <div class="fourth-block" id="hot">
    <div class="hot-slider">
      <div class="slider-navigation">
        <h1>Горячие предложения</h1>
        <div class="buttons">
          <div class="hot-slider-prev">
            <img src="/images/go-button.svg" alt="">
          </div>
          <div class="hot-slider-next">
            <img src="/images/go-button.svg" alt="">
          </div>
        </div>
      </div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <?php include 'components/productCart/productCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/productCart/productCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/productCart/productCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/productCart/productCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/productCart/productCart.php'; ?>
        </div>        
      </div>
    </div>
  </div>

  <div class="fourth-block" id="news">
    <div class="hot-slider">
      <div class="slider-navigation">
        <h1>Новости</h1>
        <div class="buttons">
          <div class="hot-slider-prev">
            <img src="/images/go-button.svg" alt="">
          </div>
          <div class="hot-slider-next">
            <img src="/images/go-button.svg" alt="">
          </div>
        </div>
      </div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <?php include 'components/newsCart/newsCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/newsCart/newsCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/newsCart/newsCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/newsCart/newsCart.php'; ?>
        </div>
        <div class="swiper-slide">
          <?php include 'components/newsCart/newsCart.php'; ?>
        </div>        
      </div>
    </div>
  </div>

  <div class="fifth-block" id="lizing">
    <h1>Лизинговые программы</h1>
    <div class="carts">

      <div class="l-col">
        <div class="cart">
          <div class="image">
            <img src="/images/lizing/sber.png" alt="Sber">
          </div>
          <div class="text">
            <h1>Сбер-лизинг</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorum quo consectetur.</p>
          </div>
        </div>
        <div class="cart">
          <div class="image">
            <img src="/images/lizing/sber.png" alt="Sber">
          </div>
          <div class="text">
            <h1>Сбер-лизинг</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorum quo consectetur.</p>
          </div>
        </div>
      </div>
      <div class="r-col">
        <div class="cart">
          <div class="image">
            <img src="/images/lizing/sber.png" alt="Sber">
          </div>
          <div class="text">
            <h1>Сбер-лизинг</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus dolorum quo consectetur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fourth-block" id="cert">
    <div class="hot-slider cert-slider">
      <div class="slider-navigation">
        <h1>Сертификаты</h1>
        <div class="buttons">
          <div class="hot-slider-prev">
            <img src="/images/go-button.svg" alt="">
          </div>
          <div class="hot-slider-next">
            <img src="/images/go-button.svg" alt="">
          </div>
        </div>
      </div>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="/images/certificates/1.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/2.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/3.png" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/4.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <?php include 'components/footer/footer.php' ?>

  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/index.js"></script>
  <script src="/js/app.js"></script>

</body>
</html>