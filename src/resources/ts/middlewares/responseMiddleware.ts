import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

import {BaseAction, ResponseAction} from "@/actions";
import {accountInfo} from "@/actions/account";
import {ActionType} from "@/enums";

/*
const outerRequests = [
    ActionType[ActionType.SIGNIN_FAILURE],
    ActionType[ActionType.SIGNUP_FAILURE]
];
*/

export default (): Middleware<{}, any, Dispatch<BaseAction | ResponseAction>> =>
    ({dispatch}: MiddlewareAPI<Dispatch<BaseAction | ResponseAction>, any>) =>
        (next: Dispatch<BaseAction | ResponseAction>) =>
            (action: BaseAction | ResponseAction) => {
                const {type} = action;
                const stringType = ActionType[type];

                if (!stringType || (!stringType.endsWith('_FAILURE') && !stringType.endsWith('_SUCCESS'))) {
                    return next(action);
                }

                if (type === ActionType.SIGNIN_SUCCESS || type === ActionType.SIGNUP_SUCCESS) {
                    const result = next(action);
                    dispatch(accountInfo());
                    return result;
                }

                // TODO 401 permission denied
                /*
                if (!stringType || !stringType.endsWith('_FAILURE') || outerRequests.includes(stringType)) {
                    return next(action);
                }
                */

                return next(action);
            }
