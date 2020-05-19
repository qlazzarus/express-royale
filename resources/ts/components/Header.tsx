import React from 'react';
import { Link } from 'react-router-dom';

const Header: React.FC = () => {
    return (
        <nav className={'flex flex-wrap items-center justify-between p-4'}>
            <div className={'w-auto lg:w-1/5 lg:text-center'}>
                <Link to={'/'} className={'text-xl text-red-500 font-bold'}>Express Royale</Link>
            </div>
            <div className={'block lg:hidden'}>
                <button className={'navbar-burger flex items-center py-2 px-3 text-red-500 rounded border border-red-500'}>
                    <svg className={'fill-current h-3 w-3'} viewBox={'0 0 20 20'} xmlns={'http://www.w3.org/2000/svg'}>
                        <title>Menu</title>
                        <path d={'M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z'} />
                    </svg>
                </button>
            </div>
            <div className={'navbar-menu w-full hidden flex-col justify-around items-center lg:flex lg:flex-row lg:w-4/5'}>
                <Link to={'/login'} className={"text-red-500 hover:text-red-700 my-3"}>로그인</Link>
                <Link to={'/transfer'} className={"text-red-500 hover:text-red-700 my-3"}>전학수속</Link>
                <Link to={'/manual'} className={"text-red-500 hover:text-red-700 my-3"}>메뉴얼</Link>
                <Link to={'/rank'} className={"text-red-500 hover:text-red-700 my-3"}>생존자 리스트</Link>
                <Link to={'/news'} className={"text-red-500 hover:text-red-700 my-3"}>진행사항</Link>
                <Link to={'/winner'} className={"text-red-500 hover:text-red-700 my-3"}>역대 우승자</Link>
            </div>
        </nav>
    );
}

export default Header;