"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var react_1 = __importDefault(require("react"));
var react_router_dom_1 = require("react-router-dom");
// import { PrivateRoute } from '@/components';
var enums_1 = require("@/enums");
var pages_1 = require("@/pages");
exports.default = (function () {
    return (react_1.default.createElement(react_router_dom_1.Switch, null,
        react_1.default.createElement(react_router_dom_1.Route, { path: enums_1.Path.INDEX, exact: true, component: pages_1.Main })));
    /*
  return (
    <Switch>
      <Route path={Path.SIGN_IN} exact component={SignIn} />
      <Route path={Path.SIGN_UP} exact component={SignUp} />
      <PrivateRoute path={Path.GAME} exact component={Main} />
      <PrivateRoute path={Path.TRANSFER} exact component={Main} />
      <PrivateRoute path={Path.ACCOUNT} exact component={Main} />
      <Route path={Path.RULE} exact component={Main} />
      <Route path={Path.RULE} exact component={Main} />
      <Route path={Path.NEWS} exact component={Main} />
      <Route path={Path.WINNER} exact component={Main} />
      <NotFound />
    </Switch>
  );
  */
});
