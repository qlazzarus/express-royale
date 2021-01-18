import React from 'react';
import {useTranslation} from "react-i18next";
import {DeepMap, FieldError} from "react-hook-form";
import {
    FormControl,
    FormControlProps,
    FormLabel,
    FormLabelProps,
    FormErrorMessage,
    FormErrorMessageProps,
    FormHelperText,
    HelpTextProps,
    Input,
    InputProps
} from '@chakra-ui/react';

export type FormSectionProps = {
    name: string,
    schema: FormSchema,
    errors: DeepMap<Record<string, any>, FieldError>,
    register: any,
    // eslint-disable-next-line react/require-default-props
    controlProps?: FormControlProps,
    // eslint-disable-next-line react/require-default-props
    labelProps?: FormLabelProps,
    // eslint-disable-next-line react/require-default-props
    inputProps?: InputProps,
    // eslint-disable-next-line react/require-default-props
    helpTextProps?: HelpTextProps,
    // eslint-disable-next-line react/require-default-props
    errorMessageProps?: FormErrorMessageProps
};

export default (props: FormSectionProps): JSX.Element => {
    const {
        name,
        schema,
        errors,
        register,
        controlProps,
        labelProps,
        inputProps,
        helpTextProps,
        errorMessageProps
    } = props;

    const {t} = useTranslation();
    const {errorTexts, helper, placeholder, type, label} = schema;
    const error = errors[name];

    return (
        // eslint-disable-next-line react/jsx-props-no-spreading
        <FormControl isInvalid={error} {...controlProps}>
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            {label && <FormLabel {...labelProps}>{t(label)}</FormLabel>}
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            <Input
                name={name}
                type={type || 'text'}
                placeholder={placeholder && t(placeholder) || name}
                ref={register}
                {...inputProps}
            />
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            {helper && <FormHelperText {...helpTextProps}>{t(helper)}</FormHelperText>}
            {error && errorTexts && errorTexts[error.type] && (
                // eslint-disable-next-line react/jsx-props-no-spreading
                <FormErrorMessage {...errorMessageProps}>
                    {t(errorTexts[error.type])}
                </FormErrorMessage>
            )}
            {error && error.type === 'custom' && (
                // eslint-disable-next-line react/jsx-props-no-spreading
                <FormErrorMessage {...errorMessageProps}>
                    {t(error.message)}
                </FormErrorMessage>
            )}
        </FormControl>
    );
}
