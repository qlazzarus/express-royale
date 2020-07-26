/* experimental */
import { useObserver } from 'mobx-react';
import { useForm as useFormValidator } from 'react-hook-form';
import { Validator } from '@/enums';
import useStore from './useStore';
import useValidator from './useValidator';

export default (validate: Validator, processor: Function) => {
    const app = useStore('app');
    const validationSchema = useValidator(validate);
    const { control, errors, formState, handleSubmit, register } = useFormValidator({ validationSchema });

    const onSubmit = handleSubmit((data: any) => processor(data));
    const pending = useObserver(() => app.pending);

    return {
	    control,
        errors,
        formState,
		onSubmit,
        pending,
        register,
	}
}
