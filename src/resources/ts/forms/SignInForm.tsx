import React, {useCallback, useEffect} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch, useSelector} from "react-redux";
import {Box, Button} from '@chakra-ui/react';

import {signIn} from '@/actions/account';
import {append} from "@/actions/alert";
import {FormSection} from '@/components';
import {AlertStatus, Validator} from '@/enums';
import {useForm, useRequestFailed} from '@/hooks';
import {RootState} from "@/reducers";

export default (): JSX.Element => {
    const {t} = useTranslation();
    const {pending} = useSelector((state: RootState) => state.app)
    const dispatch = useDispatch();

    const onSubmit = useCallback(({username, password}) => dispatch(signIn(username, password)), [dispatch]);
    const {schema, handleSubmit, errors, register, setError, formState} = useForm(Validator.SIGNIN);

    const isLoading = pending || formState.isSubmitting;

    const onFailed = useRequestFailed(
        isLoading,
        'SIGNIN',
        (response) => {
            const {data} = response;
            if (data.errors) {
                Object.entries(data.errors).forEach(([key, value]) => {
                    setError(key, {type: 'custom', message: value[0]});
                });
            } else if (data.message) {
                dispatch(append(AlertStatus.ERROR, t(data.message)));
            } else {
                dispatch(append(AlertStatus.ERROR, t('COMMON_EXCEPTION')));
            }
        }
    );

    useEffect(() => onFailed(), [onFailed]);

    return (
        <form onSubmit={handleSubmit(onSubmit)}>
            <Box p={4}>
                {Object.entries(schema).map(([name, current]) => (
                    <FormSection
                        key={name}
                        name={name}
                        schema={(current || {})}
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
                <Button mt={4} isLoading={isLoading} type='submit'>
                    {t('SIGNIN_SUBMIT')}
                </Button>
            </Box>
        </form>
    );
}
