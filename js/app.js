const backcall = document.querySelector('.backcall')
const navmenu = document.querySelector('.navmenu')
const navbar = document.querySelector('.navigation')

backcall.onclick = () => {
  document.querySelector('.backcall-popup').classList.toggle('active')
}

document.querySelector('.backcall-close').onclick = () => {
  document.querySelector('.backcall-popup').classList.remove('active')
}

document.querySelectorAll('.navigation ul li').forEach(e => e.onclick = () => {
  if(navbar.classList.contains('active')) {
    navbar.classList.remove('active')
    navmenu.innerText = 'Навигация'
  } 
})

navmenu.onclick = () => {
  navbar.classList.toggle('active') ? navmenu.innerText = 'Закрыть' : navmenu.innerText = 'Навигация'
}

document.querySelector('.sendBackcall').onclick = (e) => {
  e.preventDefault()
  let name = document.querySelector('form #name')
  let phone = document.querySelector('form #phone')
  let mail = document.querySelector('form #mail')
  let quest = document.querySelector('form #quest')
  if (phone.value == '') return
  if (name.value == '') name.value = '-'
  if (quest.value == '') quest.value = '-'
  if (mail.value == '') mail.value = '-'
  fetch(`/tg.php?name=${name.value}&phone=${phone.value}&mail=${mail.value}&quest=${quest.value}`)
  document.querySelector('.status').innerText = 'Звонок заказан, мы Вам скоро перезвоним'
  return false
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