/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/components/sidebar.js":
/*!********************************************!*\
  !*** ./resources/js/components/sidebar.js ***!
  \********************************************/
/***/ (() => {

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function slideToggle(t, e, o) {
  0 === t.clientHeight ? j(t, e, o, !0) : j(t, e, o);
}

function slideUp(t, e, o) {
  j(t, e, o);
}

function slideDown(t, e, o) {
  j(t, e, o, !0);
}

function j(t, e, o, i) {
  void 0 === e && (e = 400), void 0 === i && (i = !1), t.style.overflow = "hidden", i && (t.style.display = "block");
  var p,
      l = window.getComputedStyle(t),
      n = parseFloat(l.getPropertyValue("height")),
      a = parseFloat(l.getPropertyValue("padding-top")),
      s = parseFloat(l.getPropertyValue("padding-bottom")),
      r = parseFloat(l.getPropertyValue("margin-top")),
      d = parseFloat(l.getPropertyValue("margin-bottom")),
      g = n / e,
      y = a / e,
      m = s / e,
      u = r / e,
      h = d / e;
  window.requestAnimationFrame(function l(x) {
    void 0 === p && (p = x);
    var f = x - p;
    i ? (t.style.height = g * f + "px", t.style.paddingTop = y * f + "px", t.style.paddingBottom = m * f + "px", t.style.marginTop = u * f + "px", t.style.marginBottom = h * f + "px") : (t.style.height = n - g * f + "px", t.style.paddingTop = a - y * f + "px", t.style.paddingBottom = s - m * f + "px", t.style.marginTop = r - u * f + "px", t.style.marginBottom = d - h * f + "px"), f >= e ? (t.style.height = "", t.style.paddingTop = "", t.style.paddingBottom = "", t.style.marginTop = "", t.style.marginBottom = "", t.style.overflow = "", i || (t.style.display = "none"), "function" == typeof o && o()) : window.requestAnimationFrame(l);
  });
}
/**
 * a Sidebar component
 * @param  {HTMLElement} el - sidebar element
 * @param  {object} options={} - options
 */


var Sidebar = /*#__PURE__*/function () {
  function Sidebar(el) {
    var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

    _classCallCheck(this, Sidebar);

    this.sidebarEL = el instanceof HTMLElement ? el : document.querySelector(el);
    this.options = options;
    this.init();
  }
  /**
   * initialize the sidebar
   */


  _createClass(Sidebar, [{
    key: "init",
    value: function init() {
      var _this = this;

      // add event listener to sidebar
      document.querySelectorAll('.burger-btn').forEach(function (el) {
        return el.addEventListener('click', _this.toggle.bind(_this));
      });
      document.querySelectorAll('.sidebar-hide').forEach(function (el) {
        return el.addEventListener('click', _this.toggle.bind(_this));
      });
      window.addEventListener('resize', this.onResize.bind(this)); // 

      var sidebarItems = document.querySelectorAll('.sidebar-item.has-sub');

      var _loop = function _loop() {
        var sidebarItem = sidebarItems[i];
        sidebarItems[i].querySelector('.sidebar-link').addEventListener('click', function (e) {
          e.preventDefault();
          var submenu = sidebarItem.querySelector('.submenu');
          if (submenu.classList.contains('active')) submenu.style.display = "block";
          if (submenu.style.display == "none") submenu.classList.add('active');else submenu.classList.remove('active');
          slideToggle(submenu, 300);
        });
      };

      for (var i = 0; i < sidebarItems.length; i++) {
        _loop();
      } // Perfect Scrollbar Init


      if (typeof PerfectScrollbar == 'function') {
        var container = document.querySelector(".sidebar-wrapper");
        var ps = new PerfectScrollbar(container, {
          wheelPropagation: false
        });
      } // Scroll into active sidebar


      setTimeout(function () {
        return document.querySelector('.sidebar-item.active').scrollIntoView(false);
      }, 100); // check responsive

      this.onFirstLoad();
    }
    /**
     * On First Load
     */

  }, {
    key: "onFirstLoad",
    value: function onFirstLoad() {
      var w = window.innerWidth;

      if (w < 1200) {
        this.sidebarEL.classList.remove('active');
      }
    }
    /**
     * On Sidebar Rezise Event
     */

  }, {
    key: "onResize",
    value: function onResize() {
      var w = window.innerWidth;

      if (w < 1200) {
        this.sidebarEL.classList.remove('active');
      } else {
        this.sidebarEL.classList.add('active');
      } // reset 


      this.deleteBackdrop();
      this.toggleOverflowBody(true);
    }
    /**
     * Toggle Sidebar
     */

  }, {
    key: "toggle",
    value: function toggle() {
      var sidebarState = this.sidebarEL.classList.contains('active');

      if (sidebarState) {
        this.hide();
      } else {
        this.show();
      }
    }
    /**
     * Show Sidebar
     */

  }, {
    key: "show",
    value: function show() {
      this.sidebarEL.classList.add('active');
      this.createBackdrop();
      this.toggleOverflowBody();
    }
    /**
     * Hide Sidebar
     */

  }, {
    key: "hide",
    value: function hide() {
      this.sidebarEL.classList.remove('active');
      this.deleteBackdrop();
      this.toggleOverflowBody();
    }
    /**
     * Create Sidebar Backdrop
     */

  }, {
    key: "createBackdrop",
    value: function createBackdrop() {
      this.deleteBackdrop();
      var backdrop = document.createElement('div');
      backdrop.classList.add('sidebar-backdrop');
      backdrop.addEventListener('click', this.hide.bind(this));
      document.body.appendChild(backdrop);
    }
    /**
     * Delete Sidebar Backdrop
     */

  }, {
    key: "deleteBackdrop",
    value: function deleteBackdrop() {
      var backdrop = document.querySelector('.sidebar-backdrop');

      if (backdrop) {
        backdrop.remove();
      }
    }
    /**
     * Toggle Overflow Body
     */

  }, {
    key: "toggleOverflowBody",
    value: function toggleOverflowBody(active) {
      var sidebarState = this.sidebarEL.classList.contains('active');
      var body = document.querySelector('body');

      if (typeof active == 'undefined') {
        body.style.overflowY = sidebarState ? 'hidden' : 'auto';
      } else {
        body.style.overflowY = active ? 'auto' : 'hidden';
      }
    }
  }]);

  return Sidebar;
}();
/**
 * Create Sidebar Wrapper
 */


var sidebarEl = document.getElementById("sidebar");

if (sidebarEl) {
  window.sidebar = new Sidebar(sidebarEl);
}

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
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
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
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!*******************************!*\
  !*** ./resources/js/mazer.js ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "Sidebar": () => (/* reexport default from dynamic */ _components_sidebar__WEBPACK_IMPORTED_MODULE_0___default.a)
/* harmony export */ });
/* harmony import */ var _components_sidebar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/sidebar */ "./resources/js/components/sidebar.js");
/* harmony import */ var _components_sidebar__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_sidebar__WEBPACK_IMPORTED_MODULE_0__);


})();

/******/ })()
;