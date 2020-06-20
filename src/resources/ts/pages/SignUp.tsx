import React from 'react';
import { useTranslation } from 'react-i18next';
import { Controller } from 'react-hook-form';
import { InputForm } from '@/components';
import { useSignUpForm } from '@/forms';
import { useStore } from '@/helpers';

const SignUp: React.FC = () => {
    const { authStore } = useStore();
    const { t } = useTranslation();
    const { control, errors, onSubmit } = useSignUpForm();

    if (authStore.isLogged) {
        // TODO redirect
    }

    return (
        <form
            className={'bg-gray-900 rounded w-full md:w-1/2 px-8 pt-6 pb-8 mx-auto my-8'}
            onSubmit={onSubmit}
        >
            <div className="py-2">
                <label>
                    <Controller
                        name={'username'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="text"
                                placeholder={t('USERNAME')}
                            />
                        )}
                        control={control}
                    />
                </label>
                {errors.username && <p className="text-red-500 italic">{errors.username}</p>}
            </div>
            <div className="py-2">
                <label>
                    <Controller
                        name={'email'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="text"
                                placeholder={t('EMAIL')}
                            />
                        )}
                        control={control}
                    />
                </label>
                {errors.email && <p className="text-red-500 italic">{errors.email}</p>}
            </div>
            <div className="py-2">
                <label>
                    <Controller
                        name={'password'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="password"
                                placeholder={t('PASSWORD')}
                            />
                        )}
                        control={control}
                    />

                </label>
                {errors.password && <p className="text-red-500 italic">{errors.password}</p>}
            </div>
            <div className="py-2">
                <label>
                    <Controller
                        name={'passwordConfirm'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="password"
                                placeholder={t('PASSWORD_CONFIRM')}
                            />
                        )}
                        control={control}
                    />
                </label>
                {errors.passwordConfirm && <p className="text-red-500 italic">{errors.passwordConfirm}</p>}
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
