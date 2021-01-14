import uuid from 'uuid-random';

import {ActionType} from "@/enums";
import {BaseAction, RequestAction, ResponseAction} from "@/actions";

export interface AppState {
    initialize: boolean,
    pending: boolean,
    id: string,
    payload: object | undefined,
    failed: boolean,
}

const initialState: AppState = {
    initialize: false,
    pending: false,
    id: '',
    payload: undefined,
    failed: false
}

export default (state = initialState, action: BaseAction | RequestAction | ResponseAction): AppState => {
    const {type} = action;
    const stringType = ActionType[type];

    if (type === ActionType.INITIALIZE) {
        const id = state.id || uuid();
        return {...state, id, pending: false, initialize: true, payload: undefined, failed: false};
    }

    if (type === ActionType.UUID_CREATE) {
        return {...state, id: uuid()};
    }

    if (type === ActionType.UUID_REMOVE) {
        return {...state, id: ''};
    }

    if (stringType && stringType.endsWith('_REQUEST')) {
        return {...state, pending: true, failed: false, payload: undefined};
    }

    if (stringType && stringType.endsWith('_SUCCESS')) {
        const {payload} = <ResponseAction>action;
        return {...state, pending: false, failed: false, payload};
    }

    if (stringType && stringType.endsWith('_FAILURE')) {
        const {payload} = <ResponseAction>action;
        return {...state, pending: false, failed: true, payload};
    }

    return state;
}
