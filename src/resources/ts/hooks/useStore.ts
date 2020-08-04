import { useContext } from 'react';
import { MobXProviderContext } from "mobx-react";

export default (name?: string): Record<string, unknown> => {
    const store = useContext(MobXProviderContext);

    if (!store) {
        throw new Error('StoreProvider is not defined');
    }

    return name ? store[name] : store;
};
