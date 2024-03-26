import { useStore } from 'react-redux'
import type { AppStore } from '@/types/redux'

const useAppStore: () => AppStore = useStore

export default useAppStore
