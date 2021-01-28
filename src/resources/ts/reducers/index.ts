import {combineReducers} from "redux";
import account from './account';
import alert from './alert';
import app from './app';

export const rootReducer = combineReducers({
    account,
    alert,
    app
});

export type {AccountState} from './account';
export type {AlertState} from './alert';
export type {AppState} from './app';
export type RootState = ReturnType<typeof rootReducer>;
