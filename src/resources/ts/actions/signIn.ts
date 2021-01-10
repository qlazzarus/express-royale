import {ActionType} from "@/enums";
import RequestAction from './RequestAction';

export default (username: string, password: string): RequestAction => ({
    type: ActionType.SIGNIN_REQUEST,
    promise: (client) => client.post('/login', {
        username,
        password
    })
});
