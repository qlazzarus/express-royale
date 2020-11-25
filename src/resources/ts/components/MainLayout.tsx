import React from 'react';
import { Box } from '@chakra-ui/react';
import { NavBar } from '@/components';

export default ({ children }: { children: React.ReactNode }): JSX.Element => {
    return  (
        <Box minHeight="100vh" backgroundColor="gray.300">
            <NavBar/>
            {children}
        </Box>
    );
}