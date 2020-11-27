import React from 'react';
import { useTranslation } from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';
import { Box, Flex, Heading } from '@chakra-ui/react';

export default (): JSX.Element => {
    const { t } = useTranslation();

    return (
        <Flex py='4' direction='column' justifyContent='center' alignItems='center'>
            <Box textAlign='center'>
                <ReactMarkdown source={t('INTRO') || ''} escapeHtml={false} />
            </Box>
            <Heading size='4xl' textAlign='center' color='red.500'>
                {t('TITLE')}
            </Heading>
        </Flex>
    );
};
