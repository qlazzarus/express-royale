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

type FormSectionProps = {
    name: string,
    meta: FormMeta,
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
        meta,
        errors,
        register,
        controlProps,
        labelProps,
        inputProps,
        helpTextProps,
        errorMessageProps
    } = props;

    const {t} = useTranslation();
    const error = errors[name];

    return (
        // eslint-disable-next-line react/jsx-props-no-spreading
        <FormControl isInvalid={error} {...controlProps}>
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            {meta.label && <FormLabel {...labelProps}>{t(meta.label)}</FormLabel>}
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            <Input
                name={name}
                type={meta.type || 'text'}
                placeholder={meta.placeholder && t(meta.placeholder) || name}
                ref={register}
                {...inputProps}
            />
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            {meta.helper && <FormHelperText {...helpTextProps}>{t(meta.helper)}</FormHelperText>}
            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
            <FormErrorMessage {...errorMessageProps}>
                {Object.entries(meta.errorTexts || {}).map(([key, value]) =>
                    <span key={key}>{error && error.type === key && t(value)}</span>)}
            </FormErrorMessage>
        </FormControl>
    );
}
