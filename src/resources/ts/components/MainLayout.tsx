import React from 'react';
import {Box} from '@chakra-ui/react';

import {ColorCode} from "@/enums";

import AlertDialog from "./AlertDialog";
import Footer from './Footer';
import NavBar from "./NavBar";
import PendingIndicator from "./PendingIndicator";

export default ({children}: { children: React.ReactNode }): JSX.Element => {
    return (
        <Box
            minHeight="100vh"
            backgroundColor={ColorCode.SECONDARY_REGULAR}
            overflowX={'hidden'}
        >
            <AlertDialog />
            <NavBar/>
            <Box pt={12}>
                {children}
            </Box>
            <PendingIndicator />
            <Footer/>
        </Box>
    );
}
