// https://blog.logrocket.com/data-fetching-in-redux-apps-a-100-correct-approach-4d26e21750fc/
// import axios from 'axios';
import { BaseAction } from "@/actions";
import { ActionType } from '@/enums';
import { AnyAction, Dispatch, Middleware, MiddlewareAPI } from 'redux';
/*
import { camelize } from '@/utils';

const instance = axios.create({
    baseURL: '/api'
});
*/
const requestMiddleware: Middleware<{}, any, Dispatch<BaseAction>> =
    (store: MiddlewareAPI<Dispatch<BaseAction>, any>) =>
        (next: Dispatch<BaseAction>) =>
            (action: AnyAction) => {
                const type = ActionType[action.type];
                if (!type || !type.endsWith('_REQUEST')) {
                    console.log('middleware triggered: ', type);
                    console.dir(action);
                    return next(action);
                }

                // const method = type.replace('_REQUEST', '');

                // eslint-disable-next-line no-console
                console.log('middleware triggered: ', type);

                return next(action);
            }

export default requestMiddleware;
