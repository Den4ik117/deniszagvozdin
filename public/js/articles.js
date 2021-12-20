/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/articles.js ***!
  \**********************************/
var socials = document.querySelectorAll('.footer__social');
var modal = document.getElementById('modal');
var header = document.getElementById('header');
var menuButton = document.getElementById('header__button');
var menu = document.getElementById('menu');
stickyHeader();
socials.forEach(function (social) {
  social.addEventListener('click', function () {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';
    modal.addEventListener('click', function (event) {
      if (event.target.id == 'modal') {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    });
  });
});
window.addEventListener('scroll', stickyHeader);
menuButton.addEventListener('click', function () {
  menu.style.display = 'block';
  document.body.style.overflow = 'hidden';
  var buttons = document.querySelectorAll('#menu__button, .menu__link a');
  buttons.forEach(function (btn) {
    btn.addEventListener('click', function () {
      menu.removeAttribute('style');
      document.body.removeAttribute('style');
    });
  });
});

function stickyHeader() {
  if (scrollY > 15) {
    header.style.top = '0';
    header.style.backgroundColor = 'white';
    header.style.boxShadow = '0px 4px 6px rgb(0 0 0 / 10%)';
  } else {
    header.removeAttribute('style');
  }
}
/******/ })()
;