import {AxiosInstance} from "axios";
import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

import {BaseAction, RequestAction} from "@/actions";
import {ActionType} from "@/enums";

export default (client: AxiosInstance): Middleware<{}, any, Dispatch<BaseAction | RequestAction>> =>
    ({getState}: MiddlewareAPI<Dispatch<BaseAction | RequestAction>, any>) =>
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

                const {account, app} = getState();
                // eslint-disable-next-line no-param-reassign
                client.defaults.headers.common['Request-Id'] = app.id || '';
                // eslint-disable-next-line no-param-reassign
                client.defaults.headers.common.Authorization = account.token && `Bearer ${account.token}` || '';

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
