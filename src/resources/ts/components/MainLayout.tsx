import React from 'react';
import { Box } from '@chakra-ui/core';

export default ({ children }: { children: React.ReactNode }): JSX.Element => {
    return (
        <Box>
            {children}
        </Box>
    );
};
