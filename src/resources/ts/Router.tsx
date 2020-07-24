import React from 'react';
import { Switch, Route } from "react-router-dom";
import { PrivateRoute } from '@/components';
import { Main, SignIn, SignUp } from '@/pages';

export default () => {
    return (
        <Switch>
            <Route path={'/'} exact component={Main} />
            <Route path={'/signin'} exact component={SignIn} />
            <Route path={'/signup'} exact component={SignUp} />
            <PrivateRoute path={'/game'} exact component={Main} />
            <PrivateRoute path={'/transfer'} exact component={Main} />
            <PrivateRoute path={'/account'} exact component={Main} />
            <Route path={'/rule'} exact component={Main} />
            <Route path={'/rank'} exact component={Main} />
            <Route path={'/news'} exact component={Main} />
            <Route path={'/winner'} exact component={Main} />
        </Switch>
    );
};