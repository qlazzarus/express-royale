import React from 'react';
import { Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import { InputForm } from '@/components';

const SignInForm: React.FC = () => {
    const { t } = useTranslation();

    return (
        <form className="bg-gray-900 rounded w-full md:w-1/2 px-8 pt-6 pb-8 mx-auto my-8">
            <div className="py-2">
                <label>
                    <InputForm
                        className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="text"
                        placeholder={t('USERNAME')}
                    />
                </label>
            </div>
            <div className="py-2">
                {/* border-red-500 */}
                <div className={'text-right'}>
                    <Link to={'/find-password'} className={'inline-block align-baseline text-red-500 hover:text-red-800'}>
                        {t('FIND_PASSWORD')}
                    </Link>
                </div>
                <label>
                    <InputForm
                        className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="password"
                        placeholder={t('PASSWORD')}
                    />
                </label>
                {/*<p className="text-red-500 italic">Please choose a password.</p>*/}
            </div>
            <div className="flex pt-2 pb-8 items-center justify-between">
                <button className="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    {t('SIGN_IN')}
                </button>
                <Link to={'/signup'} className={'inline-block align-baseline text-red-500 hover:text-red-800'}>{t('SIGN_UP')}</Link>
            </div>
            <div className="flex py-2">
                <button className="flex w-full items-center justify-between bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    {t("SIGN_IN_GITHUB")}
                    <i className="fab fa-github-alt" />
                </button>
            </div>
            <div className="flex py-2">
                <button className="flex w-full items-center justify-between bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    {t("SIGN_IN_FACEBOOK")}
                    <i className="fab fa-facebook-square" />
                </button>
            </div>
            <div className="flex py-2">
                <button className="flex w-full items-center justify-between bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    {t("SIGN_IN_GOOGLE")}
                    <i className="fab fa-google" />
                </button>
            </div>
        </form>
    );
};

export default SignInForm;
