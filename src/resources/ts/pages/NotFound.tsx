import React, {useEffect, useRef} from 'react';
import {useTranslation} from 'react-i18next';
import {AspectRatio, Flex, Heading} from '@chakra-ui/react';

import {ColorCode} from "@/enums";

export default (): JSX.Element => {
    const canvasRef = useRef(null);
    const {t} = useTranslation();

    useEffect(() => {
        console.log(canvasRef.current);
    });

    return (
        <Flex py='4' direction='column' justifyContent='center' alignItems='center'>
            <AspectRatio m={4} width='50vw' maxW='sm' ratio={1}>
                <canvas ref={canvasRef} />
            </AspectRatio>
            <Heading textAlign='center' color={ColorCode.PRIMARY_BOLD}>
                {t('NOT_FOUND')}
            </Heading>
        </Flex>
    );
};
