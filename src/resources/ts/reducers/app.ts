import { ActionType } from "@/enums";
import uuid from 'uuid-random';

export interface AppState {
    loading: boolean,
    id: string
}

const initialState: AppState = {
    loading: false,
    id: ''
}

export default (state = initialState, action: any): AppState => {
    if (action.type === ActionType.INITIALIZE) {
        const id = state.id || uuid();
        return { ...state, id, loading: true };
    }

    if (action.type === ActionType.UUID_GENERATE) {
        return { ...state, id: uuid() };
    }

    if (action.type === ActionType.UUID_REMOVE) {
        return { ...state, id: '' };
    }

    return state;
}
