import React from 'react';
import { Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';
import { Box } from '@chakra-ui/react';

export default (): JSX.Element => {
    const { t } = useTranslation();

    return (
        <>
            <Box>
                <ReactMarkdown source={t('INTRO') || ''} escapeHtml={false} />
            </Box>
            <h1 className="text-5xl text-center text-red-500">{t('TITLE')}</h1>
        </>
    );
};
