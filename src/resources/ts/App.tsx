import React, {StrictMode, useEffect} from 'react';
import {BrowserRouter} from 'react-router-dom';
import {Provider} from 'react-redux';
import {PersistGate} from 'redux-persist/integration/react';
import {ChakraProvider} from "@chakra-ui/react";

import '@/i18n';
import {initialize} from '@/actions';
import {MainLayout} from '@/components';
import configureStore from '@/configureStore';
import {apiClient} from "@/helpers";
import Router from '@/Router';

const client = apiClient();

export default (): JSX.Element => {
    const {store, persistor} = configureStore(client);
    useEffect(() => {
        store.dispatch(initialize());
    }, []);

    return (
        <StrictMode>
            <Provider store={store}>
                <PersistGate loading={null} persistor={persistor}>
                    <ChakraProvider>
                        <BrowserRouter>
                            <MainLayout>
                                <Router/>
                            </MainLayout>
                        </BrowserRouter>
                    </ChakraProvider>
                </PersistGate>
            </Provider>
        </StrictMode>
    );
}
