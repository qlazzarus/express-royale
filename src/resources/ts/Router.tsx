import React from 'react';
import {Switch, Route} from 'react-router-dom';
// import { PrivateRoute } from '@/components';
import {Path} from '@/enums';
import {Main /* , NotFound, SignIn, SignUp */} from '@/pages';


export default (): JSX.Element => {
    return (
        <Switch>
            <Route path={Path.INDEX} exact component={Main}/>
        </Switch>
    );
    /*
  return (
    <Switch>
      <Route path={Path.SIGN_IN} exact component={SignIn} />
      <Route path={Path.SIGN_UP} exact component={SignUp} />
      <PrivateRoute path={Path.GAME} exact component={Main} />
      <PrivateRoute path={Path.TRANSFER} exact component={Main} />
      <PrivateRoute path={Path.ACCOUNT} exact component={Main} />
      <Route path={Path.RULE} exact component={Main} />
      <Route path={Path.RULE} exact component={Main} />
      <Route path={Path.NEWS} exact component={Main} />
      <Route path={Path.WINNER} exact component={Main} />
      <NotFound />
    </Switch>
  );
  */
};
