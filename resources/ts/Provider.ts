import { useContext, createContext } from "react";
import { Instance, onSnapshot } from "mobx-state-tree";
import { RootStore } from '@/stores';

const RootStoreContext = createContext<null | Instance<typeof RootStore>>(null);

export const stores = RootStore;

export const { Provider } = RootStoreContext;

export function useMobxStateTree() {
    const store = useContext(RootStoreContext);
    if (null === store) {
        throw new Error("Store cannot be null, please add a context provider");
    }

    return store;
}

//onSnapshot(RootStore, snapshot => console.log('Snapshot: ', snapshot));