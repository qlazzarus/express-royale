"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var resolvers_1 = require("@hookform/resolvers");
var enums_1 = require("@/enums");
var helpers_1 = require("@/helpers");
var sign_up_json_1 = __importDefault(require("@/validations/sign_up.json"));
var sign_in_json_1 = __importDefault(require("@/validations/sign_in.json"));
var getValidator = function (validator) {
    switch (validator) {
        case enums_1.Validator.SIGN_UP:
            return sign_up_json_1.default;
        case enums_1.Validator.SIGN_IN:
            return sign_in_json_1.default;
        default:
            throw new Error('not found validator schema');
    }
};
exports.default = (function (validator) { return resolvers_1.yupResolver(helpers_1.validationGenerator(getValidator(validator))); });
