import { useContext } from 'react';
import { RootStoreInterface } from '@/stores';
import { RootStoreContext } from '@/Provider';

function useStore(): RootStoreInterface {
  const store = useContext(RootStoreContext);

  if (!store) {
    throw new Error('StoreProvider is not defined');
  }

  return store;
}

export default useStore;