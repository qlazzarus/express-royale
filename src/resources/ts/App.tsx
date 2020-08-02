import React from 'react';
import { BrowserRouter } from "react-router-dom";
import { Provider } from "mobx-react";

import '@/i18n';
import { FlashMessage, Footer, Header, Loader } from '@/components';
import Router from '@/Router';
import stores from '@/stores';

export default () => {
  return (
    <Provider {...stores}>
      <BrowserRouter>
        <div className={'container mx-auto px-4'}>
          <FlashMessage />
          <Header />
          <section className={'py-8'}>
            <Router />
          </section>
          <Footer />
          <Loader />
        </div>
      </BrowserRouter>
    </Provider>
  );
};
