import React from 'react';

export default ({ message, messages }: { message: string, messages?: Object }) => {
    console.log('LabelError', message, messages);
    return <p className="text-red-500 italic">{message}</p>
};