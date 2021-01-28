import {AlertStatus} from "@/enums";
import BaseAction from "./BaseAction";

export default interface AppendAlertAction extends BaseAction {
    id: string,
    status: AlertStatus,
    message: string,
    expiredIn: number
}
