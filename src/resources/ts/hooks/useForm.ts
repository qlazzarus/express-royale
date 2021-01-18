import {useForm as useHookForm, UseFormOptions} from 'react-hook-form';
import {useSelector} from "react-redux";
import {Validator} from "@/enums";
import {RootState} from "@/reducers";
import useFormResolver from "./useFormResolver"
import useFormSchema from "./useFormSchema";

export default (validator: Validator, options?: UseFormOptions) => {
    const {pending} = useSelector((state: RootState) => state.app);
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

    const isLoading = pending || formState.isSubmitting;

    return {
        isLoading,
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
