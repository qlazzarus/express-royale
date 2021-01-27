import React, {useCallback} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch, useSelector} from "react-redux";
import {Box, Button} from '@chakra-ui/react';
import {AxiosResponse} from "axios";

import {signIn} from '@/actions/account';
import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';
import {RootState} from "@/reducers";
import {payloadRecycle} from "@/actions/app";

export default (): JSX.Element => {
    const {t} = useTranslation();
    const {failed, payload, pending, requested} = useSelector((state: RootState) => state.app)
    const dispatch = useDispatch();

    const onSubmit = useCallback(({username, password}) => dispatch(signIn(username, password)), [dispatch]);
    const {schema, handleSubmit, errors, register, setError, formState} = useForm(Validator.SIGNIN);

    const isLoading = pending || formState.isSubmitting;
    if (failed && payload && !isLoading && requested === 'SIGNIN') {
        const {data} = payload as AxiosResponse<UnprocessableEntityResponse>;
        if (data.errors) {
            Object.entries(data.errors).forEach(([key, value]) => {
                setError(key, {type: 'custom', message: value[0]});
            });
        } else if (data.message) {
            // TODO
        } else {
            // TODO
        }

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
