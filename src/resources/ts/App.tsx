import React, { StrictMode } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { Provider } from 'react-redux';
import { createStore } from 'redux';
import { CSSReset, ChakraProvider } from "@chakra-ui/core";

import '@/i18n';
import { MainLayout } from '@/components';
import reducers from '@/stores';
import theme from '@/theme';
import Router from '@/Router';

const store = createStore(reducers);

export default (): JSX.Element => {
    return (
        <StrictMode>
            <Provider store={store}>
                <ChakraProvider theme={theme}>
                    <CSSReset />
                    <BrowserRouter>
                        <MainLayout>
                            <Router />
                        </MainLayout>
                    </BrowserRouter>
                </ChakraProvider>
            </Provider>
        </StrictMode>
    );
}
