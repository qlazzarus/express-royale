import { useObserver } from 'mobx-react'
import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useResolver, useStore } from '@/hooks';

export type SignInFormData = {
	username: string,
	password: string,
}

export default (handleSuccess?: Function) => {
	const { app, auth } = useStore();
	const resolver = useResolver(Validator.SIGN_IN);
	const { clearErrors, control, errors, formState, handleSubmit, setError } = useForm({
        resolver
    });

	const onSubmit = handleSubmit(async (data: SignInFormData) => {
        clearErrors();
        
        auth.signIn.bind(auth)(data)
            .then(handleSuccess)
            .catch((errors: StringArrayEntries) => {
                Object.entries(errors).map(([property, messages]) => setError(property, { type: 'manual', message: messages[0] }));
            });
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
