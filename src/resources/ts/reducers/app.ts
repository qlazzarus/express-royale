import {AxiosResponse} from "axios";
import uuid from 'uuid-random';

import {ActionType} from "@/enums";
import {BaseAction, RequestAction, ResponseAction} from "@/actions";

export interface AppState {
    failed: boolean,
    id: string,
    initialize: boolean,
    payload: AxiosResponse | undefined,
    pending: boolean,
}

const initialState: AppState = {
    failed: false,
    id: '',
    initialize: false,
    payload: undefined,
    pending: false
}

export default (state = initialState, action: BaseAction | RequestAction | ResponseAction): AppState => {
    const {type} = action;
    const stringType = ActionType[type];

    if (type === ActionType.INITIALIZE) {
        const id = state.id || uuid();
        return {...state, failed: false, id, payload: undefined, pending: false, initialize: true};
    }

    if (type === ActionType.UUID_CREATE) {
        return {...state, id: uuid()};
    }

    if (type === ActionType.UUID_REMOVE) {
        return {...state, id: ''};
    }

    if (type === ActionType.PAYLOAD_RECYCLE) {
        return {...state, failed: false, payload: undefined, pending: false};
    }

    if (stringType && stringType.endsWith('_REQUEST')) {
        return {...state, failed: false, payload: undefined, pending: true};
    }

    if (stringType && stringType.endsWith('_SUCCESS')) {
        const {payload} = <ResponseAction>action;
        return {...state, failed: false, payload, pending: false};
    }

    if (stringType && stringType.endsWith('_FAILURE')) {
        const {payload} = <ResponseAction>action;
        return {...state, failed: true, payload, pending: false};
    }

    return state;
}
