import React from 'react';
import { Provider, rootStore } from '@/models';
import { Footer } from '@/components';

const App: React.FC = () => {
  return (
    <Provider value={rootStore}>
      <div className={'container mx-auto py-2'}>
        <Footer />
      </div>
    </Provider>
  );
};

export default App;