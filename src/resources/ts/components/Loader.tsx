import React from 'react';
import { useObserver } from '@/hooks';

export default () => {
    const pending = useObserver('app', 'pending');
    return pending && <i className={"fixed bottom-0 right-0 p-4 fas fa-circle-notch fa-spin fa-2x"} />;
}