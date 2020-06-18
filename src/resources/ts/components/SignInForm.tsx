import React from 'react';
import { useTranslation } from 'react-i18next';
import { InputForm } from '@/components';

const SignInForm: React.FC = () => {
    const { t } = useTranslation();

    return (
        <form className="bg-gray-900 rounded w-full md:w-1/2 px-8 pt-6 pb-8 mx-auto my-8">
            <label className="block py-2">
                <InputForm 
                    className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" 
                    type="text" 
                    placeholder={t('USERNAME')}
                />
            </label>
            <label className="block py-2">
                {/* border-red-500 */}
                <InputForm
                    className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    type="password"
                    placeholder={t('PASSWORD')}
                />
                {/*<p className="text-red-500 italic">Please choose a password.</p>*/}
            </label>
            <div className="flex pt-2 pb-4 items-center justify-between">
                <button className="bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    {t('SIGN_IN')}
                </button>
                <a className="inline-block align-baseline text-red-500 hover:text-red-800" href="#">
                    {t('FIND_PASSWORD')}
                </a>
            </div>
            <div className="flex py-2">
                <button className="block w-full bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    {t("SIGN_IN_GITHUB")}
                    <i className="fab fa-github-alt"></i>
                </button>
            </div>
        </form>
    );
};

export default SignInForm;