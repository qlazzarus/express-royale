import React, { StrictMode } from 'react';
import { BrowserRouter } from 'react-router-dom';
import { Provider } from 'react-redux';
import { ChakraProvider } from "@chakra-ui/react";

import '@/i18n';
import { MainLayout } from '@/components';
import store from '@/configureStore';
import Router from '@/Router';

export default (): JSX.Element => {
    return (
        <StrictMode>
            <Provider store={store()}>
                <ChakraProvider>
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
