import React, {useCallback} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch, useSelector} from "react-redux";
import {AxiosResponse} from "axios";
import {Box, Button} from '@chakra-ui/react';

import {payloadRecycle, signIn} from '@/actions';
import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';
import {RootState} from "@/reducers";

export default (): JSX.Element => {
    const {t} = useTranslation();
    const {failed,payload,pending} = useSelector((state: RootState) => state.app)
    const dispatch = useDispatch();

    const onSubmit = useCallback(({username, password}) => dispatch(signIn(username, password)), [dispatch]);
    const {
        schema,
        handleSubmit,
        errors,
        register,
        setError,
        formState
    } = useForm(Validator.SIGN_IN);
    const isLoading = pending || formState.isSubmitting;

    const onSuccess = useCallback((res: AxiosResponse<any>) => {
        console.log('onSuccess', res);
    }, []);
    const onFailure = useCallback((res: AxiosResponse<UnprocessableEntityResponse>) => {
        console.log('onFailure', res);
        const {data} = res;
        Object.entries(data.errors).forEach(([key, value]) => {
            setError(key, { message: value[0] });
        });
    }, [setError]);

    if (payload && !isLoading && !failed) {
        onSuccess(payload);
        dispatch(payloadRecycle());
    } else if (payload && !isLoading && failed) {
        onFailure(payload);
        dispatch(payloadRecycle());
    }

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
