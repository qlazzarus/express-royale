import {useSelector} from "react-redux";
import {createSelector} from 'reselect';

import selectApp from "./selectApp";

export default () => useSelector(createSelector(
    selectApp,
    (state) => state.drawer
));
