import { useSelector, shallowEqual } from 'react-redux'
import {RootState} from "@/reducers";

export default (selector: (state: RootState) => unknown) => useSelector(selector, shallowEqual);
