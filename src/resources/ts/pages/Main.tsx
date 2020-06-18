import React from 'react';
import { useTranslation } from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';
import { SignInForm } from '@/components';
import { useStore } from '@/helpers';

const Main: React.FC = () => {
    const { authStore } = useStore();
    const { t } = useTranslation();

    return (
        <>
            <div className={'text-center'}>
                <ReactMarkdown source={t('INTRO')} escapeHtml={false} />
            </div>
            <h1 className={'text-5xl text-center text-red-500'}>{t('TITLE')}</h1>
            {authStore.logged ? <div>hello world</div> : <SignInForm />}
        </>
    );
}

export default Main;