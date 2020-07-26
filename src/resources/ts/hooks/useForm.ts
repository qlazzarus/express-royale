/* experimental */
import { useForm as useFormValidator } from 'react-hook-form';
import { Validator } from '@/enums';
import useObserver from './useObserver';
import useValidator from './useValidator';

export default (validate: Validator, processor: Function) => {
    const validationSchema = useValidator(validate);
    const { control, errors, formState, handleSubmit, register } = useFormValidator({ validationSchema });

    const onSubmit = handleSubmit((data: any) => processor(data));
    const pending = useObserver('app.pending');

    return {
	    control,
        errors,
        formState,
		onSubmit,
        pending,
        register,
	}
}
