import React, { useCallback } from 'react';
import { useTranslation } from 'react-i18next';
import { Controller } from 'react-hook-form';
import { useObserver } from 'mobx-react';
import { ErrorMessage } from '@hookform/error-message';
import { InputForm, LabelError } from '@/components';
import { Validator } from '@/enums';
import { useForm, useStore } from '@/hooks';

export default () => {
    const auth = useStore('auth');
    const { t } = useTranslation();
    const { control, errors, onSubmit, pending } = useForm(Validator.SIGN_UP, auth.signUp.bind(auth));
    const logged = useObserver(() => auth.logged);

    if (logged) {
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
                                disabled={pending}
                                placeholder={t('USERNAME')}
                            />
                        )}
                        control={control}
                    />
                </label>
                <ErrorMessage errors={errors} name={'username'} render={LabelError} />
            </div>
            <div className="py-2">
                <label>
                    <Controller
                        name={'email'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="text"
                                disabled={pending}
                                placeholder={t('EMAIL')}
                            />
                        )}
                        control={control}
                    />
                </label>
                <ErrorMessage errors={errors} name={'email'} render={LabelError} />
            </div>
            <div className="py-2">
                <label>
                    <Controller
                        name={'password'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="password"
                                disabled={pending}
                                placeholder={t('PASSWORD')}
                            />
                        )}
                        control={control}
                    />

                </label>
                <ErrorMessage errors={errors} name={'password'} render={LabelError} />
            </div>
            <div className="py-2">
                <label>
                    <Controller
                        name={'passwordConfirm'}
                        as={(
                            <InputForm
                                className="shadow appearance-none bg-gray-700 border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                type="password"
                                disabled={pending}
                                placeholder={t('PASSWORD_CONFIRM')}
                            />
                        )}
                        control={control}
                    />
                </label>
                <ErrorMessage errors={errors} name={'passwordConfirm'} render={LabelError} />
            </div>
            <div className="flex pt-8 pb-2 items-center justify-end">
                <button
                    className={"bg-red-500 hover:bg-red-700 text-white py-2 px-4 rounded focus:outline-none focus:shadow-outline"}
                    type={"submit"}
                    disabled={pending}
                >
                    {t('SIGN_UP')}
                </button>
            </div>
        </form>
    );
}
