/* eslint-disable  @typescript-eslint/no-explicit-any */
/* eslint-disable  @typescript-eslint/explicit-module-boundary-types */

const getItem = (key: string, initialValue: any): any => {
    const item = window.localStorage.getItem(key);
    if (item) {
        return JSON.parse(item);
    }

    return initialValue;
};

export default (key: string, initialValue: any): CustomHookType => {
    const storedValue = getItem(key, initialValue);

    const setValue = (value: any) => {
        try {
            const valueToStore = value instanceof Function ? value(storedValue) : value;
            if (valueToStore) {
                window.localStorage.setItem(key, JSON.stringify(valueToStore));
            } else {
                window.localStorage.removeItem(key);
            }
        } catch (error) {
            // eslint-disable-next-line no-console
            console.warn('Failed to setItem', error);
        }
    };

    setValue(storedValue);

    return [storedValue, setValue];
}