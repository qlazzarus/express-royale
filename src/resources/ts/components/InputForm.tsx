import React, { FC, useState } from 'react';

interface InputFormProps {
  [key: string]: unknown;
  value?: string | number;
  onChange?: (value: string | number) => void | undefined;
}

const InputForm: FC<InputFormProps> = (props: InputFormProps) => {
  const { value, onChange } = props;
  const [inputValue, setInputValue] = useState(value);

  const handleChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    const { value: targetValue } = e.target;
    setInputValue(targetValue);
    if (onChange) onChange(targetValue);
  };

  /* eslint-disable-next-line  */
  return <input {...props} value={inputValue} onChange={handleChange} />;
};

InputForm.defaultProps = {
  value: '',
  onChange: undefined,
};

export default InputForm;
