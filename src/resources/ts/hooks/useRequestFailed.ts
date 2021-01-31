import {useCallback} from "react";
import {useDispatch, useSelector} from "react-redux";
import {AxiosResponse} from "axios";

import {payloadRecycle} from "@/actions/app";
import {RootState} from "@/reducers";

export default (isLoading: boolean, request: string, callback: (payload: AxiosResponse<UnprocessableEntityResponse>) => void) => {
    const dispatch = useDispatch();
    const {failed, payload, requested} = useSelector((state: RootState) => state.app);

    return useCallback(() => {
        if (!failed || !payload || isLoading || requested !== request) {
            return;
        }

        callback(<AxiosResponse<UnprocessableEntityResponse>>payload);
        dispatch(payloadRecycle());
    }, [failed, payload, callback, request, requested]);
}
