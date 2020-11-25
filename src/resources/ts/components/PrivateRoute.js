"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importDefault(require("react"));
var react_router_dom_1 = require("react-router-dom");
var enums_1 = require("@/enums");
exports.default = (function (_a) {
    var path = _a.path, exact = _a.exact, component = _a.component;
    // const auth = useStore('auth');
    // const logged = useObserver(() => auth.logged);
    // const logged = auth.logged;
    var logged = true;
    return logged ? (react_1.default.createElement(react_router_dom_1.Route, { path: path, exact: exact, component: component })) : (react_1.default.createElement(react_router_dom_1.Redirect, { to: { pathname: enums_1.Path.SIGN_IN, state: { from: path } } }));
});
