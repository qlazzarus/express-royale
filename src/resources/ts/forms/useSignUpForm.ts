import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useObserver, useStore, useValidator } from '@/hooks';

export type SignUpFormData = {
	username: string,
	email: string,
	password: string,
	passwordConfirm: string
}

export default () => {
	const auth = useStore('auth');
	const validationSchema = useValidator(Validator.SIGN_UP);
	const { control, errors, formState, handleSubmit, register } = useForm<SignUpFormData>({
        validationSchema
    });

	const { signUp } = auth;
	const onSubmit = handleSubmit((data: SignUpFormData) => signUp(data));
	const pending = useObserver('app', 'pending');

	return {
	    control,
        errors,
        formState,
		onSubmit,
		pending,
        register,
	}
}
