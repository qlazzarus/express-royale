import BaseAction from "./BaseAction";

export default interface ResponseAction extends BaseAction {
    error: boolean,
    payload: {
        status: number,
        message?: string,
        description?: string
    }
}
