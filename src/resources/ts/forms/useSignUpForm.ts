import { useForm } from 'react-hook-form';
import * as yup from 'yup';
import { useStore } from '@/helpers';

export type SignUpFormData = {
	username: string,
	email: string,
	password: string,
	passwordConfirm: string
}

const SignUpSchema = yup.object().shape({
    username: yup.string().matches(/[a-z][a-z0-9_.]+/).required(),
    email: yup.string().email().required(),
    password: yup.string().min(8).required(),
    passwordConfirm: yup.string().oneOf([yup.ref('password')]).required()
});

const useSignUpForm = () => {
	const { authStore } = useStore();
	const { signUp } = authStore;
	const { control, errors, formState, handleSubmit, register } = useForm<SignUpFormData>({
        validationSchema: SignUpSchema
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
