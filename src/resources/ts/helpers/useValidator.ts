import { Validator } from "@/enums";
import schemaGenerator from './schemaGenerator';

const getSchema = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return require('@/schemas/sign_up.json');
        default:
            throw new Error('not found validator schema');
    }
}

export default (validator: Validator, options?: any) => {
    return schemaGenerator(getSchema(validator));
};