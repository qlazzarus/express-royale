import {useSelector} from "react-redux";
import {createSelector} from 'reselect';

import selectApp from "./selectApp";

export default () => useSelector(createSelector(
    selectApp,
    (state) => {
        const {failed, payload, pending, requested} = state;

        if (!payload || pending) {
            return null;
        }

        return {
            failed,
            payload,
            requestName: requested
        }
    }
));
