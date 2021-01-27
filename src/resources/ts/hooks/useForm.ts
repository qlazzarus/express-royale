import {useForm as useHookForm, UseFormOptions} from 'react-hook-form';
import {Validator} from "@/enums";
import useFormResolver from "./useFormResolver"
import useFormSchema from "./useFormSchema";

export default (validator: Validator, options?: UseFormOptions) => {
    const schema = useFormSchema(validator);
    const resolver = useFormResolver(validator);

    const {
        register,
        unregister,
        errors,
        watch,
        handleSubmit,
        reset,
        setError,
        clearErrors,
        setValue,
        getValues,
        trigger,
        formState
    } = useHookForm({
        ...options,
        resolver
    });

    return {
        schema,
        resolver,
        register,
        unregister,
        errors,
        watch,
        handleSubmit,
        reset,
        setError,
        clearErrors,
        setValue,
        getValues,
        trigger,
        formState
    }
}
