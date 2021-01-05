// https://stackoverflow.com/questions/61485585/how-to-create-middleware-for-refresh-token-in-reactjs-with-axios-and-redux
// https://www.jaygould.co.uk/2018-10-04-redux-resend-request/
// import axios from 'axios';
import {ActionType} from '@/enums';
import {AnyAction, Dispatch, Middleware, MiddlewareAPI} from 'redux';
/*
import { camelize } from '@/utils';

const instance = axios.create({
    baseURL: '/api'
});
*/

const requestMiddleware: Middleware<{}, any, Dispatch<AnyAction>> =
    (store: MiddlewareAPI<Dispatch<AnyAction>, any>) =>
        (next: Dispatch<AnyAction>) =>
            (action: AnyAction) => {
                const type = ActionType[action.type];
                if (!type || !type.endsWith('_REQUEST')) {
                    return next(action);
                }

                // const method = type.replace('_REQUEST', '');

                // eslint-disable-next-line no-console
                console.log('middleware triggered: ', type);

                return next(action);
            }

export default requestMiddleware;
