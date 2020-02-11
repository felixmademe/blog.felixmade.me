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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/analytics.js":
/*!***********************************!*\
  !*** ./resources/js/analytics.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.dataLayer = window.dataLayer || [];

function gtag() {
  dataLayer.push(arguments);
}

gtag('js', new Date());
gtag('config', 'UA-135535698-6');

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! ./analytics */ "./resources/js/analytics.js");

__webpack_require__(/*! ./cookieconsent */ "./resources/js/cookieconsent.js");

__webpack_require__(/*! ./editor */ "./resources/js/editor.js");

__webpack_require__(/*! ./mobile/navigation */ "./resources/js/mobile/navigation.js");

/***/ }),

/***/ "./resources/js/cookieconsent.js":
/*!***************************************!*\
  !*** ./resources/js/cookieconsent.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#1a1a1a",
      "text": "#ffffff"
    },
    "button": {
      "background": "#FF4D4D",
      "text": "#ffffff"
    }
  },
  "content": {
    "message": "Den här webbplatsen använder cookies för att du ska få den bästa upplevelsen på vår hemsida.",
    "dismiss": "Uppfattat!",
    "link": "Läs mer här"
  }
});

/***/ }),

/***/ "./resources/js/editor.js":
/*!********************************!*\
  !*** ./resources/js/editor.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var _tinymce$init;

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

tinymce.init((_tinymce$init = {
  selector: 'textarea.textarea',
  plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
  imagetools_cors_hosts: ['picsum.photos'],
  menubar: 'file edit view insert format tools table help',
  toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
  toolbar_sticky: true,
  autosave_ask_before_unload: true,
  autosave_interval: "30s",
  autosave_prefix: "{path}{query}-{id}-",
  autosave_restore_when_empty: false,
  autosave_retention: "2m",
  image_advtab: true,
  content_css: ['//fonts.googleapis.com/css?family=Lato:300,300i,400,400i', '//www.tiny.cloud/css/codepen.min.css'],
  link_list: [{
    title: 'My page 1',
    value: 'http://www.tinymce.com'
  }, {
    title: 'My page 2',
    value: 'http://www.moxiecode.com'
  }],
  image_list: [{
    title: 'My page 1',
    value: 'http://www.tinymce.com'
  }, {
    title: 'My page 2',
    value: 'http://www.moxiecode.com'
  }],
  image_class_list: [{
    title: 'None',
    value: ''
  }, {
    title: 'Some class',
    value: 'class-name'
  }],
  importcss_append: true,
  height: 400,
  file_picker_callback: function file_picker_callback(callback, value, meta) {
    /* Provide file and text for the link dialog */
    if (meta.filetype === 'file') {
      callback('https://www.google.com/logos/google.jpg', {
        text: 'My text'
      });
    }
    /* Provide image and alt text for the image dialog */


    if (meta.filetype === 'image') {
      callback('https://www.google.com/logos/google.jpg', {
        alt: 'My alt text'
      });
    }
    /* Provide alternative source and posted for the media dialog */


    if (meta.filetype === 'media') {
      callback('movie.mp4', {
        source2: 'alt.ogg',
        poster: 'https://www.google.com/logos/google.jpg'
      });
    }
  },
  templates: [{
    title: 'New Table',
    description: 'creates a new table',
    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
  }, {
    title: 'Starting my story',
    description: 'A cure for writers block',
    content: 'Once upon a time...'
  }, {
    title: 'New list with dates',
    description: 'New List with dates',
    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
  }],
  template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
  template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]'
}, _defineProperty(_tinymce$init, "height", 600), _defineProperty(_tinymce$init, "image_caption", true), _defineProperty(_tinymce$init, "quickbars_selection_toolbar", 'bold italic | quicklink h2 h3 blockquote quickimage quicktable'), _defineProperty(_tinymce$init, "noneditable_noneditable_class", "mceNonEditable"), _defineProperty(_tinymce$init, "toolbar_drawer", 'sliding'), _defineProperty(_tinymce$init, "contextmenu", "link image imagetools table"), _tinymce$init));

/***/ }),

/***/ "./resources/js/mobile/navigation.js":
/*!*******************************************!*\
  !*** ./resources/js/mobile/navigation.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var nav = document.getElementById('navigation-menu');
var menu = document.getElementById('menu');
nav.addEventListener('click', function (e) {
  menu.classList.toggle('active');
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Users/felixwetell/Documents/GitHub/blog.wetell.se/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Users/felixwetell/Documents/GitHub/blog.wetell.se/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });