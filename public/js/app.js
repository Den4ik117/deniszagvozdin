/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
var burgerMenu = document.querySelector('.burger-menu');
var menu = document.querySelector('.menu');
burgerMenu.addEventListener('click', function (e) {
  e.currentTarget.classList.toggle('active');
  menu.classList.toggle('active');
});
/******/ })()
;