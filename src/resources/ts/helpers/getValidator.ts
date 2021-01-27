import {Validator} from "@/enums";
import SignUp from '@/validations/sign_up.json';
import SignIn from '@/validations/sign_in.json';

export default (validator: Validator): ValidationSchemaCollection => {
    switch (validator) {
        case Validator.SIGNUP:
            return SignUp;
        case Validator.SIGNIN:
            return SignIn;
        default:
            throw new Error('not found validator schema');
    }
}
