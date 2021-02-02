import React, {useCallback} from 'react';
import {useDispatch} from "react-redux";
import {Button, Flex} from '@chakra-ui/react';

import {openDrawer} from "@/actions/app";
import {ColorCode, LayerDepth} from "@/enums";
import BrandIcon from './BrandIcon';

export default () => {
    const dispatch = useDispatch();
    const onClick = useCallback(() => dispatch(openDrawer()), [dispatch]);

    return (
        <Flex
            alignItems='center'
            p='2'
            backgroundColor={ColorCode.PRIMARY_REGULAR}
            position='fixed'
            zIndex={LayerDepth.NAVIGATION}
            width='100%'
        >
            <Button variant='unstyled' onClick={onClick}>
                <BrandIcon
                    color={ColorCode.PRIMARY_BOLD}
                    boxSize='10'
                />
            </Button>
        </Flex>
    );
};
