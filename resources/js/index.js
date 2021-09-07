let header = document.getElementById('header');
let services = document.getElementById('services');
let headerOffsetTop = header.offsetTop;
let sections = document.querySelectorAll('#main, #services, #portfolio, #skills, #about, #feedback');
let links = transformLinks(document.querySelectorAll('.header__link a'));
let innerWidth = window.innerWidth;
let anchorWidth = 992;
let menuButton = document.getElementById('header__button');
let menu = document.getElementById('menu');
let isActiveMenu = false;
let sticked = false;
let menuLinks = document.querySelectorAll('.menu__image, .menu__link');
let portfolioButtons = document.querySelectorAll('.portfolio__button');

let socials = document.querySelectorAll('.footer__social');
let modal = document.getElementById('modal');

let lazyImages = document.querySelectorAll('div[data-src]');
let windowHeight = document.documentElement.clientHeight;
let lazyImagesPositions = [];

if (lazyImages.length > 0) {
  lazyImages.forEach(img => {
    if (img.dataset.src) {
      lazyImagesPositions.push(img.getBoundingClientRect().top + pageYOffset);
      lazyScrollCheck();
    }
  });
}

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

portfolioButtons.forEach(portfolioButton => {
  portfolioButton.addEventListener('click', showPopup);
});


let observer = new IntersectionObserver(function(entries) {
  if (entries[0].intersectionRatio === 0) {
    header.style.position = 'fixed';
    header.style.top = 0;
    header.style.left = 0;
    header.style.width = '100%';
    header.style.zIndex = 1;
    header.style.boxShadow = '0px 4px 6px rgba(0, 0, 0, 0.1)';
    services.style.marginTop = '50px';
  } else {
    header.removeAttribute('style');
    services.removeAttribute('style');
  }
}).observe(document.getElementById('main'));

window.addEventListener('scroll', function() {
  activeMenu();
  lazyScroll();
});
activeMenu();

menuButton.addEventListener('click', menuSwitcher);
menuLinks.forEach(menuLink => {
  menuLink.addEventListener('click', menuSwitcher);
});

function activeMenu() {
  if (innerWidth >= anchorWidth) {
    sections.forEach(section => {
      let top = section.offsetTop - 50;
      let bottom = top + section.scrollHeight;
      let scroll = document.scrollingElement.scrollTop;
  
      if (scroll > top && scroll < bottom) {
        links[section.id].style.color = '#E7746F';
      } else {
        links[section.id].removeAttribute('style');
      }
    });
  }
}

function transformLinks(links) {
  let newLinks = {};

  links.forEach(link => {
    let index = link.href.split('#')[1];
    newLinks[index] = link;
  });

  return newLinks;
}

function menuSwitcher() {
  if (!isActiveMenu) {
    menu.style.display = 'block';
    menu.style.opacity = 1;
    menu.style.transition = '1s';
    document.body.style.overflow = 'hidden';
  } else {
    menu.removeAttribute('style');
    document.body.style.overflow = 'auto';
  }

  isActiveMenu = !isActiveMenu;
}

function showPopup() {
  let popup = this.parentNode.parentNode.getElementsByClassName('popup')[0];
  popup.style.display = 'block';
  document.body.style.overflow = 'hidden';
  let images = popup.querySelectorAll('.popup__image[data-src]');
  images.forEach(img => {
    img.src = img.dataset.src;
    img.removeAttribute('data-src');
  });

  popup.addEventListener('click', function(event) {
    if (event.target.classList.contains('popup')) {
      popup.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });
}

function lazyScrollCheck() {
  let imgIndex = lazyImagesPositions.findIndex(item => pageYOffset > item - windowHeight);
  
  if (imgIndex >= 0) {
    if (lazyImages[imgIndex].dataset.src) {
      lazyImages[imgIndex].style = 'background-image: url(' + lazyImages[imgIndex].dataset.src + ');';
      lazyImages[imgIndex].removeAttribute('data-src');
    }

    delete lazyImagesPositions[imgIndex];
  }
}

function lazyScroll() {
  if (document.querySelectorAll('div[data-src]').length > 0) {
    lazyScrollCheck();
  }
}