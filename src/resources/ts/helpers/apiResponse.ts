import {AxiosResponse} from "axios";
import {Dispatch} from "redux";

import {payloadRecycle} from "@/actions/app";

type ApiResponse = {
    dispatch: Dispatch,
    failed: boolean,
    isLoading: boolean,
    onFailure: (res: AxiosResponse<any>) => void,
    onSuccess: (res: AxiosResponse<any>) => void,
    payload: AxiosResponse|undefined,
}

export default (options: ApiResponse) => {
    const {dispatch, failed, isLoading, onFailure, onSuccess, payload} = options;

    if (payload && !isLoading && !failed) {
        onSuccess(payload);
    } else if (payload && !isLoading && failed) {
        onFailure(payload);
    }

    if (payload && !isLoading) {
        dispatch(payloadRecycle());
    }
}
