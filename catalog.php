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
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', '/catalog'=>'Каталог продукции'];
    include 'components/breadcrumb/breadcrumb.php';
    ?>
    <div class="search-form">
      <input type="text" placeholder="Поиск">
      <button><i class="fas fa-search"></i></button>
    </div>

    <div class="catalog-form">
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
      <?php include 'components/productCart/productCart.php'; ?>
    </div>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <script src="/js/app.js"></script>

</body>
</html>