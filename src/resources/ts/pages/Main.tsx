import React from 'react';
import { Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import ReactMarkdown from 'react-markdown/with-html';
import { useObserver } from 'mobx-react';
import { SignInForm } from '@/components';
import { Path } from '@/enums';
import { useStore } from '@/hooks';

const TransferMenu = () => {
    const { t } = useTranslation();

    return (
        <div className="bg-gray-900 rounded w-full md:w-1/2 px-8 pt-6 pb-8 mx-auto my-8">
            <Link to={Path.TRANFER} className={'inline-block w-full text-center bg-red-500 hover:bg-red-700 text-white my-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline'}>
                {t('MENU_TRANSFER')}
            </Link>
            <Link to={Path.GAME} className={'inline-block w-full text-center bg-red-500 hover:bg-red-700 text-white my-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline'}>
                {t('MENU_GAME')}
            </Link>
        </div>
    );
}

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
            {logged ? <TransferMenu /> : <SignInForm />}
        </>
    );
}