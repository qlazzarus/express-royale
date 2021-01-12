import {ActionType} from "@/enums";
import RequestAction from './RequestAction';

export default (username: string, password: string): RequestAction => ({
    type: ActionType.SIGNIN_REQUEST,
    promise: (client) => client.post('/auth/login', {
        username,
        password
    })
});
