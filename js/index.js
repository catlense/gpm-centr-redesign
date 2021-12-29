const mainSlider = new Swiper('.main-slider', {
  navigation: {
    nextEl: ".main-slider-next",
    prevEl: ".main-slider-prev"
  }
})

const cartLinks = document.querySelectorAll('.cart[href]')

cartLinks.forEach(e => {
  e.onclick = () => {
    window.location.href = `/catalog/${e.getAttribute('href')}`
  }
})

document.querySelectorAll('a[href^="#"').forEach(link => {

  link.onclick = function (e) {
    e.preventDefault();

    let href = this.getAttribute('href').substring(1);

    const scrollTarget = document.getElementById(href);

    //const topOffset = document.querySelector(``).offsetHeight;
     const topOffset = 80; // если не нужен отступ сверху 
    const elementPosition = scrollTarget.getBoundingClientRect().top;
    const offsetPosition = elementPosition - topOffset;

    window.scrollBy({
      top: offsetPosition,
      behavior: 'smooth'
    });
  }
});