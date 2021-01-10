import React, {useCallback} from 'react';
import {Button} from '@chakra-ui/react';

import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';

export default (): JSX.Element => {
    const {meta, handleSubmit, errors, register, formState} = useForm(Validator.SIGN_IN);

    const onSubmit = useCallback((values: any) => {
        return new Promise(resolve => {
            setTimeout(() => {
                console.log(values);
                resolve();
            }, 1000);
        })
    }, []);

    return (
        <form onSubmit={handleSubmit(onSubmit)}>
            {Object.entries(meta).map(([name, current]) => (
                <FormSection
                    key={name}
                    name={name}
                    meta={(current || {})}
                    errors={errors}
                    register={register}
                />
            ))}
            <Button mt={4} isLoading={formState.isSubmitting} type='submit'>
                Submit
            </Button>
        </form>
    );
}
