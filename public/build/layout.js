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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/css/layout_style.css":
/*!*************************************!*\
  !*** ./assets/css/layout_style.css ***!
  \*************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/js/layout.js":
/*!*****************************!*\
  !*** ./assets/js/layout.js ***!
  \*****************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports) {

var plus = document.getElementById("plus");
var accordeon = document.getElementById("accordeon");
var caret = document.getElementById("caret");

plus.onclick = function () {
    var srcVersCaret = caret.src;

    if (srcVersCaret === "http://localhost/mapbox/includes/img/caretdown.png") {
        var caretVersBas = true;
    }

    if (caretVersBas) {
        accordeon.style.display = "block";

        caret.src = "includes/img/caretup.png";
    } else {
        accordeon.style.display = "none";

        caret.src = "includes/img/caretdown.png";
    }
};

/***/ }),

/***/ 0:
/*!*****************************************************************!*\
  !*** multi ./assets/js/layout.js ./assets/css/layout_style.css ***!
  \*****************************************************************/
/*! dynamic exports provided */
/*! all exports used */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./assets/js/layout.js */"./assets/js/layout.js");
module.exports = __webpack_require__(/*! ./assets/css/layout_style.css */"./assets/css/layout_style.css");


/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAgZDA3YWJlOTkwMmExNmI3ZDdhNDQiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Nzcy9sYXlvdXRfc3R5bGUuY3NzP2ExMzEiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2xheW91dC5qcyJdLCJuYW1lcyI6WyJwbHVzIiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCIsImFjY29yZGVvbiIsImNhcmV0Iiwib25jbGljayIsInNyY1ZlcnNDYXJldCIsInNyYyIsImNhcmV0VmVyc0JhcyIsInN0eWxlIiwiZGlzcGxheSJdLCJtYXBwaW5ncyI6IjtBQUFBO0FBQ0E7O0FBRUE7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTs7QUFFQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBOzs7QUFHQTtBQUNBOztBQUVBO0FBQ0E7O0FBRUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxhQUFLO0FBQ0w7QUFDQTs7QUFFQTtBQUNBO0FBQ0E7QUFDQSxtQ0FBMkIsMEJBQTBCLEVBQUU7QUFDdkQseUNBQWlDLGVBQWU7QUFDaEQ7QUFDQTtBQUNBOztBQUVBO0FBQ0EsOERBQXNELCtEQUErRDs7QUFFckg7QUFDQTs7QUFFQTtBQUNBOzs7Ozs7Ozs7Ozs7O0FDN0RBLHlDOzs7Ozs7Ozs7Ozs7QUNBQSxJQUFJQSxPQUFPQyxTQUFTQyxjQUFULENBQXdCLE1BQXhCLENBQVg7QUFDQSxJQUFJQyxZQUFZRixTQUFTQyxjQUFULENBQXdCLFdBQXhCLENBQWhCO0FBQ0EsSUFBSUUsUUFBUUgsU0FBU0MsY0FBVCxDQUF3QixPQUF4QixDQUFaOztBQUVBRixLQUFLSyxPQUFMLEdBQWUsWUFBVztBQUN0QixRQUFJQyxlQUFlRixNQUFNRyxHQUF6Qjs7QUFHQSxRQUFHRCxpQkFBaUIsb0RBQXBCLEVBQXlFO0FBQ3JFLFlBQUlFLGVBQWUsSUFBbkI7QUFDSDs7QUFJRCxRQUFHQSxZQUFILEVBQWdCO0FBQ1pMLGtCQUFVTSxLQUFWLENBQWdCQyxPQUFoQixHQUEwQixPQUExQjs7QUFFQU4sY0FBTUcsR0FBTixHQUFZLDBCQUFaO0FBQ0gsS0FKRCxNQUlLO0FBQ0RKLGtCQUFVTSxLQUFWLENBQWdCQyxPQUFoQixHQUEwQixNQUExQjs7QUFFQU4sY0FBTUcsR0FBTixHQUFZLDRCQUFaO0FBQ0g7QUFDSixDQW5CRCxDIiwiZmlsZSI6ImxheW91dC5qcyIsInNvdXJjZXNDb250ZW50IjpbIiBcdC8vIFRoZSBtb2R1bGUgY2FjaGVcbiBcdHZhciBpbnN0YWxsZWRNb2R1bGVzID0ge307XG5cbiBcdC8vIFRoZSByZXF1aXJlIGZ1bmN0aW9uXG4gXHRmdW5jdGlvbiBfX3dlYnBhY2tfcmVxdWlyZV9fKG1vZHVsZUlkKSB7XG5cbiBcdFx0Ly8gQ2hlY2sgaWYgbW9kdWxlIGlzIGluIGNhY2hlXG4gXHRcdGlmKGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdKSB7XG4gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4gXHRcdH1cbiBcdFx0Ly8gQ3JlYXRlIGEgbmV3IG1vZHVsZSAoYW5kIHB1dCBpdCBpbnRvIHRoZSBjYWNoZSlcbiBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuIFx0XHRcdGk6IG1vZHVsZUlkLFxuIFx0XHRcdGw6IGZhbHNlLFxuIFx0XHRcdGV4cG9ydHM6IHt9XG4gXHRcdH07XG5cbiBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4gXHRcdG1vZHVsZXNbbW9kdWxlSWRdLmNhbGwobW9kdWxlLmV4cG9ydHMsIG1vZHVsZSwgbW9kdWxlLmV4cG9ydHMsIF9fd2VicGFja19yZXF1aXJlX18pO1xuXG4gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbiBcdFx0bW9kdWxlLmwgPSB0cnVlO1xuXG4gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4gXHRcdHJldHVybiBtb2R1bGUuZXhwb3J0cztcbiBcdH1cblxuXG4gXHQvLyBleHBvc2UgdGhlIG1vZHVsZXMgb2JqZWN0IChfX3dlYnBhY2tfbW9kdWxlc19fKVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGUgY2FjaGVcbiBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG5cbiBcdC8vIGRlZmluZSBnZXR0ZXIgZnVuY3Rpb24gZm9yIGhhcm1vbnkgZXhwb3J0c1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4gXHRcdGlmKCFfX3dlYnBhY2tfcmVxdWlyZV9fLm8oZXhwb3J0cywgbmFtZSkpIHtcbiBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgbmFtZSwge1xuIFx0XHRcdFx0Y29uZmlndXJhYmxlOiBmYWxzZSxcbiBcdFx0XHRcdGVudW1lcmFibGU6IHRydWUsXG4gXHRcdFx0XHRnZXQ6IGdldHRlclxuIFx0XHRcdH0pO1xuIFx0XHR9XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIi9idWlsZC9cIjtcblxuIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4gXHRyZXR1cm4gX193ZWJwYWNrX3JlcXVpcmVfXyhfX3dlYnBhY2tfcmVxdWlyZV9fLnMgPSAwKTtcblxuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyB3ZWJwYWNrL2Jvb3RzdHJhcCBkMDdhYmU5OTAyYTE2YjdkN2E0NCIsIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luXG5cblxuLy8vLy8vLy8vLy8vLy8vLy8vXG4vLyBXRUJQQUNLIEZPT1RFUlxuLy8gLi9hc3NldHMvY3NzL2xheW91dF9zdHlsZS5jc3Ncbi8vIG1vZHVsZSBpZCA9IC4vYXNzZXRzL2Nzcy9sYXlvdXRfc3R5bGUuY3NzXG4vLyBtb2R1bGUgY2h1bmtzID0gMSIsInZhciBwbHVzID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJwbHVzXCIpO1xyXG52YXIgYWNjb3JkZW9uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJhY2NvcmRlb25cIik7XHJcbnZhciBjYXJldCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiY2FyZXRcIik7XHJcblxyXG5wbHVzLm9uY2xpY2sgPSBmdW5jdGlvbigpIHtcclxuICAgIHZhciBzcmNWZXJzQ2FyZXQgPSBjYXJldC5zcmM7XHJcblxyXG5cclxuICAgIGlmKHNyY1ZlcnNDYXJldCA9PT0gXCJodHRwOi8vbG9jYWxob3N0L21hcGJveC9pbmNsdWRlcy9pbWcvY2FyZXRkb3duLnBuZ1wiKXtcclxuICAgICAgICB2YXIgY2FyZXRWZXJzQmFzID0gdHJ1ZTtcclxuICAgIH1cclxuXHJcblxyXG5cclxuICAgIGlmKGNhcmV0VmVyc0Jhcyl7XHJcbiAgICAgICAgYWNjb3JkZW9uLnN0eWxlLmRpc3BsYXkgPSBcImJsb2NrXCI7XHJcblxyXG4gICAgICAgIGNhcmV0LnNyYyA9IFwiaW5jbHVkZXMvaW1nL2NhcmV0dXAucG5nXCI7XHJcbiAgICB9ZWxzZXtcclxuICAgICAgICBhY2NvcmRlb24uc3R5bGUuZGlzcGxheSA9IFwibm9uZVwiO1xyXG5cclxuICAgICAgICBjYXJldC5zcmMgPSBcImluY2x1ZGVzL2ltZy9jYXJldGRvd24ucG5nXCI7XHJcbiAgICB9XHJcbn07XG5cblxuLy8gV0VCUEFDSyBGT09URVIgLy9cbi8vIC4vYXNzZXRzL2pzL2xheW91dC5qcyJdLCJzb3VyY2VSb290IjoiIn0=