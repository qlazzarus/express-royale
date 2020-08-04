import React from 'react';
import { SignInForm } from '@/components';
import { useObserver } from 'mobx-react';
import { useStore } from '@/hooks';

export default (): JSX.Element => {
  const auth = useStore('auth');
  const logged = useObserver(() => auth.logged);
  // const logged = auth.logged;

  if (logged) {
    // TODO redirect
  }

  return <SignInForm />;
};
