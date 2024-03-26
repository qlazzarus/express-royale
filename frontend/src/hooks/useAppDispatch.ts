import { useDispatch } from 'react-redux'
import type { AppDispatch } from '@/types/redux'

const useAppDispatch: () => AppDispatch = useDispatch

export default useAppDispatch
