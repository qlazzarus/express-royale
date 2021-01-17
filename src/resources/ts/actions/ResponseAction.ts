import {AxiosResponse} from "axios";
import BaseAction from "./BaseAction";

export default interface ResponseAction extends BaseAction {
    payload: AxiosResponse | undefined
}
