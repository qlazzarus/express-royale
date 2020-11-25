"use strict";
var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    Object.defineProperty(o, k2, { enumerable: true, get: function() { return m[k]; } });
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __setModuleDefault = (this && this.__setModuleDefault) || (Object.create ? (function(o, v) {
    Object.defineProperty(o, "default", { enumerable: true, value: v });
}) : function(o, v) {
    o["default"] = v;
});
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (k !== "default" && Object.prototype.hasOwnProperty.call(mod, k)) __createBinding(result, mod, k);
    __setModuleDefault(result, mod);
    return result;
};
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importStar(require("react"));
var react_router_dom_1 = require("react-router-dom");
var react_redux_1 = require("react-redux");
var react_2 = require("@chakra-ui/react");
require("@/i18n");
var components_1 = require("@/components");
var configureStore_1 = __importDefault(require("@/configureStore"));
var Router_1 = __importDefault(require("@/Router"));
exports.default = (function () {
    return (react_1.default.createElement(react_1.StrictMode, null,
        react_1.default.createElement(react_redux_1.Provider, { store: configureStore_1.default() },
            react_1.default.createElement(react_2.ChakraProvider, null,
                react_1.default.createElement(react_router_dom_1.BrowserRouter, null,
                    react_1.default.createElement(components_1.MainLayout, null,
                        react_1.default.createElement(Router_1.default, null)))))));
});
