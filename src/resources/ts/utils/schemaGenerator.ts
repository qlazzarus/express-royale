import * as yup from 'yup';

import {YupTypeName} from '@/enums';
import objectMap from './objectMap';

type YupArraySchema = yup.NotRequiredArraySchema<any, any>;

type YupSchema =
    YupArraySchema
    | yup.BooleanSchema
    | yup.DateSchema
    | yup.MixedSchema
    | yup.ObjectSchema
    | yup.StringSchema;

type NormalizedConfig = {
    type: string,
    methods?: TestMethod[]
}

type ConditionArgument = {
    is?: ValidationType,
    then?: ValidationType,
    otherwise?: ValidationType
}

interface ConditionSchema {
    [key: string]: ConditionArgument
}

type TestMethod = {
    name: string,
    args: any
}

const customTypes = [
    'equal'
];

const instanceOfYupArraySchema = (schema: YupSchema): schema is YupArraySchema => 'of' in schema;

const instanceOfYupObjectSchema = (schema: YupSchema): schema is yup.ObjectSchema => 'shape' in schema;

const isYupType = (value: string) => (<any>Object).values(YupTypeName).includes(value);

const getNormalizedConfig = (config: ValidationType | string): NormalizedConfig => {
    if (typeof config === 'string' && isYupType(config)) {
        return {type: config};
    }

    if (typeof config === 'object' && isYupType(config.type)) {
        const {type} = config;
        const methods: TestMethod[] = [];
        Object.entries(config).forEach(([name, args]) => {
            if (name === 'type') {
                return;
            }

            methods.push({name, args});
        });

        return {type, methods};
    }

    throw new Error(`Type Normalized Failed Parameter - ${config.toString()}`);
}

const getType = (type: string): YupSchema => {
    switch (type) {
        case YupTypeName.ARRAY:
            return yup.array();
        case YupTypeName.BOOLEAN:
            return yup.boolean();
        case YupTypeName.DATE:
            return yup.date();
        case YupTypeName.MIXED:
            return yup.mixed();
        case YupTypeName.OBJECT:
            return yup.object();
        case YupTypeName.STRING:
            return yup.string();
        default:
            throw new Error(`Type ${type} is not valid type.`);
    }
}

const applyMethodWhen = (type: YupSchema, args: ConditionSchema): YupSchema => {
    const keys = Object.keys(args);
    if (!keys.length) {
        throw new Error('Invalid Configuration, Can not get field name');
    }

    const fieldName = keys[0];
    const { is, then, otherwise } = args[fieldName];

    if (typeof is === 'undefined') {
        throw new Error('Invalid Configuration, "is" is required in "when" method');
    }

    if (typeof then === 'undefined') {
        throw new Error('Invalid Configuration, "then" is required in "when" method');
    }

    if (typeof otherwise === 'undefined') {
        throw new Error('Invalid Configuration, "otherwise" is required in "when" method');
    }

    return type.when(
        fieldName,
        {
            is,
            // eslint-disable-next-line @typescript-eslint/no-use-before-define
            then: getSchema(then),
            // eslint-disable-next-line @typescript-eslint/no-use-before-define
            otherwise: getSchema(otherwise)
        }
    );
}

function applyMethodsOnType(schema: YupSchema, {methods}: NormalizedConfig) {
    let baseSchema = schema;

    methods?.forEach(({name, args}) => {
        const validator: Function | undefined = (baseSchema as any)[name];
        if (typeof validator !== 'function' && customTypes.indexOf(name) === -1) {
            throw new Error(`Invalid method ${name} on ${schema} type`);
        }

        if (name === 'key') {
            baseSchema = applyMethodWhen(baseSchema, args);
        } else if (name === 'shape' && instanceOfYupObjectSchema(baseSchema)) {
            // eslint-disable-next-line @typescript-eslint/no-use-before-define
            baseSchema = (<yup.ObjectSchema>baseSchema).shape(objectMap(args, getSchema));
        } else if (name === 'matches' && validator) {
            baseSchema = validator.call(new RegExp(args));
        } else if (name === 'equal' && !instanceOfYupArraySchema(baseSchema)) {
            // @ts-ignore
            baseSchema = baseSchema.oneOf([yup.ref(args)]);
        } else if (validator) {
            baseSchema = (typeof args === 'boolean' && args) ?
                validator.call(baseSchema) :
                validator.call(baseSchema, args);
        }
    });

    return baseSchema;
}

const getSchema = (config: ValidationType) => {
    const normalizedConfig = getNormalizedConfig(config);
    return applyMethodsOnType(getType(normalizedConfig.type), normalizedConfig);
}

export default (schema: ValidationSchema): yup.ObjectSchema => {
    return yup.object().shape(objectMap(schema, getSchema));
}
