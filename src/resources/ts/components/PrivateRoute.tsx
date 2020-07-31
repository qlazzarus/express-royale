import React, { FC } from 'react';
import { Route, Redirect } from 'react-router-dom';
import { useObserver } from 'mobx-react';
import { useStore } from '@/hooks';

const PrivateRoute: FC<{ component: FC; path: string; exact: boolean; }> = props => {
    const auth = useStore('auth');
    const logged = useObserver(() => auth.logged);

    return logged ?
        <Route path={props.path} exact={props.exact} component={props.component} /> : 
        <Redirect to={{ pathname: "/signin", state: { from: props.path } }}  />;
}

export default PrivateRoute;