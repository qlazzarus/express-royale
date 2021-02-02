import {AxiosResponse} from "axios";
import uuid from 'uuid-random';

import {ActionType} from "@/enums";
import {CombinedAction, ResponseAction} from "@/actions";

export interface AppState {
    drawer: boolean,
    failed: boolean,
    id: string,
    initialize: boolean,
    payload: AxiosResponse | undefined,
    pending: boolean,
    requested: string
}

const initialState: AppState = {
    drawer: false,
    failed: false,
    id: '',
    initialize: false,
    payload: undefined,
    pending: false,
    requested: ''
}

export default (state = initialState, action: CombinedAction): AppState => {
    const {type} = action;
    const stringType = ActionType[type];

    if (type === ActionType.INITIALIZE) {
        const id = state.id || uuid();
        return {
            ...state,
            drawer: false,
            failed: false,
            id,
            initialize: true,
            payload: undefined,
            pending: false,
            requested: ''
        };
    }

    if (type === ActionType.UUID_CREATE) {
        return {...state, id: uuid()};
    }

    if (type === ActionType.UUID_REMOVE) {
        return {...state, id: ''};
    }

    if (type === ActionType.PAYLOAD_RECYCLE) {
        return {...state, failed: false, payload: undefined, pending: false, requested: ''};
    }

    if (type === ActionType.OPEN_DRAWER) {
        return {...state, drawer: true};
    }

    if (type === ActionType.CLOSE_DRAWER) {
        return {...state, drawer: false};
    }

    if (stringType && stringType.endsWith('_REQUEST')) {
        return {
            ...state,
            failed: false,
            payload: undefined,
            pending: true,
            requested: stringType.replace('_REQUEST', '')
        };
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
