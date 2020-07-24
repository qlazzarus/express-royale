import { useObserver } from 'mobx-react';
import useStore from './useStore';

export default (store: string, property: string) => {
	const app = useStore(store);
	return useObserver(() => app[property]);
}