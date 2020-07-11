import { useContext, createContext } from "react";
import { addMiddleware, applyAction, onSnapshot } from "mobx-state-tree";
import uuid from 'uuid-random';
import { localStorage } from '@/helpers';
import { RootStore, RootStoreInterface } from '@/stores';

const [id] = localStorage('identifier', uuid());

export const stores = RootStore.create({
    id
});

export const RootStoreContext = createContext<null | RootStoreInterface>(stores);

export const { Provider } = RootStoreContext;

addMiddleware(stores, (call, next, abort) => {
    console.dir(call);
    /*
      if (/Async$/.test(call.name)) {
        if (call.type === 'flow_spawn') {
          applyAction(self, { name: 'startLoading', args: [call.name, call.args] });
        } else if (call.type === 'flow_return' || call.type === 'flow_throw') {
          applyAction(self, { name: 'endLoading', args: [call.name] });
        }
      }
      return next(call);
     */
    return next(call);
});

onSnapshot(stores, snapshot => console.log('Snapshot: ', snapshot))
