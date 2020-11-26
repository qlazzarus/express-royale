import React from 'react';
import { Box } from '@chakra-ui/react';
import { Footer, NavBar } from '@/components';

export default ({ children }: { children: React.ReactNode }): JSX.Element => {
    return  (
        <Box minHeight="100vh" backgroundColor="gray.300">
            <NavBar/>
            {children}
            <Footer />
        </Box>
    );
}