import React from 'react';
import { useTranslation } from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';

const Main: React.FC = () => {
    const { t } = useTranslation();

    return (
        <>
            <div className={'text-center'}>
                <ReactMarkdown source={t('INTRO')} escapeHtml={false} />
            </div>
            <h1 className={'text-5xl text-center text-red-500'}>{t('TITLE')}</h1>
        </>
    );
}

export default Main;