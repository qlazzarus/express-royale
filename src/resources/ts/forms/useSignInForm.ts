import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useStore, useValidator } from '@/hooks';

export type SignInFormData = {
	username: string,
	password: string,
}

const useSignInForm = () => {
	const { authStore } = useStore();
	const validationSchema = useValidator(Validator.SIGN_IN);
	const { control, errors, formState, handleSubmit, register } = useForm<SignInFormData>({
        validationSchema
    });

	const { signIn } = authStore;

	const onSubmit = handleSubmit((data: SignInFormData) => signIn(data));

	return {
	    control,
        errors,
        formState,
		onSubmit,
        pending: false,
        register,
	}
}

export default useSignInForm;
