"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var i18next_1 = __importDefault(require("i18next"));
var react_i18next_1 = require("react-i18next");
var i18next_browser_languagedetector_1 = __importDefault(require("i18next-browser-languagedetector"));
var enums_1 = require("@/enums");
var languages_1 = require("@/languages");
exports.default = i18next_1.default.use(react_i18next_1.initReactI18next)
    .use(i18next_browser_languagedetector_1.default)
    .init({
    resources: {
        KR: { translation: languages_1.Korean }
    },
    fallbackLng: enums_1.Language.KR,
    debug: true
});
