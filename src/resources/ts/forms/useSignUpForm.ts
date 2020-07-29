/*
import { useForm } from 'react-hook-form';
import { useObserver } from "mobx-react";
import { Validator } from "@/enums";
import { useStore, useValidator } from '@/hooks';
*/

export type SignUpFormData = {
	username: string,
	email: string,
	password: string,
	passwordConfirm: string
}

export default () => {
	/*
	const { app, auth } = useStore();
	const validationSchema = useValidator(Validator.SIGN_UP);
	const { control, errors, formState, handleSubmit, register } = useForm<SignUpFormData>({
        validationSchema
    });

	const { signUp } = auth;
	const onSubmit = handleSubmit((data: SignUpFormData) => signUp(data));
	const pending = useObserver(() => app.pending);

	return {
	    control,
        errors,
        formState,
		onSubmit,
		pending,
        register,
	}
	*/
}
