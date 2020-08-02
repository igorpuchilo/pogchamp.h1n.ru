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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app_main.js":
/*!**********************************!*\
  !*** ./resources/js/app_main.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

//Bootstrap 4 multi dropdown navbar
$(document).ready(function () {
  $('.dropdown-menu a.dropdown-toggle').mouseenter(function (e) {
    var $el = $(this);
    $el.toggleClass('active-dropdown');
    var $parent = $(this).offsetParent(".dropdown-menu");

    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }

    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');
    $(this).parent("li").toggleClass('show');
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
      $('.dropdown-menu .show').removeClass("show");
      $el.removeClass('active-dropdown');
    });

    if (!$parent.parent().hasClass('navbar-nav')) {
      $el.next().css({
        "top": $el[0].offsetTop,
        "left": $parent.outerWidth() - 4
      });
    }

    return false;
  });
  responsiveFooter();

  window.onresize = function () {
    responsiveFooter();
  };

  function responsiveFooter() {
    if ($(window).height() >= $('body').height() + $('.footerapp').height()) {
      $('.footerapp').addClass('footer-fixed');
    } else {
      $('.footerapp').removeClass('footer-fixed');
    }
  } //qnt prod card


  $('.btn-number').click(function (e) {
    e.preventDefault();
    fieldName = $(this).attr('data-field');
    type = $(this).attr('data-type');
    var input = $("input[name='" + fieldName + "']");
    var currentVal = parseInt(input.val());

    if (!isNaN(currentVal)) {
      if (type == 'minus') {
        if (currentVal > input.attr('min')) {
          input.val(currentVal - 1).change();
        }

        if (parseInt(input.val()) == input.attr('min')) {
          $(this).attr('disabled', true);
        }
      } else if (type == 'plus') {
        if (currentVal < input.attr('max')) {
          input.val(currentVal + 1).change();
        }

        if (parseInt(input.val()) == input.attr('max')) {
          $(this).attr('disabled', true);
        }
      }

      changePrice(input.val(), fieldName);
    } else {
      input.val(0);
    }
  });
  $('.input-number').focusin(function () {
    $(this).data('oldValue', $(this).val());
  });
  $('.input-number').change(function () {
    minValue = parseInt($(this).attr('min'));
    maxValue = parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    name = $(this).attr('name');

    if (valueCurrent >= minValue) {
      $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled');
    } else {
      alert('Sorry, the minimum value was reached');
      $(this).val($(this).data('oldValue'));
    }

    if (valueCurrent <= maxValue) {
      $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled');
    } else {
      alert('Sorry, the maximum value was reached');
      $(this).val($(this).data('oldValue'));
    }

    changePrice(valueCurrent, name);
  });
  $(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || // Allow: Ctrl+A
    e.keyCode == 65 && e.ctrlKey === true || // Allow: home, end, left, right
    e.keyCode >= 35 && e.keyCode <= 39) {
      // let it happen, don't do anything
      return;
    } // Ensure that it is a number and stop the keypress


    if ((e.shiftKey || e.keyCode < 48 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
      e.preventDefault();
    }
  });

  function changePrice(value, name) {
    var input = $("input[id='" + name + "']");
    var output = $("span[id='" + name + "']");
    var price = parseFloat(input.val()),
        newPrice;
    newPrice = price * value;
    $(output, this).text(function () {
      return newPrice.toFixed(2);
    });
  }
}); //Search

var route = window.location.origin + '/autocomplete';
$('#search').typeahead({
  source: function source(term, process) {
    return $.get(route, {
      term: term
    }, function (data) {
      return process(data);
    });
  },
  minLength: 1,
  items: 5,
  delay: 400,
  autoSelect: false
}); // Confirm Delete Alert

$('.delete').click(function () {
  var res = confirm('Are u really want delete this item?');

  if (!res) {
    return false;
  }
}); // $.ajax({
//     type: 'GET',
//     url: '/category/filter',
//     data: {
//         date: date
//     },
//     success: function(data){
//         console.log(data.data);
//     },
//     error: function(xhr){
//         console.log(xhr.responseText);
//     }
// });

/***/ }),

/***/ 2:
/*!****************************************!*\
  !*** multi ./resources/js/app_main.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! D:\OSPanel\domains\pogchamp.h1n.ru\resources\js\app_main.js */"./resources/js/app_main.js");


/***/ })

/******/ });