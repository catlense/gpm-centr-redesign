<div class="breadcrumb">
  <?php
  foreach ($breadcrumb as $link => $text) {
    echo "<a href='$link'>$text</a> <img src='/images/static/right-arrow.svg' />";
  }
  ?>
</div>
<style>
  .breadcrumb {
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .breadcrumb a {
    display: block;
    margin-right: 10px;
    margin-left: 10px;
    color: #333;
    text-decoration: none;
  }
  .breadcrumb a:first-child {
    margin-left: 0;
  }
  .breadcrumb a:hover {
    text-decoration: underline;
  }
  .breadcrumb img:last-child {
    display: none;
  }
</style>