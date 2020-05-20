import React, { Component } from 'react';
import { Switch, Route, Redirect } from "react-router-dom";
import { Main } from '@/pages';

const PrivateRoute = ({ component, ...rest }: { component: Component }) => {
    const logged: boolean = true;
    return (
        <Route
            {...rest}
            render={props => logged ? <Component {...props} /> : <Redirect to={{ pathname: '/', state: { from: props.location } }} />}
        />
    );
};

const Router: React.FC = () => {
    return (
        <Switch>
            <Route path={'/'} exact component={Main} />
        </Switch>
    );
};

export default Router;