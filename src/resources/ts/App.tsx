import React from 'react';
import { BrowserRouter } from 'react-router-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';
import { ThemeProvider } from '@material-ui/core';

import '@/i18n';
import { GlobalStyles } from '@/components';
import reducers from '@/stores';
import theme from '@/theme';
import Router from '@/Router';

const store = createStore(reducers);

export default (): JSX.Element => {
    return (
        <Provider store={store}>
            <ThemeProvider theme={theme}>
                <GlobalStyles />
                <BrowserRouter>
                    <Router />
                </BrowserRouter>
            </ThemeProvider>
        </Provider>
    );
}
