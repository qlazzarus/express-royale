import React from 'react';
import {Route, Redirect} from 'react-router-dom';
import {Path} from '@/enums';

type PrivateRoutePropType = {
    component: React.FC;
    path: string;
    exact: boolean;
};

export default ({path, exact, component}: PrivateRoutePropType): JSX.Element => {
    // const auth = useStore('auth');
    // const logged = useObserver(() => auth.logged);
    // const logged = auth.logged;
    const logged = true;

    return logged ? (
        <Route path={path} exact={exact} component={component}/>
    ) : (
        <Redirect to={{pathname: Path.SIGN_IN, state: {from: path}}}/>
    );
};
