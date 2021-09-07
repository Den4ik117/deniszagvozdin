let socials = document.querySelectorAll('.footer__social');
let modal = document.getElementById('modal');
let header = document.getElementById('header');
let menuButton = document.getElementById('header__button');
let menu = document.getElementById('menu');

stickyHeader();

socials.forEach(social => {
  social.addEventListener('click', function() {
    modal.style.display = 'block';
    document.body.style.overflow = 'hidden';

    modal.addEventListener('click', function(event) {
      if (event.target.id == 'modal') {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
      }
    });
  });
});

window.addEventListener('scroll', stickyHeader);

menuButton.addEventListener('click', function() {
  menu.style.display = 'block';
  document.body.style.overflow = 'hidden';

  let buttons = document.querySelectorAll('#menu__button, .menu__link a');
  buttons.forEach(btn => {
    btn.addEventListener('click', function() {
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