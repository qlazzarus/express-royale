import React from 'react';
import { Route, Redirect } from 'react-router-dom';
import { useStore } from '@/helpers';

const PrivateRoute: React.FC<{ component: React.FC; path: string; exact: boolean; }> = props => {
    const { authStore } = useStore();

    return authStore.logged ? 
        <Route path={props.path} exact={props.exact} component={props.component} /> : 
        <Redirect to={{ pathname: "/login", state: { from: props.path } }}  />;
}

export default PrivateRoute;