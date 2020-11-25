import { applyMiddleware, combineReducers, compose, createStore } from 'redux';
import { composeWithDevTools } from 'redux-devtools-extension';
import { createLogger } from 'redux-logger';
import thunk from 'redux-thunk';
import { ActionType } from '@/enums';

const actionTypeEnumToString = (action: any): any => typeof action.type === 'number' && ActionType[action.type] ? ({
    type: ActionType[action.type],
    payload: action.payload,
  }) : action;

export default () => {
    const logger = createLogger({ actionTransformer: actionTypeEnumToString });
    const composeEnhancers = composeWithDevTools({ actionSanitizer: actionTypeEnumToString });
    const middlewares = [thunk, logger];

    const enhancers = process.env.NODE_ENV === 'production' ?
        compose(applyMiddleware(...middlewares)) :
        composeEnhancers(applyMiddleware(thunk));

    return createStore(combineReducers({
        
    }), enhancers);
}