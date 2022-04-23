<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
?>
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
    <!-- <a href="#hot">Горячие предложения</a> -->
    <div class="main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background: url(/images/slider/1.jpg)">
          <h1>ООО "ГПМ-Центр" - официальный дилер Zoomlion Heavy Industry Science & Technology Co., Ltd.</h1>
          <a href="#about"><button>О компании</button></a>
        </div>
        <div class="swiper-slide" style="background: url(/images/slider/2.webp)">
          <h1>Zoomlion heavy industry производит впечатление производимым ассортиментом спецтехники, это краны всех типов, землеройная техника - Экскаваторы и бульдозеры, буровая техника, дорожностроительная техника, бетонное оборудование всех типов, а так же все типы вилочных погрузчиков, штабелёров, ричтраков, погрузчиков для поддонов, буксировочных тягачей.</h1>
          <a href="#about"><button>О компании</button></a>
        </div>
        <div class="swiper-slide" style="background: url(/images/slider/5.png)">
          <h1>Zoomlion занесен в книгу рекордов Гиннесса как производитель:</h1>
          <ul>
            <li>
              самого большого в мире гусеничного крана грузоподъёмностью 3200 тонн.
            </li>
            <li>
              самого большого автомобильного крана грузоподъемностью 2500 тонн.
            </li>
            <li>
              самого большого башенного крана грузоподъемностью 240 тонн.
            </li>
            <li>
              самого большого башенного крана по длине стрелы 100 метров.
            </li>
            <li>
              самого большого автомобильного бетононасоса с высотой подачи стрелы 101 метр.
            </li>
            <li>
              самого большого в мире стационарного бетононасоса с максимальным давлением 400 бар.
            </li>
          </ul>
        </div>
        <div class="swiper-slide" style="background: url(https://www.gama.com.tr/wp-content/themes/welcome/assets/img/bg/trading.jpg) no-repeat;">
          <h1> Благодаря высокому опыту сотрудников ГПМ-Центр, Вы получите грамотную техническую поддержку 7 дней в неделю.
                        Вы можете быть уверены в надежности компании и выполнении всех гарантийных обязательств.</h1>
        </div>
        <div class="swiper-slide" style="background: url(https://sc02.alicdn.com/kf/H3fa6b2509578415ca78a4d3e1ac8df3aO/237371530/H3fa6b2509578415ca78a4d3e1ac8df3aO.jpg) no-repeat;">
          <h1>Zoomlion производит технику по технологии немецкой компании JOST и LIEBHERR (Germany), а это значит, что Вы приобретаете краны европейского качества по доступным ценам и сможете эксплуатировать технику долгий срок, сэкономив на сервисе и комплектующих.</h1>
        </div>
        <div class="swiper-slide" style="background: url(https://1.bp.blogspot.com/-wwYnVxqJEIQ/VvJACi7tz7I/AAAAAAAAFL4/ljyVbwnLKFYdVE9WoI80s2k1lmjdzp8zw/s1600/Miya%2BForklift%2Bstock.JPG) no-repeat;">
          <h1>
            На вилочные погрузчики Zoomlion предоставляется расширенная гарантия:<br/>
            18 месяцев или 3 000 моточасов.
          </h1>
        </div>
        <div class="swiper-slide" style="background: url(https://stnews.ru/uploads/posts/2019-04/15547248121353660.jpg) no-repeat;">
          <h1>
          Экскаваторы Zoomlion 2022 года выпуска в наличии на складе в Москве, Санкт-Петербурге и Забайкальске, по самым интересным ценам.
          </h1>
        </div>
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
      <div class="cart" href="nozhnichnye-pod-jomniki" style="background: url(/images/static/nozhnichnie-podjomniki.png) #fff">
        Ножничные подъемники
      </div>
      <div class="cart" href="es" style="background: url(/images/static/es.png) #fff">
        Электроштабелёры
      </div>
      <div class="cart" href="pzus" style="background: url(/images/static/pzus.png) #fff">
        Подъемник-загрузчик узкопроходимый штабелер
      </div>
      <div class="cart" href="richtrak" style="background: url(/images/static/richtrak.png) #fff">
        Ричтраки
      </div>
      <div class="cart" href="epp" style="background: url(/images/static/epp.png) #fff">
        Электрический погрузчик для поддонов
      </div>
      <div class="cart" href="ebt" style="background: url(/images/static/ebt.png) #fff">
        Электрический буксирный тягач
      </div>
    </div>
  </div>

  <!-- 

  Электроштабелёры
  Подъемник-загрузчик узкопроходимый штабелер
  Ричтрак
  Электрический погрузчик для поддонов
  Электрический буксирный тягач
   -->

  <!--<div class="fourth-block" id="hot">
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
        <?php
        foreach($hot as $product) {
          $image = $product['main_img'];
          $title = $product['title'];
          $descriptions = $product['description'];
          $link = $product['link'];
          $description = '';
          foreach($descriptions as $param => $key) {
            $description .= "$param <b>$key</b><br/>";
          }
          echo "<div class='swiper-slide'>";
            include 'components/productCart/productCart.php';
          echo "</div>";
        }
        ?>   
      </div>
    </div>
  </div>-->

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
        <?php
        include 'news.array.php';
        foreach ($news as $post) {
          $n_image = $post['image'];
          $n_date = $post['date'];
          $n_title = $post['title'];
          $n_description = $post['description'];
          $n_link = $post['link'];
        ?>
        <div class="swiper-slide">
          <?php include 'components/newsCart/newsCart.php'; ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
      </div>

  <!-- <div class="fifth-block" id="lizing">
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
  </div> -->

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
          <img src="/images/certificates/zoomlion.jpg" onclick="window.open('/images/certificates/zoomlion.jpg')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/news/8/m1.png" onclick="window.open('/images/news/8/m1.png')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/5.png" onclick="window.open('/images/certificates/5.png')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/6.png" onclick="window.open('/images/certificates/6.png')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/1.png" onclick="window.open('/images/certificates/1.png')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/2.png" onclick="window.open('/images/certificates/2.png')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/3.png" onclick="window.open('/images/certificates/3.png')" alt="">
        </div>
        <div class="swiper-slide">
          <img src="/images/certificates/4.png" onclick="window.open('/images/certificates/4.png')" alt="">
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