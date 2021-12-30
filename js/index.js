const mainSlider = new Swiper('.main-slider', {
  navigation: {
    nextEl: ".main-slider-next",
    prevEl: ".main-slider-prev"
  }
})

const hotSlider = new Swiper('.hot-slider', {
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: ".hot-slider-next",
    prevEl: ".hot-slider-prev"
  },
  breakpoints: {
    1200: {
      slidesPerView: 4
    },
    900: {
      slidesPerView: 3
    },
    440: {
      slidesPerView: 2
    }
  }
})

const certSlider = new Swiper('.cert-slider', {
  slidesPerView: "auto",
  spaceBetween: 50,
  navigation: {
    nextEl: ".hot-slider-next",
    prevEl: ".hot-slider-prev"
  }
})

const cartLinks = document.querySelectorAll('.cart[href]')

cartLinks.forEach(e => {
  e.onclick = () => {
    window.location.href = `/catalog/${e.getAttribute('href')}`
  }
})