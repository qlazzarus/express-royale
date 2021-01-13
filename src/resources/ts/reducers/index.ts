import {combineReducers} from "redux";
import account from './account';
import app from './app';

export const rootReducer = combineReducers({
    account,
    app
});

export type {AccountState} from './account';
export type {AppState} from './app';
export type RootState = ReturnType<typeof rootReducer>;
