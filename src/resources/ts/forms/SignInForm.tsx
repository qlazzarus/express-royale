import React, { useCallback, useMemo } from 'react';
import { useForm } from 'react-hook-form';
import { Button, FormControl, FormErrorMessage, Input } from '@chakra-ui/react';

import { Validator } from '@/enums';
import { useResolver } from '@/hooks';

export default (): JSX.Element => {
    const resolver = useMemo(() => useResolver(Validator.SIGN_IN), []);

    const { handleSubmit, errors, register, formState } = useForm({
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
            <FormControl isInvalid={errors.username}>
                <Input
                    name='username'
                    placeholder="Username or Email"
                    ref={register}
                />
                <FormErrorMessage>
                    {errors.username && errors.username.message}
                </FormErrorMessage>
            </FormControl>
            <FormControl isInvalid={errors.password}>
                <Input
                    name='password'
                    type='password'
                    placeholder="Password"
                    ref={register}
                />
                <FormErrorMessage>
                    {errors.password && errors.password.message}
                </FormErrorMessage>
            </FormControl>
            <Button mt={4} isLoading={formState.isSubmitting} type='submit'>
                Submit
            </Button>
        </form>
    );
}
