import React from 'react';
import { useTranslation } from 'react-i18next';

export default () => {
    const { t } = useTranslation();

    return (
        <footer className={'p-4'}>
            <div className={'flex flex-col items-end'}>
                <a href={'http://github.com/monoless/express-royale'} target={'_blank'}>{t('FOOTER_COPYRIGHT')}</a>    
                <span>{t('FOOTER_THANKS')}</span>
            </div>
        </footer>
    );
}