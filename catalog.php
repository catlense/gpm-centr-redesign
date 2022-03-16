<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/catalog.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
  <?php include 'components/header/header.php';
        include 'all_products.array.php';
  ?>
  <div class="page-container">
    <?php
    $link = '';
    $title = '';
    if(!empty(trim($_GET['link']))) {
      foreach ($categories as $category) {
        if($category['link'] == $_GET['link']) {
          $link = $category['link'];
          $title = $category['title'];
        }
      }
    }
    if(empty(trim($link))) {
      $breadcrumb = ['/'=>'Главная', '/catalog'=>'Каталог продукции'];
    } else {
      $breadcrumb = ['/'=>'Главная', '/catalog'=>'Каталог продукции', $link=>$title];
    }
    include 'components/breadcrumb/breadcrumb.php';
    ?>
    <div class="search-form">
      <input type="text" placeholder="Поиск">
      <button><i class="fas fa-search"></i></button>
    </div>

    <div class="catalog-form">
      <?php

        foreach ($products as $product) {
          if(!empty(trim($_GET['link'])) && $product['category'] != $_GET['link']) continue;
          $image = $product['main_img'];
          $title = $product['title'];
          $descriptions = $product['description'];
          $link = $product['link'];
          $description = '';
          foreach($descriptions as $param => $key) {
            if(empty($param)) {
              $description .= "<b>$key</b><br/>";
            } else {
              $description .= "$param <b>$key</b><br/>";
            }
          }
          include 'components/productCart/productCart.php';
        }

        if(!empty(trim($_GET['link'])) && $_GET['link'] == 'vp') {
          echo '
          <div class="product-cart">
            <img src="https://static.tildacdn.com/tild3033-6531-4431-b333-353961333832/-3.jpg" alt="">
            <h2>Дизельные погрузчики</h2>
            <p>Список дизельные погрузчиков</p>
            <a href="/catalog/vp-diz">Перейти</a>
          </div>
          ';
          echo '
          <div class="product-cart">
            <img src="https://static.tildacdn.com/tild6465-6562-4238-a632-313161313636/--FB20H-1.jpg" alt="">
            <h2>Электрические погрузчики</h2>
            <p>Список электрических погрузчиков</p>
            <a href="/catalog/vp-el">Перейти</a>
          </div>
          ';
        }

        if(!empty(trim($_GET['link'])) && $_GET['link'] == 'vp-el') {
          echo '
          <div class="product-cart">
            <img src="https://exkavator.ru/_modules/_ccatalogue/vehicles/38730small.jpg" alt="">
            <h2>Трёхколёсные электрические погрузчики</h2>
            <p>Список 3-х колёсных электрических погрузчиков</p>
            <a href="/catalog/vp-el-3">Перейти</a>
          </div>
          ';
          echo '
          <div class="product-cart">
            <img src="https://static.tildacdn.com/tild3062-3638-4634-a631-623566333764/f_468615c051852cd3-1.jpg" alt="">
            <h2>Четырёхколёсные электрические погрузчики</h2>
            <p>Список 4-х колёсных электрических погрузчиков</p>
            <a href="/catalog/vp-el-4">Перейти</a>
          </div>
          ';
        }
        
      ?>
    </div>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <script src="/js/app.js"></script>

</body>
</html>