import { ActionType } from "@/enums";
import uuid from 'uuid-random';

const initialState = {
    id: ''
}

export default (state = initialState, action: any) => {
    if (action.type === ActionType.INIT_REQUEST) {
        const id = state.id || uuid();
        return { ...state, id };
    } 
    
    if (action.type === ActionType.UUID_GENERATE) {
        return { ...state, id: uuid() };
    } 
    
    if (action.type === ActionType.UUID_REMOVE) {
        return { ...state, id: '' };
    }

    return state;
}