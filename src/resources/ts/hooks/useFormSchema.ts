import {Validator} from "@/enums";
import {getValidator} from '@/helpers';
import {objectMap} from "@/utils";

export interface FormSchemaCollection {
    [key: string]: FormSchema
}

export default (validator: Validator): FormSchemaCollection => {
    return objectMap(getValidator(validator), (validate: ValidationSchema) => validate.form || {});
}
