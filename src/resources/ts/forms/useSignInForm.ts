import { useForm } from 'react-hook-form';
import { Validator } from "@/enums";
import { useObserver, useStore, useValidator } from '@/hooks';

export type SignInFormData = {
	username: string,
	password: string,
}

export default () => {
	const auth = useStore('auth');
	const validationSchema = useValidator(Validator.SIGN_IN);
	const { control, errors, formState, handleSubmit, register } = useForm<SignInFormData>({
        validationSchema
    });

	const onSubmit = handleSubmit((data: SignInFormData) => auth.signIn.bind(auth)(data));
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