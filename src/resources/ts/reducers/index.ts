import account, { AccountState } from './account';
import app, { AppState } from './app';

interface RootState {
    account: AccountState,
    app: AppState
}

export {
    account,
    app
};

export type {
    AccountState,
    AppState,
    RootState
};
