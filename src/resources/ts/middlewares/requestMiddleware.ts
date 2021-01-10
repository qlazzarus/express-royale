// https://gist.github.com/duranmla/37e2484692b904b45f045b00f07b73e1

import {AxiosInstance} from "axios";
import {BaseAction} from "@/actions";
import {Dispatch, Middleware, MiddlewareAPI} from 'redux';

export default (client: AxiosInstance): Middleware<{}, any, Dispatch<BaseAction>> =>
    ({dispatch, getState}: MiddlewareAPI<Dispatch<BaseAction>, any>) =>
        (next: Dispatch<BaseAction>) =>
            (action: BaseAction) => {
                /*
                const type = ActionType[action.type];
                if (!type || !type.endsWith('_REQUEST')) {
                    console.log('middleware triggered: ', type);
                    console.dir(action);
                    return next(action);
                }

                // const method = type.replace('_REQUEST', '');

                // eslint-disable-next-line no-console
                console.log('middleware triggered: ', type);
                */

                return next(action);
            }
