import React, {useCallback} from 'react';
import {useTranslation} from "react-i18next";
import {useDispatch, useSelector} from "react-redux";
import {Box, Button} from '@chakra-ui/react';

import {signIn} from '@/actions/account';
import {FormSection} from '@/components';
import {Validator} from '@/enums';
import {useForm} from '@/hooks';
import {RootState} from "@/reducers";

export default (): JSX.Element => {
    const {t} = useTranslation();
    const {pending} = useSelector((state: RootState) => state.app)
    const dispatch = useDispatch();

    const onSubmit = useCallback(({username, password}) => dispatch(signIn(username, password)), [dispatch]);
    const {schema, handleSubmit, errors, register, formState} = useForm(Validator.SIGN_IN);

    // TODO onFailure notify

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
                <Button mt={4} isLoading={pending || formState.isSubmitting} type='submit'>
                    {t('SIGNIN_SUBMIT')}
                </Button>
            </Box>
        </form>
    );
}
