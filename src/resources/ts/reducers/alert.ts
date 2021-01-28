// https://medium.com/swlh/few-ways-to-update-a-state-array-in-redux-reducer-f2621ae8061

import {ActionType} from "@/enums";
import {BaseAction, RequestAction, ResponseAction} from "@/actions";

export interface AlertState {
    entries: ({
        status: 'error' | 'success' | 'warning' | 'info' | null,
        message: string,
        expiredIn: number
    })[]
}

const initialState: AlertState = {
    entries: []
}

export default (state = initialState, action: BaseAction | RequestAction | ResponseAction): AlertState => {
    const {type} = action;
    const stringType = ActionType[type];

    return state;
}
