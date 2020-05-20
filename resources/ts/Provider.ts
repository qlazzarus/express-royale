import { useContext, createContext } from "react";
import { Instance, onSnapshot } from "mobx-state-tree";
import { RootModel } from '@/models';
import { RootStore } from '@/stores';

export const RootStoreInstance = RootStore;

export type RootModelInstance = Instance<typeof RootModel>;

const RootStoreContext = createContext<null | RootModelInstance>(null);

export const Provider = RootStoreContext.Provider;

export function useMobxStateTree() {
    const store = useContext(RootStoreContext);
    if (null === store) {
        throw new Error("Store cannot be null, please add a context provider");
    }

    return store;
}

onSnapshot(RootStore, snapshot => console.log('Snapshot: ', snapshot));