import { yupResolver } from '@hookform/resolvers';
import { Validator } from "@/enums";
import { schemaGenerator } from '@/helpers';

const getSchema = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return require('@/schemas/sign_up.json');
        case Validator.SIGN_IN:
            return require('@/schemas/sign_in.json');
        default:
            throw new Error('not found validator schema');
    }
}

export default (validator: Validator) => yupResolver(schemaGenerator(getSchema(validator)));
