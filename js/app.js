const backcall = document.querySelector('.backcall')
const navmenu = document.querySelector('.navmenu')
const navbar = document.querySelector('.navigation')

backcall.onclick = () => {
  console.log('Clicked...')
}

navmenu.onclick = () => {
  navbar.classList.toggle('active') ? navmenu.innerText = 'Закрыть' : navmenu.innerText = 'Навигация'
}

const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
  smoothLink.addEventListener('click', function (e) {
    e.preventDefault();
    const id = smoothLink.getAttribute('href');

    document.querySelector(id).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  });
};