import {Validator} from "@/enums";
import {getValidator} from '@/helpers';
import {objectMap} from "@/utils";

interface FormMetaSchema {
    [key: string]: FormMeta
}

export default (validator: Validator): FormMetaSchema => {
    return objectMap(getValidator(validator), (validate: ValidationType) => validate.meta || {});
}
