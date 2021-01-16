import {AxiosError, AxiosInstance, AxiosResponse} from "axios";
import BaseAction from "./BaseAction";

export default interface RequestAction extends BaseAction {
    promise: (client: AxiosInstance) => Promise<AxiosResponse | AxiosError>
}
