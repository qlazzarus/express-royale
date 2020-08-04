const getItem = (key: string, initialValue: unknown): unknown => {
    const item = window.localStorage.getItem(key);
    if (item) {
        return JSON.parse(item);
    }

    return initialValue;
};

export default (key: string, initialValue: unknown): CustomHookType => {
    const storedValue = getItem(key, initialValue);

    const setValue = (value: unknown) => {
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