import { Resolver } from "react-hook-form";
import { yupResolver } from '@hookform/resolvers/yup';
import { Validator } from "@/enums";
import { schemaGenerator } from '@/utils';
import SignUp from '@/validations/sign_up.json';
import SignIn from '@/validations/sign_in.json';

const getValidator = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return SignUp;
        case Validator.SIGN_IN:
            return SignIn;
        default:
            throw new Error('not found validator schema');
    }
}

export default (validator: Validator): Resolver => yupResolver(schemaGenerator(getValidator(validator)));
