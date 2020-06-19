import React from 'react';
import { SignInForm } from '@/components';
import { useStore } from '@/helpers';

const SignIn: React.FC = () => {
    const { authStore } = useStore();

    if (authStore.isLogged) {
        // TODO redirect
    }

    return <SignInForm />;
}

export default SignIn;