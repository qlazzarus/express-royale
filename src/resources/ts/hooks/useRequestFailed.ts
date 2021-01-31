import {useCallback} from "react";
import {useDispatch} from "react-redux";
import {AxiosResponse} from "axios";

import {payloadRecycle} from "@/actions/app";
import {responsePayload} from "@/selectors";

export default (isLoading: boolean, requestedName: string, callback: (payload: AxiosResponse<UnprocessableEntityResponse>) => void) => {
    const dispatch = useDispatch();
    const payloadSelect = responsePayload();

    return useCallback(() => {
        if (!payloadSelect || isLoading) {
            return;
        }

        const {failed, payload, requestName} = payloadSelect;
        if (!failed || requestedName !== requestName) {
            return;
        }

        callback(<AxiosResponse<UnprocessableEntityResponse>>payload);
        dispatch(payloadRecycle());
    }, [callback, requestedName, payloadSelect]);
}
