import {ActionType} from "@/enums";
import RequestAction from '../RequestAction';

export default (): RequestAction => ({
    type: ActionType.ACCOUNT_INFO_REQUEST,
    promise: (client) => client.get('/auth/info')
});
