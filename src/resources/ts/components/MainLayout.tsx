import React from 'react';
import { Container } from '@chakra-ui/react';

export default ({ children }: { children: React.ReactNode }): JSX.Element => (
    <Container>
        {children}
    </Container>
);
