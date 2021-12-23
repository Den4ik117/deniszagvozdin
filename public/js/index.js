/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/index.js":
/*!*******************************!*\
  !*** ./resources/js/index.js ***!
  \*******************************/
/***/ (() => {

var header = document.getElementById('header');
var services = document.getElementById('services');
var headerOffsetTop = header.offsetTop;
var sections = document.querySelectorAll('#main, #services, #portfolio, #skills, #about, #feedback');
var links = transformLinks(document.querySelectorAll('.header__link a'));
var innerWidth = window.innerWidth;
var anchorWidth = 992;
var menuButton = document.getElementById('header__button');
var menu = document.getElementById('menu');
var isActiveMenu = false;
var sticked = false;
var menuLinks = document.querySelectorAll('.menu__image, .menu__link');
var portfolioButtons = document.querySelectorAll('.portfolio__button');
var socials = document.querySelectorAll('.footer__social');
var modal = document.getElementById('modal');
var lazyImages = document.querySelectorAll('div[data-src]');
var windowHeight = document.documentElement.clientHeight;
var lazyImagesPositions = [];

if (lazyImages.length > 0) {
  lazyImages.forEach(function (img) {
    if (img.dataset.src) {
      lazyImagesPositions.push(img.getBoundingClientRect().top + pageYOffset);
      lazyScrollCheck();
    }
  });
}

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
portfolioButtons.forEach(function (portfolioButton) {
  portfolioButton.addEventListener('click', showPopup);
});
var observer = new IntersectionObserver(function (entries) {
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
window.addEventListener('scroll', function () {
  activeMenu();
  lazyScroll();
});
activeMenu();
menuButton.addEventListener('click', menuSwitcher);
menuLinks.forEach(function (menuLink) {
  menuLink.addEventListener('click', menuSwitcher);
});

function activeMenu() {
  if (innerWidth >= anchorWidth) {
    sections.forEach(function (section) {
      var top = section.offsetTop - 50;
      var bottom = top + section.scrollHeight;
      var scroll = document.scrollingElement.scrollTop;

      if (scroll > top && scroll < bottom) {
        links[section.id].style.color = '#E7746F';
      } else {
        links[section.id].removeAttribute('style');
      }
    });
  }
}

function transformLinks(links) {
  var newLinks = {};
  links.forEach(function (link) {
    var index = link.href.split('#')[1];
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
  var popup = this.parentNode.parentNode.getElementsByClassName('popup')[0];
  popup.style.display = 'block';
  document.body.style.overflow = 'hidden';
  var images = popup.querySelectorAll('.popup__image[data-src]');
  images.forEach(function (img) {
    img.src = img.dataset.src;
    img.removeAttribute('data-src');
  });
  popup.addEventListener('click', function (event) {
    if (event.target.classList.contains('popup')) {
      popup.style.display = 'none';
      document.body.style.overflow = 'auto';
    }
  });
}

function lazyScrollCheck() {
  var imgIndex = lazyImagesPositions.findIndex(function (item) {
    return pageYOffset > item - windowHeight;
  });

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

/***/ }),

/***/ "./resources/scss/index-sm.scss":
/*!**************************************!*\
  !*** ./resources/scss/index-sm.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/index-xs.scss":
/*!**************************************!*\
  !*** ./resources/scss/index-xs.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/articles.scss":
/*!**************************************!*\
  !*** ./resources/scss/articles.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/article.scss":
/*!*************************************!*\
  !*** ./resources/scss/article.scss ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/index-xl.scss":
/*!**************************************!*\
  !*** ./resources/scss/index-xl.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/index-lg.scss":
/*!**************************************!*\
  !*** ./resources/scss/index-lg.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/index-md.scss":
/*!**************************************!*\
  !*** ./resources/scss/index-md.scss ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/index": 0,
/******/ 			"css/index-md": 0,
/******/ 			"css/index-lg": 0,
/******/ 			"css/index-xl": 0,
/******/ 			"css/article": 0,
/******/ 			"css/articles": 0,
/******/ 			"css/app": 0,
/******/ 			"css/index-xs": 0,
/******/ 			"css/index-sm": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/js/index.js")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/articles.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/article.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/index-xl.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/index-lg.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/index-md.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/index-sm.scss")))
/******/ 	__webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/scss/index-xs.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/index-md","css/index-lg","css/index-xl","css/article","css/articles","css/app","css/index-xs","css/index-sm"], () => (__webpack_require__("./resources/css/app.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;