<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Контакты / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/post.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', '/contacts'=>'Контакты'];
    include 'components/breadcrumb/breadcrumb.php';
    ?>
    <h1>Контакты</h1>
    <p class="info">
      <a href="tel:88001016423">8 800 101 64 23</a><br/>
      <a href="mailto:info@gpm-centr.ru">info@gpm-centr.ru</a><br/>
      <a href="mailto:sales@gpm-centr.ru">sales@gpm-centr.ru</a><br/>
      117342, Г.МОСКВА, УЛ.БУТЛЕРОВА, Д 17 Б
    </p>
    
  </div>

  <?php include 'components/footer/footer.php' ?>
  <script src="/js/product.js"></script>
  <script src="/js/app.js"></script>
  <style>
    .page-container p.info {
      line-height: 2;
    }
    p.info a {
      text-decoration: none;
      color: rgb(100, 155, 200);
    }
    p.info a:hover {
      text-decoration: underline;
    }
  </style>
</body>
</html>