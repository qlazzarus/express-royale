import React from 'react';

export default ({ message }: { message: string }): JSX.Element => (
  <p className="text-red-500 italic">{message}</p>
);
