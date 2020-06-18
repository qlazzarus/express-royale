import React, { useState } from 'react';

interface InputFormProps extends React.Props<any> {
    className?: string,
    type?: 'text' | 'password' | 'number' | 'email' | 'datetime' | 'datetime-local',
    placeholder?: string,
    defaultValue?: string | number,
    onChange?: Function
}

const InputForm: React.FC<InputFormProps> = ({ className, type, placeholder, defaultValue, onChange }: InputFormProps) => {
    const [value, setValue] = useState(defaultValue);

    const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
        const value = e.target.value;
        setValue(value);
        onChange && onChange(value);
    }

    return (
        <input 
            className={className} 
            type={type} 
            placeholder={placeholder}
            value={value}
            onChange={handleChange}
        />
    );
}

InputForm.defaultProps = {
    className: '',
    type: 'text',
    placeholder: '',
    defaultValue: ''
}

export default InputForm
