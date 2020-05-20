import React from 'react';
import { useTranslation } from 'react-i18next';

const Main: React.FC = () => {
    const { t } = useTranslation();

    return (
        <>
            <p className={'text-center'}>
                <br />
                이 나라에는 어떤『프로그램』이 있다.
                <br />
                <span className={'text-red-500'}>『공화국 전투실험 제 육십팔번 프로그램』</span>
                <br />
                전국의 중학교 3학년 반에서 무작위로 한반을 선별.
                <br />
                클래스 메이트가 <span className={'text-red-500'}>『최후의 한명』</span>이 될때까지 싸운다.
                <br />
                최후에 살아남는 학생만이 집으로 돌아갈수 있다는 <span className={'text-red-500'}>『살인게임』</span>이었다...
                <br />
                .
                <br />
                .
                <br />
                .
                <br />
                .
                <br />
                .
            </p>
            <h1 className={'text-xl text-center text-red-500'}>{t('TITLE')}</h1>
        </>
    );
}

export default Main;