import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useStore, useValidator } from '@/helpers';

export type SignUpFormData = {
	username: string,
	email: string,
	password: string,
	passwordConfirm: string
}

const useSignUpForm = () => {
	const { authStore } = useStore();
	const { signUp } = authStore;
	const validationSchema = useValidator(Validator.SIGN_UP);
	const { control, errors, formState, handleSubmit, register } = useForm<SignUpFormData>({
        validationSchema
    });

	const onSubmit = handleSubmit((data: SignUpFormData) => signUp(data));

	return {
	    control,
        errors,
        formState,
        onSubmit,
        register,
	}
}

export default useSignUpForm;
