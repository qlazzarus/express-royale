import AppStore, { AppStoreInterface } from './AppStore';
import AuthStore, { AuthStoreInterface } from './AuthStore';

export { AppStore, AuthStore };
export type { AppStoreInterface, AuthStoreInterface };
export default { app: AppStore, auth: AuthStore };