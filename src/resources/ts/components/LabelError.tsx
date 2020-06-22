import React from 'react';
import { FieldError } from 'react-hook-form';

interface LabelErrorProps {
    [key: string]: any,
    error?: FieldError
}

const LabelError: React.FC<LabelErrorProps> = (props: LabelErrorProps) => {
    if (!props.error) return null;
    const { message } = props.error;

    return <p className="text-red-500 italic">{message}</p>;
}

export default LabelError;