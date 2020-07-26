import React from 'react';
import { useObserver } from 'mobx-react';
import { useStore } from "@/hooks";

export default () => {
    const app = useStore('app');
    const pending = useObserver(() => app.pending);
    return pending && <i className={"fixed bottom-0 right-0 p-4 fas fa-circle-notch fa-spin fa-2x"} />;
}
