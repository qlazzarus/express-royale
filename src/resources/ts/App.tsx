import React from 'react';
import { BrowserRouter } from "react-router-dom";

import '@/i18n';
import { Header, Footer } from '@/components';
import { Provider, stores } from '@/Provider';
import Router from '@/Router';

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
