/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/articles.js ***!
  \**********************************/
var body = document.querySelector('body');
var openBtn = document.querySelector('.header__open');
var closeBtn = document.querySelector('.header__close');
var menu = document.querySelector('.header__menu');
var header = document.querySelector('.header');

var toggleMenu = function toggleMenu() {
  menu.classList.toggle('active');
  body.classList.toggle('hidden');
};

var stickHeader = function stickHeader() {
  scrollY > 15 ? header.classList.add('fixed') : header.classList.remove('fixed');
};

openBtn.addEventListener('click', toggleMenu);
closeBtn.addEventListener('click', toggleMenu);
window.addEventListener('scroll', stickHeader);
stickHeader();
/******/ })()
;