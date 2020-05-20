import React from 'react';
import { BrowserRouter } from "react-router-dom";

import { Header, Footer } from '@/components';
import { Provider, RootStoreInstance as stores } from '@/Provider';
import Router from '@/Router';

const App: React.FC = () => {
  return (
    <Provider value={stores}>
      <BrowserRouter>
        <div className={'container mx-auto px-4'}>
          <Header />
          <section className={'py-8'}>
            <div className={'w-full max-w-sm mx-auto'}>
              <Router />
            </div>
          </section>
          <Footer />
        </div>
      </BrowserRouter>
    </Provider>
  );
};

export default App;