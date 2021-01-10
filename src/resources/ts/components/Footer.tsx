import React from 'react';
import {Box, Text} from '@chakra-ui/react';
import {useTranslation} from 'react-i18next';

export default (): JSX.Element => {
    const {t} = useTranslation();

    return (
        <Box p='4' textAlign='right'>
            <Text mx='1'>
                <a href="http://github.com/monoless/express-royale" target="_blank" rel="noreferrer">
                    {t('FOOTER_COPYRIGHT')}
                </a>
            </Text>
            <Text mx='1'>
                {t('FOOTER_THANKS')}
            </Text>
        </Box>
    );
}
