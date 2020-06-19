import React, { useState } from 'react';
import { Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import { useStore } from '@/helpers';

const Header: React.FC = () => {
    const { t } = useTranslation();
    const { authStore } = useStore();
    const [visible, setVisible] = useState(false);

    return (
        <div className={'sticky w-full bg-black z-10 top-0'}>
            <nav className={'container mx-auto flex flex-wrap items-center justify-between p-4'}>
                <div className={'w-auto lg:w-1/5 lg:text-center'}>
                    <Link to={'/'} className={'text-4xl text-red-500 font-bold'}>{t('TITLE')}</Link>
                </div>
                <div className={'block lg:hidden'} onClick={() => setVisible(!visible)}>
                    <button className={'navbar-burger flex items-center py-2 px-3 text-red-500 rounded border border-red-500'}>
                        <svg className={'fill-current h-3 w-3'} viewBox={'0 0 20 20'} xmlns={'http://www.w3.org/2000/svg'}>
                            <title>Menu</title>
                            <path d={'M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z'} />
                        </svg>
                    </button>
                </div>
                <div className={`navbar-menu w-full ${visible ? 'flex' : 'hidden'} flex-col justify-around items-center lg:flex lg:flex-row lg:w-4/5`}>
                    {!authStore.isLogged && <Link to={'/signin'} className={"text-red-500 hover:text-red-700 my-3"}>{t('MENU_LOGIN')}</Link>}
                    {authStore.isLogged && <Link to={'/transfer'} className={"text-red-500 hover:text-red-700 my-3"}>{t('MENU_TRANSFER')}</Link>}
                    <Link to={'/rule'} className={"text-red-500 hover:text-red-700 my-3"}>{t('MENU_RULE')}</Link>
                    <Link to={'/rank'} className={"text-red-500 hover:text-red-700 my-3"}>{t('MENU_RANK')}</Link>
                    <Link to={'/news'} className={"text-red-500 hover:text-red-700 my-3"}>{t('MENU_NEWS')}</Link>
                    <Link to={'/winner'} className={"text-red-500 hover:text-red-700 my-3"}>{t('MENU_WINNER')}</Link>
                </div>
            </nav>
        </div>  
    );
}

export default Header;