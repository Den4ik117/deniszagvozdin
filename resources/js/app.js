let burgerMenu = document.querySelector('.burger-menu');
let menu = document.querySelector('.menu');
burgerMenu.addEventListener('click', function(e) {
  e.currentTarget.classList.toggle('active');
  menu.classList.toggle('active');
});