import {ActionType, AlertStatus} from "@/enums";
import {AppendAlertAction, CombinedAction, RemoveAlertAction} from "@/actions";

export interface AlertState {
    entries: ({
        id: string,
        status: AlertStatus,
        message: string,
        expiredIn: number
    })[]
}

const initialState: AlertState = {
    entries: []
}

export default (state = initialState, action: CombinedAction): AlertState => {
    const {type} = action;

    if (type === ActionType.APPEND_ALERT) {
        const {id, status, message, expiredIn} = <AppendAlertAction>action;

        return {
            ...state,
            entries: [...state.entries, {
                id,
                status,
                message,
                expiredIn
            }]
        };
    }

    if (type === ActionType.REMOVE_ALERT) {
        const {id} = <RemoveAlertAction>action;

        return {
            ...state,
            entries: state.entries.filter(entry => entry.id !== id)
        };
    }

    return state;
}
