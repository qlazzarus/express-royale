import React, {useCallback} from 'react';
import {useDispatch} from "react-redux";
import {
    Box,
    Drawer,
    DrawerBody,
    DrawerCloseButton,
    DrawerContent,
    DrawerFooter,
    DrawerHeader,
    DrawerOverlay,
    VStack
} from '@chakra-ui/react';

import {closeDrawer} from "@/actions/app";
import {isDrawerOpened} from "@/selectors";

export default () => {
    const dispatch = useDispatch();
    const opened = isDrawerOpened();
    const onClose = useCallback(() => dispatch(closeDrawer()), [dispatch]);

    return (
        <Drawer placement='left' isOpen={opened} onClose={onClose}>
            <DrawerOverlay>
                <DrawerContent>
                    <DrawerCloseButton/>
                    <DrawerHeader>
                        Header
                    </DrawerHeader>
                    <DrawerBody>
                        <VStack>
                            <Box>Body</Box>
                            <Box>Box</Box>
                        </VStack>
                    </DrawerBody>
                    <DrawerFooter>
                        Footer
                    </DrawerFooter>
                </DrawerContent>
            </DrawerOverlay>
        </Drawer>
    );
}
