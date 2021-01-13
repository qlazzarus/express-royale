import {ActionType} from "@/enums";

export interface AccountState {
    token: string
}

const initialState: AccountState = {
    token: '',
}

export default (state = initialState, action: any): AccountState => {
    if (action.type === ActionType.SIGNIN_REQUEST) {
        console.log('SIGNIN_REQUEST');
    }

    if (action.type === ActionType.SIGNIN_SUCCESS) {
        console.log('SIGNIN_SUCCESS', action);
    }

    if (action.type === ActionType.SIGNIN_FAILURE) {
        console.log('SIGNIN_FAILURE', action);
    }

    return state;
}
