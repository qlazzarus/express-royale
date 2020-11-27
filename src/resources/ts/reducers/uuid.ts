import { ActionType } from "@/enums";
import uuid from 'uuid-random';

export default (state = '', action: any) => {
    switch (action.type) {
        case ActionType.UUID_REQUEST:
            return uuid();
        case ActionType.UUID_RESET:
            return '';
        default:
            return state;
    }
}