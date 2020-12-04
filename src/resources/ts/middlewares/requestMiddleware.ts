// https://stackoverflow.com/questions/61485585/how-to-create-middleware-for-refresh-token-in-reactjs-with-axios-and-redux
// import axios from 'axios';
import { ActionType } from '@/enums';
import { AnyAction, Dispatch, Middleware } from 'redux';
/*
import { camelize } from '@/utils';

const instance = axios.create({
    baseURL: '/api'
});
*/

const requestMiddleware: Middleware<{}, any, Dispatch<AnyAction>> = store => next => action => {
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