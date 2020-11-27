import React from 'react';
import { Flex } from '@chakra-ui/react';
import BrandIcon from './BrandIcon';

export default () => (
    <Flex alignItems='center' p='2' backgroundColor='red.300' position='sticky' zIndex='2'>
        <BrandIcon color='red.500' boxSize='10' />
    </Flex>
);