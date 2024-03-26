'use client'
import React, { useRef } from 'react'
import { Provider } from 'react-redux'
import { makeStore } from '@/stores'
import { AppStore } from '@/types/redux'

export default function StoreProvider({
    children,
}: {
    children: React.ReactNode
}) {
    const storeRef = useRef<AppStore>()
    if (!storeRef.current) {
        // Create the store instance the first time this renders
        storeRef.current = makeStore()
    }

    return <Provider store={storeRef.current}>{children}</Provider>
}
