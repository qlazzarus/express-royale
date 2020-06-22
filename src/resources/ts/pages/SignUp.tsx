import React, { useCallback } from 'react';
import { useTranslation } from 'react-i18next';
import { Controller } from 'react-hook-form';
import { InputForm, LabelError } from '@/components';
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
            onSubmit={useCallback(onSubmit, [])}
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
                {errors.username && <LabelError error={errors.username} />}
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
                {errors.email && <LabelError error={errors.email} />}
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
                {errors.password && <LabelError error={errors.password} />}
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
                {errors.passwordConfirm && <LabelError error={errors.passwordConfirm} />}
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
