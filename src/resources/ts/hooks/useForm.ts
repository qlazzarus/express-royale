import {useForm as useHookForm} from 'react-hook-form';
import {Validator} from "@/enums";
import useFormMeta from "./useFormMeta";
import useFormResolver from "./useFormResolver";

export default (validator: Validator, args?: any) => {
    const meta = useFormMeta(validator);
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
        resolver,
        ...args
    });

    return {
        meta,
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
