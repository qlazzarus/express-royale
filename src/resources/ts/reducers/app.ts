import uuid from 'uuid-random';

import {ActionType} from "@/enums";
import {BaseAction} from "@/actions";

export interface AppState {
    loading: boolean,
    id: string
}

const initialState: AppState = {
    loading: false,
    id: ''
}

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
