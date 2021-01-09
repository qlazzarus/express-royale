import { Validator } from "@/enums";
import SignUp from '@/validations/sign_up.json';
import SignIn from '@/validations/sign_in.json';

export default (validator: Validator): ValidationSchema => {
    switch (validator) {
        case Validator.SIGN_UP:
            return SignUp;
        case Validator.SIGN_IN:
            return SignIn;
        default:
            throw new Error('not found validator schema');
    }
}
