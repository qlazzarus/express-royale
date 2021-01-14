import {useForm as useHookForm} from 'react-hook-form';
import {useSelector} from "react-redux";
import {Validator} from "@/enums";
import {RootState} from "@/reducers";
import useFormMeta from "./useFormMeta";
import useFormResolver from "./useFormResolver";

export default (validator: Validator, selector: (state: RootState) => unknown, args?: any) => {
    const {pending,payload,failed} = useSelector((state: RootState) => state.app);
    const reducer = useSelector(selector);
    const meta = useFormMeta(validator);
    const resolver = useFormResolver(validator);

    if (!pending && payload) {
        // TODO resolve / reject
        console.log({payload,failed,reducer});
    }

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
        isLoading: pending || formState.isSubmitting,
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
