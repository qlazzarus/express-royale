import React from 'react';
import { BrowserRouter } from "react-router-dom";
import { MobXProviderContext } from "mobx-react";

import '@/i18n';
import { Header, Footer } from '@/components';
import Router from '@/Router';
import stores from '@/stores';

const { Provider } = MobXProviderContext;

const App: React.FC = () => {
  return (
    <Provider value={stores}>
      <BrowserRouter>
        <div className={'container mx-auto px-4'}>
          <Header />
          <section className={'py-8'}>
            <Router />
          </section>
          <Footer />
        </div>
      </BrowserRouter>
    </Provider>
  );
};

export default App;
