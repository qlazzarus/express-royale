'use client'
import StoreProvider from '@/providers/StoreProvider'
import { ChakraProvider } from '@chakra-ui/react'
import React from 'react'

export function Providers({ children }: { children: React.ReactNode }) {
    return (
        <StoreProvider>
            <ChakraProvider>{children}</ChakraProvider>
        </StoreProvider>
    )
}
