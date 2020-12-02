// https://stackoverflow.com/questions/61485585/how-to-create-middleware-for-refresh-token-in-reactjs-with-axios-and-redux
import axios from 'axios';
import { AnyAction, Dispatch, Middleware } from 'redux';
import { camelize } from '@/utils';

const instance = axios.create({
    baseURL: '/api'
});

const requestMiddleware: Middleware<{}, any, Dispatch<AnyAction>> = store => next => action => {
    if (!action.type.endsWith('_REQUEST')) {
        next();
        return;
    }

    return next(action);
}

export default requestMiddleware;