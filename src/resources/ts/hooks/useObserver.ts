import { useObserver } from 'mobx-react';
import useStore from './useStore';

export default (property: string) => {
    const properties = property.split(".");
    if (2 !== properties.length) {
        throw Error('Invalid Property');
    }

	const app = useStore(properties[0]);
	return useObserver(() => app[properties[1]]);
}
