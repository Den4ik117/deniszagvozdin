let body = document.querySelector('body');
let openBtn = document.querySelector('.header__open');
let closeBtn = document.querySelector('.header__close');
let menu = document.querySelector('.header__menu');
let header = document.querySelector('.header');

let toggleMenu = function () {
    menu.classList.toggle('active');
    body.classList.toggle('hidden');
}

let stickHeader = function () {
    (scrollY > 15) ? header.classList.add('fixed') : header.classList.remove('fixed');
}

openBtn.addEventListener('click', toggleMenu);
closeBtn.addEventListener('click', toggleMenu);
window.addEventListener('scroll', stickHeader);

stickHeader();
