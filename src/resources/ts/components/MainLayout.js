"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importDefault(require("react"));
var react_2 = require("@chakra-ui/react");
var components_1 = require("@/components");
exports.default = (function (_a) {
    var children = _a.children;
    return (react_1.default.createElement(react_2.Box, { minHeight: "100vh", backgroundColor: "gray.300" },
        react_1.default.createElement(components_1.NavBar, null),
        children));
});
