import uuid from "uuid-random";
import {ActionType, AlertStatus} from "@/enums";
import AppendAlertAction from '../AppendAlertAction';

export default (status: AlertStatus, message: string, expiredIn: number = 5000): AppendAlertAction => {
    const id = uuid();

    return {
        type: ActionType.APPEND_ALERT,
        id,
        status,
        message,
        expiredIn
    };
};
