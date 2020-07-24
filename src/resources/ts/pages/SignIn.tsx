import React from 'react';
import { SignInForm } from '@/components';
import { useStore } from '@/hooks';

export default () => {
    const auth = useStore('auth');

    if (auth.isLogged) {
        // TODO redirect
    }

    return <SignInForm />;
}