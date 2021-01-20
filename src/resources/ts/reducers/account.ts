import {AxiosResponse} from "axios";
import {ActionType} from "@/enums";
import {BaseAction, RequestAction, ResponseAction} from "@/actions";

export interface AccountState {
    info: AccountInfoSuccessResponse|undefined,
    token: string,
}

const initialState: AccountState = {
    info: undefined,
    token: '',
}

export default (state = initialState, action: BaseAction | RequestAction | ResponseAction): AccountState => {
    const {type} = action;

    if (type === ActionType.SIGNIN_SUCCESS || type === ActionType.SIGNUP_SUCCESS) {
        const {payload} = <ResponseAction>action;
        const {data} = <AxiosResponse<TokenSuccessResponse>>payload;
        const {token} = data;
        return {...state, token};
    }

    if (type === ActionType.ACCOUNT_INFO_SUCCESS) {
        const {payload} = <ResponseAction>action;
        const {data} = <AxiosResponse<AccountInfoSuccessResponse>>payload;
        return {...state, info: data};
    }

    if (type === ActionType.SIGNOUT) {
        return {...state, info: undefined, token: ''};
    }

    return state;
}
