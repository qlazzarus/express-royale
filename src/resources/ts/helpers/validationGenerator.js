"use strict";
var __createBinding = (this && this.__createBinding) || (Object.create ? (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    Object.defineProperty(o, k2, { enumerable: true, get: function() { return m[k]; } });
}) : (function(o, m, k, k2) {
    if (k2 === undefined) k2 = k;
    o[k2] = m[k];
}));
var __setModuleDefault = (this && this.__setModuleDefault) || (Object.create ? (function(o, v) {
    Object.defineProperty(o, "default", { enumerable: true, value: v });
}) : function(o, v) {
    o["default"] = v;
});
var __importStar = (this && this.__importStar) || function (mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (k !== "default" && Object.prototype.hasOwnProperty.call(mod, k)) __createBinding(result, mod, k);
    __setModuleDefault(result, mod);
    return result;
};
Object.defineProperty(exports, "__esModule", { value: true });
var lodash_1 = require("lodash");
var yup = __importStar(require("yup"));
var YupTypesNames = {
    ARRAY: 'array',
    BOOLEAN: 'boolean',
    DATE: 'date',
    MIXED: 'mixed',
    NUMBER: 'number',
    OBJECT: 'object',
    STRING: 'string',
};
var customTypes = [
    'equal'
];
var isYupType = function (value) { return lodash_1.includes(lodash_1.values(YupTypesNames), value); };
/*
{
    type: ValidationType & string;
    methods?: undefined;
} | {
    type: string;
    methods: ResultArray[];
}
*/
var getNormalizedConfig = function (config) {
    if (lodash_1.isString(config)) {
        if (isYupType(config)) {
            return { type: config };
        }
        throw new Error("Type " + config + " is not valid type.");
    }
    else if (lodash_1.isPlainObject(config)) {
        if (isYupType(config.type)) {
            var methods = lodash_1.reduce(config, function (result, value, key) {
                if (key !== 'type') {
                    result.push({
                        name: key,
                        args: value,
                    });
                }
                return result;
            }, []);
            return {
                type: config.type,
                methods: methods,
            };
        }
        throw new Error("Type " + config.type + " is not valid type.");
    }
    throw new Error("Invalid configuration (" + lodash_1.toString(config) + ")");
};
var getYupType = function (_a) {
    var type = _a.type;
    switch (type) {
        case YupTypesNames.ARRAY: return yup.array();
        case YupTypesNames.BOOLEAN: return yup.boolean();
        case YupTypesNames.DATE: return yup.date();
        case YupTypesNames.MIXED: return yup.mixed();
        case YupTypesNames.NUMBER: return yup.number();
        case YupTypesNames.OBJECT: return yup.object();
        case YupTypesNames.STRING: return yup.string();
        default: throw new Error("Type " + type + " is not valid type.");
    }
};
/*
const getYupType: ({ type }: {
    type: string;
}) => yup.NotRequiredArraySchema<unknown> | yup.BooleanSchema<boolean | undefined> | yup.DateSchema<Date | undefined> | yup.MixedSchema<{} | null | undefined> | yup.NumberSchema<...> | yup.ObjectSchema<...> | yup.StringSchema<...>
*/
var applyMethodWhen = function (base, args) {
    var fieldName = lodash_1.head(lodash_1.keys(args));
    if (!fieldName) {
        throw new Error('Invalid Configuration, Can not get field name');
    }
    var _a = args[fieldName], is = _a.is, then = _a.then, otherwise = _a.otherwise;
    if (lodash_1.isUndefined(is)) {
        throw new Error('Invalid configuration, property "is" is required in "when" method');
    }
    if (lodash_1.isUndefined(then)) {
        throw new Error('Invalid configuration, property "then" is required in "when" method');
    }
    if (lodash_1.isUndefined(otherwise)) {
        throw new Error('Invalid configuration, property "otherwise" is required in "when" method');
    }
    return base.when(fieldName, {
        is: is,
        then: getYupSchema(then),
        otherwise: getYupSchema(otherwise),
    });
};
var applyMethodShape = function (base, args) { return base.shape(lodash_1.mapValues(args, getYupSchema)); };
var applyMethodsOnType = function (base, typeName, methods) {
    var baseType = base;
    lodash_1.forEach(methods, function (_a) {
        var name = _a.name, args = _a.args;
        if (!lodash_1.isFunction(base[name]) && customTypes.indexOf(name) === -1) {
            throw new Error("Invalid method " + name + " on " + typeName + " type");
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
                baseType = (lodash_1.isBoolean(args) && args) ? baseType[name]() : baseType[name](args);
                break;
        }
    });
    return baseType;
};
var getYupSchema = function (config) {
    var normalizedConfig = getNormalizedConfig(config);
    return applyMethodsOnType(getYupType(normalizedConfig), normalizedConfig.type, normalizedConfig.methods);
};
exports.default = (function (config) { return yup.object().shape(lodash_1.mapValues(config, getYupSchema)); });
