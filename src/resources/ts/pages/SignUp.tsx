import React from 'react';
import { useTranslation } from 'react-i18next';
import { InputForm } from '@/components';
import { useStore } from '@/helpers';

/*
https://github.com/DmytriyZahrebelny/my-medium/blob/55d46f45d07c5b66f256bd3200a22dd227fe09e9/src/components/Auth/useAuthHooks.tsx
https://github.com/DmytriyZahrebelny/my-medium/blob/55d46f45d07c5b66f256bd3200a22dd227fe09e9/src/components/Auth/SignUp/SignUp.tsx
*/
const SignUp: React.FC = () => {
    const { authStore } = useStore();
    const { t } = useTranslation();

    const handleSignUp = () => {

    }

    if (authStore.isLogged) {
        // TODO redirect
    }

    return (
        <form 
            className={'bg-gray-900 rounded w-full md:w-1/2 px-8 pt-6 pb-8 mx-auto my-8'}
            onSubmit={handleSignUp}
        >
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
                <label>
                    <InputForm
                        className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="text"
                        placeholder={t('EMAIL')}
                    />
                </label>
            </div>
            <div className="py-2">
                <label>
                    <InputForm
                        className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="password"
                        placeholder={t('PASSWORD')}
                    />
                </label>
            </div>
            <div className="py-2">
                <label>
                    <InputForm
                        className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        type="password"
                        placeholder={t('PASSWORD_CONFIRM')}
                    />
                </label>
            </div>
            <div className="flex pt-8 pb-2 items-center justify-end">
                <button 
                    className={"bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"}
                    type={"submit"}
                >
                    {t('SIGN_UP')}
                </button>
            </div>
        </form>
    );
}

export default SignUp;