import {ActionType} from "@/enums";
import RemoveAlertAction from "../RemoveAlertAction";

export default (id: string): RemoveAlertAction => ({
    type: ActionType.REMOVE_ALERT,
    id
});
