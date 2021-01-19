import { bindActionCreators } from 'redux'
import { useDispatch } from 'react-redux'
import { useMemo } from 'react'

export default (actions: any, deps?: any) => {
    const dispatch = useDispatch()
    return useMemo(
        () => {
            if (Array.isArray(actions)) {
                return actions.map(a => bindActionCreators(a, dispatch))
            }
            return bindActionCreators(actions, dispatch)
        },
        deps ? [dispatch, ...deps] : [dispatch]
    )
}
