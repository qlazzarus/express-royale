import { useContext, createContext } from "react";
import { types, Instance, onSnapshot } from "mobx-state-tree";

const RootModel = types.model({
    
});

export const rootStore = RootModel.create({

});

export type RootInstance = Instance<typeof RootModel>;

const RootStoreContext = createContext<null | RootInstance>(null);

export const Provider = RootStoreContext.Provider;

export function useMobxStateTree() {
    const store = useContext(RootStoreContext);
    if (null === store) {
        throw new Error("Store cannot be null, please add a context provider");
    }

    return store;
}

onSnapshot(rootStore, snapshot => console.log('Snapshot: ', snapshot));