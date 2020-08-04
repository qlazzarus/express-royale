import { Resolver } from 'react-hook-form';
import { yupResolver } from '@hookform/resolvers';
import { Validator } from "@/enums";
import { schemaGenerator } from '@/helpers';
import SignUp from '@/schemas/sign_up.json';
import SignIn from '@/schemas/sign_in.json';

const getSchema = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return SignUp;
        case Validator.SIGN_IN:
            return SignIn;
        default:
            throw new Error('not found validator schema');
    }
}

export default (validator: Validator): Resolver => yupResolver(schemaGenerator(getSchema(validator)));
