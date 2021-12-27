const backcall = document.querySelector('.backcall')
const navmenu = document.querySelector('.navmenu')
const navbar = document.querySelector('.navigation')

backcall.onclick = () => {
  console.log('Clicked...')
}

navmenu.onclick = () => {
  navbar.classList.toggle('active') ? navmenu.innerText = 'Закрыть' : navmenu.innerText = 'Навигация'
}