<?php include './all_products.array.php'; ?>
<link rel="stylesheet" href="/components/header/header.css">

<header>
  <div class="main-line">
    <a href="/">
      <img src="/images/header/logotype.png" alt="">
    </a>

    <div class="addresses">
      <div class="address-cart">
        <div class="address-image">
          <img src="/images/header/location.svg" alt="">
        </div>
        <div class="address-text">
          <p class="value">г. Москва</p>
          <p class="text">ул. Бутлерова, д 17 Б</p>
        </div>
      </div>
      <div class="address-cart">
        <div class="address-image">
          <img src="/images/header/phone.svg" alt="">
        </div>
        <div class="address-text">
          <p class="value">8 (800) 101 64 23</p>
          <p class="text">Обратная связь</p>
        </div>
      </div>
    </div>

    <div class="backcall">
      Заказать звонок
    </div>
  </div>

</header>
<div class="navigation">
  <ul>
    <li><a href="/#about">О компании</a></li>
    <li>
      <a href="/#catalog">Каталог продукции</a>
      <ul>
        <li class="multiply">
          <a href="">Подъёмники</a>
          <ul>
            <li>
              <a href="/catalog/teleskopicheskie-pod-jomniki">Телескопические подъемники</a>
            </li>
            <li>
              <a href="/catalog/kolenchatye-pod-jomniki">Коленчатые подъемники</a>
            </li>
            <li>
              <a href="/catalog/nozhnichnye-pod-jomniki">Ножничные подъемники</a>
            </li>
          </ul>
        </li>
        <li class="multiply">
          <a href="/catalog/vp">Вилочные погрузчики</a>
          <ul>
            <li>
              <a href="/catalog/vp-diz">Дизельные погрузчики</a>
            </li>
            <li>
              <a href="/catalog/vp-el">Электрические погрузчики</a>
            </li>
          </ul>
        </li>
        <li><a href="/catalog/ekskavatory">Экскаваторы</a></li>
        </ul>
      </li>
      <li><a href="/news">Новости</a></li>
    <li><a href="/#lizing">Лизинговые программы</a></li>
    <li><a href="/#contacts">Контакты</a></li>
    <li class="navmenu">Навигация</li>
  </ul>
</div>

<div class="backcall-popup">
  <div class="container">
    <p class="backcall-close">×</p>
    <p class="info">Заполните форму и мы свяжемся с Вами в ближайшее время</p>
    <form>
      <input type="text" name="name" id="name" placeholder="Ваше имя">
      <input type="tel" name="phone" id="phone" placeholder="Ваш телефон *">
      <input type="email" name="mail" id="mail" placeholder="Ваша почта">
      <input type="text" name="quest" id="quest" placeholder="Ваш вопрос *">
      <button class="sendBackcall">Отправить</button>
      <div class="status"></div>
    </form>
  </div>
</div>