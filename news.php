<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Каталог / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/news.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', '/news'=>'Новости'];
    include 'components/breadcrumb/breadcrumb.php';
    ?>

    <div class="catalog-form">
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
      <?php include 'components/newsCart/newsCart.php'; ?>
    </div>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <script src="/js/app.js"></script>

</body>
</html>