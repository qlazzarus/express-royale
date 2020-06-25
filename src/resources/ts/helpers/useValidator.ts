import { buildYup } from 'schema-to-yup';
import { Validator } from "@/enums";

/*
https://github.com/WASD-Team/yup-ast
https://github.com/shipwell/json-yup
https://www.npmjs.com/package/json-schema-validators-typescript-interfaces
https://www.npmjs.com/package/json-schema-yup-transformer
https://www.npmjs.com/package/qe-json-to-yup **
*/

const getSchema = (validator: Validator) => {
    switch (validator) {
        case Validator.SIGN_UP:
            return require('@/schemas/sign_up.json');
        default:
            throw new Error('not found validator schema');
    }
}

const confirm = (th: any) => {
    console.log(th);
    const constraintName = th.constraintNameFor("confirm", "format");
    const method = "confirm";
    th.addConstraint("confirm", {
      constraintValue: true,
      constraintName,
      method,
      errName: method
    });
}

export default (validator: Validator, options?: any) => {
    const schema = getSchema(validator);
    const result = buildYup(
        schema, 
        Object.assign(options || {}, {
            string: {
                convert: { confirm },
                extends: ["confirm"]
            }
        })
    );

    console.log(result);

    return result;
};