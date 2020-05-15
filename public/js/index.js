(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/index"],{

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/ts/App.tsx":
/*!******************************!*\
  !*** ./resources/ts/App.tsx ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importDefault(__webpack_require__(/*! react */ "./node_modules/react/index.js"));
var models_1 = __webpack_require__(/*! @/models */ "./resources/ts/models/index.ts");
var components_1 = __webpack_require__(/*! @/components */ "./resources/ts/components/index.ts");
var App = function () {
    return (react_1.default.createElement(models_1.Provider, { value: models_1.rootStore },
        react_1.default.createElement("div", { className: 'container mx-auto py-2' },
            react_1.default.createElement(components_1.Footer, null))));
};
exports.default = App;


/***/ }),

/***/ "./resources/ts/components/Footer.tsx":
/*!********************************************!*\
  !*** ./resources/ts/components/Footer.tsx ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importDefault(__webpack_require__(/*! react */ "./node_modules/react/index.js"));
var Footer = function () {
    return (react_1.default.createElement("footer", null,
        react_1.default.createElement("hr", null),
        react_1.default.createElement("p", { className: 'p-2 text-right' },
            react_1.default.createElement("a", { href: 'http://github.com/monoless/express-royale', target: '_blank' }, "Express Royale by monoless"),
            react_1.default.createElement("br", null),
            react_1.default.createElement("span", null, "Special Thanks to \uC6D0\uBCF8 \uD55C\uAE00\uD654 \uB8E8\uB9AC\uC544"))));
};
exports.default = Footer;


/***/ }),

/***/ "./resources/ts/components/index.ts":
/*!******************************************!*\
  !*** ./resources/ts/components/index.ts ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
var Footer_1 = __webpack_require__(/*! ./Footer */ "./resources/ts/components/Footer.tsx");
Object.defineProperty(exports, "Footer", { enumerable: true, get: function () { return Footer_1.default; } });


/***/ }),

/***/ "./resources/ts/index.tsx":
/*!********************************!*\
  !*** ./resources/ts/index.tsx ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importDefault(__webpack_require__(/*! react */ "./node_modules/react/index.js"));
var react_dom_1 = __importDefault(__webpack_require__(/*! react-dom */ "./node_modules/react-dom/index.js"));
var App_1 = __importDefault(__webpack_require__(/*! @/App */ "./resources/ts/App.tsx"));
react_dom_1.default.render(react_1.default.createElement(App_1.default, null), document.getElementById('app'));


/***/ }),

/***/ "./resources/ts/models/index.ts":
/*!**************************************!*\
  !*** ./resources/ts/models/index.ts ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
exports.useMobxStateTree = exports.Provider = exports.rootStore = void 0;
var react_1 = __webpack_require__(/*! react */ "./node_modules/react/index.js");
var mobx_state_tree_1 = __webpack_require__(/*! mobx-state-tree */ "./node_modules/mobx-state-tree/dist/mobx-state-tree.module.js");
var RootModel = mobx_state_tree_1.types.model({});
exports.rootStore = RootModel.create({});
var RootStoreContext = react_1.createContext(null);
exports.Provider = RootStoreContext.Provider;
function useMobxStateTree() {
    var store = react_1.useContext(RootStoreContext);
    if (null === store) {
        throw new Error("Store cannot be null, please add a context provider");
    }
    return store;
}
exports.useMobxStateTree = useMobxStateTree;
mobx_state_tree_1.onSnapshot(exports.rootStore, function (snapshot) { return console.log('Snapshot: ', snapshot); });


/***/ }),

/***/ 0:
/*!****************************************************************!*\
  !*** multi ./resources/ts/index.tsx ./resources/sass/app.scss ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /mnt/d/Documents/toy-projects/express-royale/resources/ts/index.tsx */"./resources/ts/index.tsx");
module.exports = __webpack_require__(/*! /mnt/d/Documents/toy-projects/express-royale/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);
//# sourceMappingURL=index.js.map