// https://gist.github.com/duranmla/37e2484692b904b45f045b00f07b73e1

import {AxiosInstance} from "axios";
import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

import {BaseAction, RequestAction} from "@/actions";
import {ActionType} from "@/enums";

/*
const skipRequests = [
    ActionType[ActionType.SIGNIN_REQUEST],
    ActionType[ActionType.SIGNUP_REQUEST],
    ActionType[ActionType.REFRESH_TOKEN_REQUEST]
];
*/

export default (client: AxiosInstance): Middleware<{}, any, Dispatch<BaseAction | RequestAction>> =>
    ({dispatch, getState}: MiddlewareAPI<Dispatch<BaseAction | RequestAction>, any>) =>
        (next: Dispatch<BaseAction | RequestAction>) =>
            (action: BaseAction | RequestAction) => {
                const {type} = action;
                const stringType = ActionType[type];

                if (!stringType || !stringType.endsWith('_REQUEST') || !('promise' in action)) {
                    return next(action);
                }

                const successType = ActionType[stringType.replace('_REQUEST', '_SUCCESS') as keyof typeof ActionType];
                const failureType = ActionType[stringType.replace('_REQUEST', '_FAILURE') as keyof typeof ActionType];

                const {promise, ...rest} = <RequestAction>action;
                next({...rest, type});

                const actionPromise = promise(client);
                actionPromise.then(
                    payload => {
                        next({ ...rest, payload, type: successType });
                    },
                    error => {
                        next({ ...rest, payload: error.response, type: failureType });
                    }
                ).catch(error => {
                    console.error('MIDDLEWARE ERROR: ', error);
                    next({...rest, payload: error.response, type: failureType });
                });

                return actionPromise;
            }
