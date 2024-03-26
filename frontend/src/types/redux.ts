import { makeStore } from '@/stores'

// infer the type of makeStore
export type AppStore = ReturnType<typeof makeStore>

// infer the `RootState` and `AppDispatch` types from the store itself
export type RootState = ReturnType<AppStore['getState']>
export type AppDispatch = AppStore['dispatch']
