import React, {useCallback} from 'react';
import {Box, Button} from '@chakra-ui/react';

import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';
import {useTranslation} from "react-i18next";

export default (): JSX.Element => {
    const {meta, handleSubmit, errors, register, formState} = useForm(Validator.SIGN_IN);
    const {t} = useTranslation();

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
            <Box p={4}>
                {Object.entries(meta).map(([name, current]) => (
                    <FormSection
                        key={name}
                        name={name}
                        meta={(current || {})}
                        errors={errors}
                        register={register}
                        controlProps={{
                            pt: 5,
                            width: 'xs'
                        }}
                        inputProps={{
                            bg: 'gray.50'
                        }}
                    />
                ))}
                <Button mt={4} isLoading={formState.isSubmitting} type='submit'>
                    {t('SIGNIN_SUBMIT')}
                </Button>
            </Box>
        </form>
    );
}
