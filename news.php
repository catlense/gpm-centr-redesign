<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Новости / ГПМ-Центр</title>

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
      <?php
      include 'news.array.php';
      foreach ($news as $post) {
        $n_image = $post['image'];
        $n_date = $post['date'];
        $n_title = $post['title'];
        $n_description = $post['description'];
        $n_link = $post['link'];

        include 'components/newsCart/newsCart.php';
      }
      ?>
    </div>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <script src="/js/app.js"></script>

</body>
</html>