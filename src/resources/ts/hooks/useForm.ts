import { useCallback } from 'react';
import { useObserver } from 'mobx-react'
import { useForm as useReactHookForm } from 'react-hook-form';
import { Validator } from "@/enums";
import useResolver from './useResolver';
import useStore from './useStore';

const handleFailure = (errors: StringArrayEntries, setError: Function) => {
    Object.entries(errors).map(([property, messages]) => {
        setError(property, { type: 'manual', message: messages[0] })
    });
};

export default (schema: Validator, processor: Function, handleSuccess?: Function) => {
    const resolver = useResolver(schema);
    const { clearErrors, control, errors, formState, handleSubmit, setError } = useReactHookForm({ resolver });
	const onSubmit = handleSubmit(async (data: any) => {
        clearErrors();

        try {
            await processor(data);
            handleSuccess && handleSuccess();
        } catch (errors) {
            handleFailure(errors, setError);
        }
    });

	return {
	    control,
        errors,
        formState,
		onSubmit
	}
}
