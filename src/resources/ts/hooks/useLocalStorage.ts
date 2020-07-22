export default function (key: string, initialValue: any) {
    const storedValue: any = (() => {
        const item = window.localStorage.getItem(key);
        return item ? JSON.parse(item) : initialValue;
    })();

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

    return [storedValue, setValue];
}
