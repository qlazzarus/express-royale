import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useStore, useValidator } from '@/helpers';

export type SignInFormData = {
	username: string,
	password: string,
}

const useSignInForm = () => {
	const { authStore: { signIn, pending } } = useStore();
	const validationSchema = useValidator(Validator.SIGN_IN);
	const { control, errors, formState, handleSubmit, register } = useForm<SignInFormData>({
        validationSchema
    });

	const onSubmit = handleSubmit((data: SignInFormData) => signIn(data));

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
