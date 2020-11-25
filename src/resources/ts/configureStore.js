"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var redux_1 = require("redux");
var redux_devtools_extension_1 = require("redux-devtools-extension");
var redux_logger_1 = require("redux-logger");
var redux_thunk_1 = __importDefault(require("redux-thunk"));
var enums_1 = require("@/enums");
var actionTypeEnumToString = function (action) { return typeof action.type === 'number' && enums_1.ActionType[action.type] ? ({
    type: enums_1.ActionType[action.type],
    payload: action.payload,
}) : action; };
exports.default = (function () {
    var logger = redux_logger_1.createLogger({ actionTransformer: actionTypeEnumToString });
    var composeEnhancers = redux_devtools_extension_1.composeWithDevTools({ actionSanitizer: actionTypeEnumToString });
    var middlewares = [redux_thunk_1.default, logger];
    var enhancers = process.env.NODE_ENV === 'production' ?
        redux_1.compose(redux_1.applyMiddleware.apply(void 0, middlewares)) :
        composeEnhancers(redux_1.applyMiddleware(redux_thunk_1.default));
    return redux_1.createStore(redux_1.combineReducers({}), enhancers);
});
