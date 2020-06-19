import React, { useState } from 'react';

interface InputFormProps {
    [key: string]: any,
    value?: string | number,
    onChange?: Function
}

const InputForm: React.FC<InputFormProps> = (props: InputFormProps) => {
    const { value, onChange } = props;
    const [inputValue, setInputValue] = useState(value);

    const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        const { value } = e.target;
        setInputValue(value);
        onChange && onChange(value);
    }

    return (
        <input 
            {...props}
            value={inputValue}
            onChange={handleChange}
        />
    );
}

InputForm.defaultProps = {
    value: ''
}

export default InputForm
