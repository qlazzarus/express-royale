import {useDispatch, useSelector} from "react-redux";
import {AxiosResponse} from "axios";

import {payloadRecycle} from "@/actions";
import {RootState} from "@/reducers";

export default () => {
    const {failed,payload,pending} = useSelector((state: RootState) => state.app);
    const dispatch = useDispatch();

    const promise = new Promise<AxiosResponse>((resolve, reject) => {
        if (payload && !pending && !failed) {
            resolve(payload);
        } else if (payload && !pending && failed) {
            reject(payload);
        }
    });

    promise.finally(() => dispatch(payloadRecycle()));
    return promise;
}
