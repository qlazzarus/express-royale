import React, {useCallback, useMemo} from 'react';
import {useForm} from 'react-hook-form';
import {Button} from '@chakra-ui/react';

import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useFormMeta, useFormResolver} from '@/hooks';

export default (): JSX.Element => {
    const validate = Validator.SIGN_IN;
    const resolver = useMemo(() => useFormResolver(validate), [validate]);
    const metas = useMemo(() => useFormMeta(validate), [validate]);

    const {handleSubmit, errors, register, formState} = useForm({
        resolver
    });

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
            {Object.entries(metas).map(([name, meta]) => (
                <FormSection
                    key={name}
                    name={name}
                    meta={(meta || {})}
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
