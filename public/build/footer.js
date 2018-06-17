/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/build/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/js/footer.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/footer.js":
/*!*****************************!*\
  !*** ./assets/js/footer.js ***!
  \*****************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('footer').outerHeight();

$(window).scroll(function (event) {
    didScroll = true;
});

setInterval(function () {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta) return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('footer').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
            $('footer').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgMDNjMmE4ZmJlNTEyMTQ4OGFlMTAiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2Zvb3Rlci5qcyJdLCJuYW1lcyI6WyJkaWRTY3JvbGwiLCJsYXN0U2Nyb2xsVG9wIiwiZGVsdGEiLCJuYXZiYXJIZWlnaHQiLCIkIiwib3V0ZXJIZWlnaHQiLCJ3aW5kb3ciLCJzY3JvbGwiLCJldmVudCIsInNldEludGVydmFsIiwiaGFzU2Nyb2xsZWQiLCJzdCIsInNjcm9sbFRvcCIsIk1hdGgiLCJhYnMiLCJyZW1vdmVDbGFzcyIsImFkZENsYXNzIiwiaGVpZ2h0IiwiZG9jdW1lbnQiXSwibWFwcGluZ3MiOiI7QUFBQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTs7O0FBR0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EsYUFBSztBQUNMO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0EsbUNBQTJCLDBCQUEwQixFQUFFO0FBQ3ZELHlDQUFpQyxlQUFlO0FBQ2hEO0FBQ0E7QUFDQTs7QUFFQTtBQUNBLDhEQUFzRCwrREFBK0Q7O0FBRXJIO0FBQ0E7O0FBRUE7QUFDQTs7Ozs7Ozs7Ozs7OztBQzdEQSxJQUFJQSxTQUFKO0FBQ0EsSUFBSUMsZ0JBQWdCLENBQXBCO0FBQ0EsSUFBSUMsUUFBUSxDQUFaO0FBQ0EsSUFBSUMsZUFBZUMsRUFBRSxRQUFGLEVBQVlDLFdBQVosRUFBbkI7O0FBRUFELEVBQUVFLE1BQUYsRUFBVUMsTUFBVixDQUFpQixVQUFTQyxLQUFULEVBQWU7QUFDNUJSLGdCQUFZLElBQVo7QUFDSCxDQUZEOztBQUlBUyxZQUFZLFlBQVc7QUFDbkIsUUFBSVQsU0FBSixFQUFlO0FBQ1hVO0FBQ0FWLG9CQUFZLEtBQVo7QUFDSDtBQUNKLENBTEQsRUFLRyxHQUxIOztBQU9BLFNBQVNVLFdBQVQsR0FBdUI7QUFDbkIsUUFBSUMsS0FBS1AsRUFBRSxJQUFGLEVBQVFRLFNBQVIsRUFBVDs7QUFFQTtBQUNBLFFBQUdDLEtBQUtDLEdBQUwsQ0FBU2IsZ0JBQWdCVSxFQUF6QixLQUFnQ1QsS0FBbkMsRUFDSTs7QUFFSjtBQUNBO0FBQ0EsUUFBSVMsS0FBS1YsYUFBTCxJQUFzQlUsS0FBS1IsWUFBL0IsRUFBNEM7QUFDeEM7QUFDQUMsVUFBRSxRQUFGLEVBQVlXLFdBQVosQ0FBd0IsVUFBeEIsRUFBb0NDLFFBQXBDLENBQTZDLFFBQTdDO0FBQ0gsS0FIRCxNQUdPO0FBQ0g7QUFDQSxZQUFHTCxLQUFLUCxFQUFFRSxNQUFGLEVBQVVXLE1BQVYsRUFBTCxHQUEwQmIsRUFBRWMsUUFBRixFQUFZRCxNQUFaLEVBQTdCLEVBQW1EO0FBQy9DYixjQUFFLFFBQUYsRUFBWVcsV0FBWixDQUF3QixRQUF4QixFQUFrQ0MsUUFBbEMsQ0FBMkMsVUFBM0M7QUFDSDtBQUNKOztBQUVEZixvQkFBZ0JVLEVBQWhCO0FBQ0gsQyIsImZpbGUiOiJmb290ZXIuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHtcbiBcdFx0XHRcdGNvbmZpZ3VyYWJsZTogZmFsc2UsXG4gXHRcdFx0XHRlbnVtZXJhYmxlOiB0cnVlLFxuIFx0XHRcdFx0Z2V0OiBnZXR0ZXJcbiBcdFx0XHR9KTtcbiBcdFx0fVxuIFx0fTtcblxuIFx0Ly8gZ2V0RGVmYXVsdEV4cG9ydCBmdW5jdGlvbiBmb3IgY29tcGF0aWJpbGl0eSB3aXRoIG5vbi1oYXJtb255IG1vZHVsZXNcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuIFx0XHR2YXIgZ2V0dGVyID0gbW9kdWxlICYmIG1vZHVsZS5fX2VzTW9kdWxlID9cbiBcdFx0XHRmdW5jdGlvbiBnZXREZWZhdWx0KCkgeyByZXR1cm4gbW9kdWxlWydkZWZhdWx0J107IH0gOlxuIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18uZChnZXR0ZXIsICdhJywgZ2V0dGVyKTtcbiBcdFx0cmV0dXJuIGdldHRlcjtcbiBcdH07XG5cbiBcdC8vIE9iamVjdC5wcm90b3R5cGUuaGFzT3duUHJvcGVydHkuY2FsbFxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuXG4gXHQvLyBfX3dlYnBhY2tfcHVibGljX3BhdGhfX1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCIvYnVpbGQvXCI7XG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gXCIuL2Fzc2V0cy9qcy9mb290ZXIuanNcIik7XG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gd2VicGFjay9ib290c3RyYXAgMDNjMmE4ZmJlNTEyMTQ4OGFlMTAiLCJ2YXIgZGlkU2Nyb2xsO1xyXG52YXIgbGFzdFNjcm9sbFRvcCA9IDA7XHJcbnZhciBkZWx0YSA9IDU7XHJcbnZhciBuYXZiYXJIZWlnaHQgPSAkKCdmb290ZXInKS5vdXRlckhlaWdodCgpO1xyXG5cclxuJCh3aW5kb3cpLnNjcm9sbChmdW5jdGlvbihldmVudCl7XHJcbiAgICBkaWRTY3JvbGwgPSB0cnVlO1xyXG59KTtcclxuXHJcbnNldEludGVydmFsKGZ1bmN0aW9uKCkge1xyXG4gICAgaWYgKGRpZFNjcm9sbCkge1xyXG4gICAgICAgIGhhc1Njcm9sbGVkKCk7XHJcbiAgICAgICAgZGlkU2Nyb2xsID0gZmFsc2U7XHJcbiAgICB9XHJcbn0sIDI1MCk7XHJcblxyXG5mdW5jdGlvbiBoYXNTY3JvbGxlZCgpIHtcclxuICAgIHZhciBzdCA9ICQodGhpcykuc2Nyb2xsVG9wKCk7XHJcblxyXG4gICAgLy8gTWFrZSBzdXJlIHRoZXkgc2Nyb2xsIG1vcmUgdGhhbiBkZWx0YVxyXG4gICAgaWYoTWF0aC5hYnMobGFzdFNjcm9sbFRvcCAtIHN0KSA8PSBkZWx0YSlcclxuICAgICAgICByZXR1cm47XHJcblxyXG4gICAgLy8gSWYgdGhleSBzY3JvbGxlZCBkb3duIGFuZCBhcmUgcGFzdCB0aGUgbmF2YmFyLCBhZGQgY2xhc3MgLm5hdi11cC5cclxuICAgIC8vIFRoaXMgaXMgbmVjZXNzYXJ5IHNvIHlvdSBuZXZlciBzZWUgd2hhdCBpcyBcImJlaGluZFwiIHRoZSBuYXZiYXIuXHJcbiAgICBpZiAoc3QgPiBsYXN0U2Nyb2xsVG9wICYmIHN0ID4gbmF2YmFySGVpZ2h0KXtcclxuICAgICAgICAvLyBTY3JvbGwgRG93blxyXG4gICAgICAgICQoJ2Zvb3RlcicpLnJlbW92ZUNsYXNzKCduYXYtZG93bicpLmFkZENsYXNzKCduYXYtdXAnKTtcclxuICAgIH0gZWxzZSB7XHJcbiAgICAgICAgLy8gU2Nyb2xsIFVwXHJcbiAgICAgICAgaWYoc3QgKyAkKHdpbmRvdykuaGVpZ2h0KCkgPCAkKGRvY3VtZW50KS5oZWlnaHQoKSkge1xyXG4gICAgICAgICAgICAkKCdmb290ZXInKS5yZW1vdmVDbGFzcygnbmF2LXVwJykuYWRkQ2xhc3MoJ25hdi1kb3duJyk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG5cclxuICAgIGxhc3RTY3JvbGxUb3AgPSBzdDtcclxufVxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyAuL2Fzc2V0cy9qcy9mb290ZXIuanMiXSwic291cmNlUm9vdCI6IiJ9