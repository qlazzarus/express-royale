import React from 'react';
import {Flex} from '@chakra-ui/react';

import {ColorCode, LayerDepth} from "@/enums";

import BrandIcon from './BrandIcon';

export default () => (
    <Flex
        alignItems='center'
        p='2'
        backgroundColor={ColorCode.PRIMARY_REGULAR}
        position='fixed'
        zIndex={LayerDepth.NAVIGATION}
        width='100%'
    >
        <BrandIcon color={ColorCode.PRIMARY_BOLD} boxSize='10'/>
    </Flex>
);
