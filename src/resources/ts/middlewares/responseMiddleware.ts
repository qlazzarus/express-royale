import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

import {BaseAction, ResponseAction} from "@/actions";
import {ActionType} from "@/enums";

/*
const outerRequests = [
    ActionType[ActionType.SIGNIN_FAILURE],
    ActionType[ActionType.SIGNUP_FAILURE]
];
*/

export default (): Middleware<{}, any, Dispatch<BaseAction | ResponseAction>> =>
    ({getState}: MiddlewareAPI<Dispatch<BaseAction | ResponseAction>, any>) =>
        (next: Dispatch<BaseAction | ResponseAction>) =>
            (action: BaseAction | ResponseAction) => {
                const {type} = action;
                const stringType = ActionType[type];

                // TODO signin_success / signup_success

                /*
                if (!stringType || !stringType.endsWith('_FAILURE') || outerRequests.includes(stringType)) {
                    return next(action);
                }
                */

                /*
                const {account} = getState();
                const {token} = account;
                */

                // TODO 401 error -> auto logout

                return next(action);
            }
