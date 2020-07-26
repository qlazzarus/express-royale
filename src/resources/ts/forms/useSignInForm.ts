import { useObserver } from 'mobx-react'
import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useStore, useValidator } from '@/hooks';

export type SignInFormData = {
	username: string,
	password: string,
}

export default () => {
	const { app, auth } = useStore();
	const validationSchema = useValidator(Validator.SIGN_IN);
	const { control, errors, clearError, setError, formState, handleSubmit, register } = useForm<SignInFormData>({
        validationSchema
    });

    const authError = useObserver(() => auth.errors);

	const onSubmit = handleSubmit(async (data: SignInFormData) => {
	    clearError();
	    await auth.signIn.bind(auth)(data);
	    console.log('handleSubmit', authError);
        authError && setError(authError);
    });

	const pending = useObserver(() => app.pending);

	return {
	    control,
        errors,
        formState,
		onSubmit,
        pending,
        register,
	}
}
