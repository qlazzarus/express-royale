import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useStore, useValidator } from '@/hooks';

export type SignInFormData = {
	username: string,
	password: string,
}

const useSignInForm = () => {
	const { app, auth } = useStore();
	const validationSchema = useValidator(Validator.SIGN_IN);
	const { control, errors, formState, handleSubmit, register } = useForm<SignInFormData>({
        validationSchema
    });

	const onSubmit = handleSubmit((data: SignInFormData) => auth.signIn.bind(auth)(data));
	const { pending } = app;

	return {
	    control,
        errors,
        formState,
		onSubmit,
        pending,
        register,
	}
}

export default useSignInForm;
