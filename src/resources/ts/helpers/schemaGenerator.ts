import {
    forEach,
    head,
    includes,
    isBoolean,
    isFunction,
    isPlainObject,
    isUndefined,
    isString,
    keys,
    mapValues,
    reduce,
    toString,
    values
} from 'lodash';
import * as yup from 'yup';

type ResultArray = {
    name: string,
    args: any
}

const YupTypesNames = {
    ARRAY: 'array',
    BOOLEAN: 'boolean',
    DATE: 'date',
    MIXED: 'mixed',
    NUMBER: 'number',
    OBJECT: 'object',
    STRING: 'string',
};

const customTypes = [
    'equal'
];

const isYupType = (value: string) => includes(values(YupTypesNames), value);

/*
{
    type: ValidationType & string;
    methods?: undefined;
} | {
    type: string;
    methods: ResultArray[];
}
*/
const getNormalizedConfig = (config: ValidationType) => {
    if (isString(config)) {
        if (isYupType(config)) {
            return { type: config };
        }

        throw new Error(`Type ${config} is not valid type.`);

    } else if (isPlainObject(config)) {
        if (isYupType(config.type)) {
            const methods = reduce(
                config,
                (result: ResultArray[], value: any, key: string) => {
                    if (key !== 'type') {
                        result.push({
                            name: key,
                            args: value,
                        });
                    }

                    return result;
                },
                [],
            );

            return {
                type: config.type,
                methods,
            };
        }

        throw new Error(`Type ${config.type} is not valid type.`);

    }

    throw new Error(`Invalid configuration (${toString(config)})`);
};

const getYupType = ({ type }: { type: string }) => {
    switch (type) {
        case YupTypesNames.ARRAY: return yup.array();
        case YupTypesNames.BOOLEAN: return yup.boolean();
        case YupTypesNames.DATE: return yup.date();
        case YupTypesNames.MIXED: return yup.mixed();
        case YupTypesNames.NUMBER: return yup.number();
        case YupTypesNames.OBJECT: return yup.object();
        case YupTypesNames.STRING: return yup.string();
        default: throw new Error(`Type ${type} is not valid type.`);
    }
};

/*
const getYupType: ({ type }: {
    type: string;
}) => yup.NotRequiredArraySchema<unknown> | yup.BooleanSchema<boolean | undefined> | yup.DateSchema<Date | undefined> | yup.MixedSchema<{} | null | undefined> | yup.NumberSchema<...> | yup.ObjectSchema<...> | yup.StringSchema<...>
*/

const applyMethodWhen = (base: any, args: any) => {
    const fieldName = head(keys(args));
    if (!fieldName) {
        throw new Error('Invalid Configuration, Can not get field name');
    }

    const {
        is,
        then,
        otherwise,
    } = args[fieldName];

    if (isUndefined(is)) {
        throw new Error('Invalid configuration, property "is" is required in "when" method');
    }

    if (isUndefined(then)) {
        throw new Error('Invalid configuration, property "then" is required in "when" method');
    }

    if (isUndefined(otherwise)) {
        throw new Error('Invalid configuration, property "otherwise" is required in "when" method');
    }

    return base.when(
        fieldName,
        {
            is,
            then: getYupSchema(then),
            otherwise: getYupSchema(otherwise),
        },
    );
};

const applyMethodShape = (base: any, args: any) => base.shape(mapValues(args, getYupSchema));

const applyMethodsOnType = (base: any, typeName: string, methods?: ResultArray[]) => {
    let baseType = base;

    forEach(
        methods,
        ({ name, args }) => {
            if (!isFunction(base[name]) && customTypes.indexOf(name) === -1) {
                throw new Error(`Invalid method ${name} on ${typeName} type`);
            }

            switch (name) {
                case 'when':
                    baseType = applyMethodWhen(baseType, args);
                    break;
                case 'shape':
                    baseType = applyMethodShape(baseType, args);
                    break;
                case 'matches':
                    baseType = baseType[name](new RegExp(args));
                    break;
                case 'equal':
                    baseType = baseType.oneOf([yup.ref(args)]);
                    break;
                default:
                    baseType = (isBoolean(args) && args) ? baseType[name]() : baseType[name](args);
                    break;
            }
        },
    );

    return baseType;
};


const getYupSchema = (config: ValidationType) => {
    const normalizedConfig = getNormalizedConfig(config);

    return applyMethodsOnType(
        getYupType(normalizedConfig),
        normalizedConfig.type,
        normalizedConfig.methods,
    );
}

export default (config: ValidationSchema) => yup.object().shape(mapValues(config, getYupSchema));
