import uuid from 'uuid-random';

import {ActionType} from "@/enums";
import {BaseAction} from "@/actions";

export interface AppState {
    loading: boolean,
    pending: boolean,
    id: string
}

const initialState: AppState = {
    loading: false,
    pending: false,
    id: ''
}

export default (state = initialState, action: BaseAction): AppState => {
    if (action.type === ActionType.INITIALIZE) {
        const id = state.id || uuid();
        return {...state, id, pending: false, loading: true};
    }

    if (action.type === ActionType.UUID_CREATE) {
        return {...state, id: uuid()};
    }

    if (action.type === ActionType.UUID_REMOVE) {
        return {...state, id: ''};
    }

    if (action.type === ActionType.PENDING_ACQUIRE) {
        return {...state, pending: true};
    }

    if (action.type === ActionType.PENDING_RELEASE) {
        return {...state, pending: false};
    }

    return state;
}
