import {useSelector} from "react-redux";
import {createSelector} from 'reselect';

import selectAlert from "./selectAlert";

export default () => useSelector(createSelector(
    selectAlert,
    (state) => state.entries
));
