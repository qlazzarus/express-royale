export default function (key: string, initialValue: any) {
    const setValue = (value: any) => {
        try {
            const valueToStore = value instanceof Function ? value(storedValue) : value;
            valueToStore ? 
                window.localStorage.setItem(key, JSON.stringify(valueToStore)) :
                window.localStorage.removeItem(key);
        } catch (error) {
            console.log(error);
        }
    };

    const storedValue: any = (() => {
        const item = window.localStorage.getItem(key);
        if (item) {
            return JSON.parse(item);
        }

        setValue(initialValue);
        return initialValue;
    })();

    return [storedValue, setValue];
}
