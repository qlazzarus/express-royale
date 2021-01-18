import {ActionType} from "@/enums";
import BaseAction from './BaseAction';

export default (): BaseAction => ({
    type: ActionType.PAYLOAD_RECYCLE
});
