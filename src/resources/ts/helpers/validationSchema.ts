import { buildYup, types } from 'schema-to-yup';
import { Validator } from "@/enums";

const getSchema = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return require('@/schemas/sign_up.json');
        default:
            throw new Error('not found validator schema');
    }
}

const confirmHandler = (th: any) => {
    const constraintName = th.constraintNameFor("confirm", "format");
    const method = "confirm";
    th.addConstraint("confirm", {
      constraintValue: true,
      constraintName,
      method,
      errName: method
    });
}

export default (validator: Validator, options?: any) => buildYup(
    getSchema(validator), 
    Object.assign(options || {}, {
        string: {
            convert: {
                confirm: confirmHandler
            },
            enabled: [
                "confirm",
                // built in
                "normalize",
                "minLength",
                "maxLength",
                "pattern",
                "lowercase",
                "uppercase",
                "email",
                "url",
                "genericFormat"
            ]
        }
    }
));