const backcall = document.querySelector('.backcall')
const navmenu = document.querySelector('.navmenu')
const navbar = document.querySelector('.navigation')

backcall.onclick = () => {
  console.log('Clicked...')
}

navmenu.onclick = () => {
  navbar.classList.toggle('active') ? navmenu.innerText = 'Закрыть' : navmenu.innerText = 'Навигация'
}

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