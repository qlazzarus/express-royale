import React, {useCallback} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch} from "react-redux";
import {Box, Button} from '@chakra-ui/react';

import {signIn} from '@/actions';
import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';

export default (): JSX.Element => {
    const {meta, handleSubmit, errors, register, formState} = useForm(Validator.SIGN_IN);
    const {t} = useTranslation();
    const dispatch = useDispatch();

    const onSubmit = useCallback(({ username, password }) => {
        dispatch(signIn(username, password));
    }, [dispatch]);

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
