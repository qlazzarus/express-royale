// https://gist.github.com/duranmla/37e2484692b904b45f045b00f07b73e1

import {AxiosInstance} from "axios";
import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

import {BaseAction, RequestAction} from "@/actions";
import {ActionType} from "@/enums";

type CombineAction = BaseAction | RequestAction;

const skipRequests = [
    ActionType[ActionType.SIGNIN_REQUEST],
    ActionType[ActionType.SIGNUP_REQUEST],
    ActionType[ActionType.REFRESH_TOKEN_REQUEST]
];

export default (client: AxiosInstance): Middleware<{}, any, Dispatch<CombineAction>> =>
    ({dispatch, getState}: MiddlewareAPI<Dispatch<CombineAction>, any>) =>
        (next: Dispatch<CombineAction>) =>
            (action: CombineAction) => {
                const {type} = action;
                const stringType = ActionType[type];

                if (!stringType || skipRequests.includes(stringType) || !stringType.endsWith('_REQUEST')) {
                    return next(action);
                }

                const {account} = getState();
                console.log(account);
                /*
                or 401 <- error
    // NOTE: in this case the methods implemented above works, nevertheless, some of them need to be public
    api.requestRefreshToken(session.refresh_token)
      .then((response) => {
        api.onRequestRefreshTokenSucess(response, dispatch)
        // NOTE: for this approach we can also drop the `enqueueRequests` related code above
        // 3. AFTER 2 has been resolved then we release the calls
        next(action)
      })
      .catch((e) => api.onRequestRefreshTokenFailure(e, dispatch))
                 */

                return next(action);
            }
