import React from 'react';
import { SignInForm } from '@/components';
import { useObserver } from 'mobx-react';
import { useStore } from '@/hooks';

export default () => {
    const auth = useStore('auth');
    const logged = useObserver(() => auth.logged);

    if (logged) {
        // TODO redirect
    }

    return <SignInForm />;
}
