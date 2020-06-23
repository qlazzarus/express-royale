import { buildYup } from 'schema-to-yup';
import { Validator } from "@/enums";

const getSchema = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return require('@/schemas/sign_up.json');
        default:
            throw new Error('not found validator schema');
    }
}

export default (validator: Validator, options?: any) => buildYup(getSchema(validator), options || {});
