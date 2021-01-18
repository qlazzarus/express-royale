import React, {useCallback} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch} from "react-redux";
import {AxiosResponse} from "axios";
import {Box, Button} from '@chakra-ui/react';

import {signIn} from '@/actions';
import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';
import {payloadResponse} from "@/helpers";

export default (): JSX.Element => {
    const {t} = useTranslation();
    const dispatch = useDispatch();

    const onSubmit = useCallback(({username, password}) => dispatch(signIn(username, password)), [dispatch]);
    const {
        schema,
        handleSubmit,
        errors,
        register,
        isLoading,
        setError
    } = useForm(Validator.SIGN_IN);

    /*
    const onSuccess = useCallback((payload) => {
        console.log('onSuccess', payload);
    }, []);
    const onFailure = useCallback((payload: AxiosResponse<UnprocessableEntityResponse>|undefined) => {
        if (!payload) return;
        const {data} = payload;
        Object.entries(data.errors).forEach(([key, value]) => {
            setError(key, { message: value[0] });
        });
    }, [setError]);

    useCallback(() => payloadResponse().then(onSuccess).catch(onFailure), [onSuccess, onFailure]);
    */

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
