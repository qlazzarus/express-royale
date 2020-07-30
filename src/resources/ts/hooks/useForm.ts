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
    
	const { app } = useStore();
    const resolver = useResolver(schema);
    const { clearErrors, control, errors, formState, handleSubmit, setError } = useReactHookForm({ resolver });
	const onSubmit = handleSubmit(async (data: any) => {
        clearErrors();

        processor(data)
            .then(handleSuccess)
            .catch((errors: StringArrayEntries) => handleFailure(errors, setError));
    });

    const pending = useObserver(() => app.pending);

	return {
	    control,
        errors,
        formState,
		onSubmit,
        pending
	}
}
