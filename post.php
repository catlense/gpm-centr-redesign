<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Продукт / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/post.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', '/news'=>'Новости', '/news/post1'=>'Где купить бульдозер...'];
    include 'components/breadcrumb/breadcrumb.php';
    ?>

    <div class="preview" style="background: url(/images/static/news-template.png)">
      <h1>Где купить бульдозер?</h1>
      <p>Какой-то определенный текст этой новости.... Можно в несоклько предложений, дата и фотография меняются, как и тематика</p>
    </div>

    <h1>Где купить бульдозер?</h1>
    <p class="date">14.12.2021</p>
    <p>Когда возникает необходимость в бульдозере, некоторые владельцы стоят перед непреодолимой задачей, ведь купить бульдозер невозможно сразу. Для этого проводится поиск поставщиков, обсуждаются условия покупки, сроки поставки. большинстве случаев, техника только под заказ, а это время, «простой» в работе и срыв сроков.</p>
    <p>Техника практически всегда в наличии. Вы сможете ознакомиться с различными видами Бульдозеров Zoomlion, которые имеют все необходимые характеристики, позволяющие выполнять планировочные работы.</p>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/product.js"></script>
  <script src="/js/app.js"></script>

</body>
</html>