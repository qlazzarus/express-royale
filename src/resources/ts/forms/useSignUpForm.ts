import { useForm } from "react-hook-form";
import useStore from '@/helpers/useStore';

type SignUpFormData = {
	username: string,
	email: string,
	password: string,
	passwordConfirm: string
}

/*
https://react-hook-form.com/get-started

import React from "react";
import { useForm } from "react-hook-form";
import { connect } from "react-redux";
import updateAction from "./actions";

export default function App(props) {
  const { register, handleSubmit, setValue } = useForm();
  // Submit your data into Redux store
  const onSubmit = data => props.updateAction(data);
  
  return (
    <form onSubmit={handleSubmit(onSubmit)}>
      <Input name="firstName" defaultValue={props.firstName} ref={register} />
      <Input name="lastName" defaultValue={props.lastName} ref={register} />
      <input type="submit" />
    </form>
  );
}

// Connect your component with redux
connect(({ firstName, lastName }) => ({ firstName, lastName }), updateAction)(YourForm);
*/
const useSignUpForm = () => {
	const { authStore } = useStore();
	const { signUp } = authStore;
	const { control, errors, handleSubmit, register } = useForm<SignUpFormData>();

	/*
	const signUpForm = handleSubmit(data => {
		console.log(data);
	});

	return {
		control,
		errors,
		isLogged,
		register,
		signUpForm
	};
	*/
	return {

	}
}

export default useSignUpForm;