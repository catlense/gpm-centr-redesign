<?php

include 'news.array.php';

$link = $_GET['link'];
$post = [];

foreach($news as $n) {
  if($n['link'] == $link) $post = $n;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$post['title'];?> / ГПМ-Центр</title>

  <link rel="stylesheet" href="/styles/common.css">
  <link rel="stylesheet" href="/styles/page/post.css">
</head>
<body>
  <?php include 'components/header/header.php' ?>
  <div class="page-container">
    <?php
    $breadcrumb = ['/'=>'Главная', '/news'=>'Новости', $_SERVER['REQUEST_URI']=>$post['title']];
    include 'components/breadcrumb/breadcrumb.php';
    ?>

    <div class="preview" style="background: url(<?=$post['main_img'];?>)">
      <h1><?=$post['title'];?></h1>
      <p><?=$post['description'];?></p>
    </div>

    <h1><?=$post['title'];?></h1>
    <p class="date"><?=$post['date'];?></p>
    <?=$post['body']; ?>
  </div>

  <?php include 'components/footer/footer.php' ?>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="/js/product.js"></script>
  <script src="/js/app.js"></script>

</body>
</html>