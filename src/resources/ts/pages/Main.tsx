import React from 'react';
import { useTranslation } from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';
import { useObserver } from 'mobx-react';
import { SignInForm } from '@/components';
import { useStore } from '@/hooks';

export default () => {
    const auth = useStore('auth');
    const { t } = useTranslation();
    const logged = useObserver(() => auth.logged);

    return (
        <>
            <div className={'text-center'}>
                <ReactMarkdown source={t('INTRO')} escapeHtml={false} />
            </div>
            <h1 className={'text-5xl text-center text-red-500'}>{t('TITLE')}</h1>
            {logged ? <div>hello world</div> : <SignInForm />}
        </>
    );
}