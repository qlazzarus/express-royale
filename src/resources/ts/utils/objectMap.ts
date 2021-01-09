export default (obj: Object, callback: Function) =>
    Object.fromEntries(
        Object.entries(obj).map(
            ([key, values], index) => [key, callback(values, key, index)]
        )
    );
