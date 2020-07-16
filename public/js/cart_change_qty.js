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
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/cart_change_qty.js":
/*!*****************************************!*\
  !*** ./resources/js/cart_change_qty.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

//Change product qnt
// $(document).ready(function () {
$('.resp-qnt').on('click', '.btn-number-cart', function (e) {
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
$('.resp-qnt').on('focusin', '.input-number-cart', function () {
  $(this).data('oldValue', $(this).val());
});
$('.resp-qnt').on('change', '.input-number-cart', function () {
  minValue = parseInt($(this).attr('min'));
  maxValue = parseInt($(this).attr('max'));
  valueCurrent = parseInt($(this).val());
  name = $(this).attr('name');

  if (valueCurrent >= minValue) {
    $(".btn-number-cart[data-type='minus'][data-field='" + name + "']").removeAttr('disabled');
  } else {
    alert('Sorry, the minimum value was reached');
    $(this).val($(this).data('oldValue'));
  }

  if (valueCurrent <= maxValue) {
    $(".btn-number-cart[data-type='plus'][data-field='" + name + "']").removeAttr('disabled');
  } else {
    alert('Sorry, the maximum value was reached');
    $(this).val($(this).data('oldValue'));
  }

  changePrice(valueCurrent, name);
});
$('.resp-qnt').on('keydown', '.input-number-cart', function (e) {
  // Allow: backspace, delete, tab, escape, enter and .
  if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 || // Allow: Ctrl+A
  e.keyCode == 65 && e.ctrlKey === true || // Allow: home, end, left, right
  e.keyCode >= 35 && e.keyCode <= 39) {
    // let it happen, don't do anything
    return;
  } // Ensure that it is a number and stop the keypress


  if ((e.shiftKey || e.keyCode < 49 || e.keyCode > 57) && (e.keyCode < 96 || e.keyCode > 105)) {
    e.preventDefault();
  }
});

function changePrice(value, name) {
  if (value > 0) {
    var order_id = document.getElementById('order_id').value;
    var product_id = document.getElementById('prod_' + name).value;
    document.getElementById('table-cart').style.visibility = "hidden";
    $('#loading-cart').css('display', 'block');
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: '/cart/ajax-change-prod-qty',
      data: {
        product_id: product_id,
        order_id: order_id,
        qty: value
      },
      type: 'POST',
      success: function success(data) {
        $('#loading-cart').css('display', 'none');
        $("#table-cart").load(location.href + " #table-cart>*", "");
        document.getElementById('table-cart').style.visibility = "visible";
      },
      error: function error(xhr, status, _error) {
        alert(xhr.responeText);
        $('#loading-cart').css('display', 'none');
      }
    });
  }
} // });

/***/ }),

/***/ 9:
/*!***********************************************!*\
  !*** multi ./resources/js/cart_change_qty.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! d:\OSPanel\domains\pogchamp.h1n.ru\resources\js\cart_change_qty.js */"./resources/js/cart_change_qty.js");


/***/ })

/******/ });