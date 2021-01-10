import {useSelector} from 'react-redux';
import {RootState} from '@/reducers';

export default () => useSelector((state: RootState) => Boolean(state.account.token));
