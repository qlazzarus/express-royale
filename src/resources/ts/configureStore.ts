import {AxiosInstance} from "axios";
import {applyMiddleware, compose, createStore} from 'redux';
import {composeWithDevTools} from 'redux-devtools-extension';
import {createLogger} from 'redux-logger';
import {persistStore, persistReducer} from 'redux-persist';
import thunk from 'redux-thunk';

import storage from 'redux-persist/lib/storage';
import {ActionType} from '@/enums';
import {requestMiddleware, responseMiddleware} from '@/middlewares';
import {rootReducer} from '@/reducers';

const actionTypeEnumToString = (action: any): any => typeof action.type === 'number' && ActionType[action.type] ? ({
    type: ActionType[action.type],
    payload: action.payload,
}) : action;

const persistConfig = {
    key: 'root',
    storage,
};

export default (client: AxiosInstance) => {
    const logger = createLogger({actionTransformer: actionTypeEnumToString});
    const composeEnhancers = composeWithDevTools({actionSanitizer: actionTypeEnumToString});
    const enhancers = process.env.NODE_ENV === 'production' ?
        compose(applyMiddleware(thunk, logger, requestMiddleware(client), responseMiddleware())) :
        composeEnhancers(applyMiddleware(thunk, requestMiddleware(client), responseMiddleware()));

    const persistedReducer = persistReducer(persistConfig, rootReducer);
    const store = createStore(persistedReducer, enhancers);
    const persistor = persistStore(store);

    return {
        store,
        persistor
    }
}
