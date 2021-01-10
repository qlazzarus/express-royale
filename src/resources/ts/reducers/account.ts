import {ActionType} from "@/enums";

export interface AccountState {
    token: string
}

const initialState: AccountState = {
    token: '',
}

export default (state = initialState, action: any): AccountState => {
    if (action.type === ActionType.SIGNIN_REQUEST) {
        console.log('account-reducer:', action);
        return state;
    }

    return state;
}

/*
export default (state = initialState, action: BaseAction): AppState => {
    if (action.type === ActionType.INITIALIZE) {
        const id = state.id || uuid();
        return {...state, id, loading: true};
    }

    if (action.type === ActionType.UUID_CREATE) {
        return {...state, id: uuid()};
    }

    if (action.type === ActionType.UUID_REMOVE) {
        return {...state, id: ''};
    }

    return state;
}
 */
