import {ActionType} from "@/enums";

export interface AccountState {
    token: string,
}

const initialState: AccountState = {
    token: '',
}

export default (state = initialState, action: any): AccountState => {
    return state;
}
