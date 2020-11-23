import React from 'react';
import { NavBar } from '@/components';

export default ({ children }: { children: React.ReactNode }): JSX.Element => {
    return  (
        <>
            <NavBar/>
            {children}
        </>
    );
}