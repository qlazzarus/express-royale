import React from 'react';
import { Route, Redirect } from 'react-router-dom';
import { useStore } from '@/hooks';

const PrivateRoute: React.FC<{ component: React.FC; path: string; exact: boolean; }> = props => {
    const auth = useStore('auth');

    return auth.isLogged ?
        <Route path={props.path} exact={props.exact} component={props.component} /> : 
        <Redirect to={{ pathname: "/signin", state: { from: props.path } }}  />;
}

export default PrivateRoute;