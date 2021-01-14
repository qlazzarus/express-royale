import React, {useCallback} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch} from "react-redux";
import {Box, Button} from '@chakra-ui/react';

import {signIn} from '@/actions';
import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';
import {RootState} from "@/reducers";

export default (): JSX.Element => {
    const {meta, handleSubmit, errors, register, isLoading} = useForm(
        Validator.SIGN_IN,
(state: RootState) => state.account,
    );
    const {t} = useTranslation();
    const dispatch = useDispatch();

    const onSubmit = useCallback(({username, password}) => {
        dispatch(signIn(username, password));
    }, [dispatch]);

    // promise.then(res => console.log('promise', res));

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
                <Button mt={4} isLoading={isLoading} type='submit'>
                    {t('SIGNIN_SUBMIT')}
                </Button>
            </Box>
        </form>
    );
}
