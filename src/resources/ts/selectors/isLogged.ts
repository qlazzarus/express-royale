import {useSelector} from "react-redux";
import {createSelector} from 'reselect';

import selectAccount from "./selectAccount";

export default () => useSelector(createSelector(
    selectAccount,
    (state) => Boolean(state.token && state.info)
));
