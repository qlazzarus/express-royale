import React from 'react';
import { BrowserRouter, Route, Switch, Link } from "react-router-dom";
import { Provider, rootStore } from '@/models';
import { Header, Footer } from '@/components';

const App: React.FC = () => {
  return (
    <Provider value={rootStore}>
      <BrowserRouter>
        <div className={'container mx-auto px-4'}>
          <Header />
          <Footer />
        </div>
      </BrowserRouter>      
    </Provider>
  );
};

export default App;