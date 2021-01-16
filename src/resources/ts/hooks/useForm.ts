import {SubmitHandler, useForm as useHookForm, UseFormOptions as UseHookFormOptions} from 'react-hook-form';
import {useSelector} from "react-redux";
import {Validator} from "@/enums";
import {RootState} from "@/reducers";
import useFormMeta from "./useFormMeta";
import useFormResolver from "./useFormResolver"

export type UseFormOptions = UseHookFormOptions & {
    onSubmit: SubmitHandler<Record<string, any>>,
    onSuccess: Function,
    onFailure: Function
}

export default (validator: Validator, options: UseFormOptions) => {
    const {failed, payload, pending} = useSelector((state: RootState) => state.app);
    const meta = useFormMeta(validator);
    const resolver = useFormResolver(validator);
    const {onSubmit, onSuccess, onFailure, ...formOptions} = options;

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
        ...formOptions,
        resolver
    });

    const isLoading = pending || formState.isSubmitting;

    if (payload && !isLoading && !failed) {
        onSuccess(payload);
    } else if (payload && !isLoading && failed) {
        onFailure(payload, setError);
    }

    return {
        isLoading,
        meta,
        resolver,
        register,
        unregister,
        errors,
        watch,
        handleSubmit: handleSubmit(onSubmit),
        reset,
        setError,
        clearErrors,
        setValue,
        getValues,
        trigger,
        formState
    }
}
