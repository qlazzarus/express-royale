import React from 'react';
import { SignInForm } from '@/components';
import { useStore } from '@/hooks';

const SignIn: React.FC = () => {
    const auth = useStore('auth');

    if (auth.isLogged) {
        // TODO redirect
    }

    return <SignInForm />;
}

export default SignIn;