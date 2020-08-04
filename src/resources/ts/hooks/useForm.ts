import { useForm as useReactHookForm } from 'react-hook-form';
import { DeepMap } from 'react-hook-form/dist/types/utils';
import { Control, ErrorOption, FormStateProxy, FieldError } from 'react-hook-form/dist/types/form';
import { Validator } from "@/enums";
import useResolver from './useResolver';

type ProcessFunctionType = (data: Record<string, unknown>) => Promise<void>;

type SuccessFunctionType = () => void;

type ErrorFunctionType = (name: string, error: ErrorOption) => void;

type UseFormType = {
    control: Control<Record<string, unknown>>,
    errors: DeepMap<Record<string, unknown>, FieldError>,
    formState: FormStateProxy<Record<string, unknown>>,
    onSubmit: () => Promise<void>
};

const handleFailure = (errors: StringArrayEntries, setError: ErrorFunctionType) => {
    Object.entries(errors).map(([property, messages]) => {
        setError(property, { type: 'manual', message: messages[0] });
        return null;
    });
};

export default (schema: Validator, processor: ProcessFunctionType, handleSuccess?: SuccessFunctionType): UseFormType => {
    const resolver = useResolver(schema);
    const { clearErrors, control, errors, formState, handleSubmit, setError } = useReactHookForm({ resolver });
	const onSubmit = handleSubmit(async (data: Record<string, unknown>) => {
        clearErrors();

        try {
            await processor(data);
            if (handleSuccess) handleSuccess();
        } catch (e) {
            handleFailure(e, setError);
        }
    });

	return {
	    control,
        errors,
        formState,
		onSubmit
	}
}
