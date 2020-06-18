import { types, flow, Instance, getParent, getParentOfType } from 'mobx-state-tree';
import { UserModel } from '@/models';
import RootStore from './RootStore';

const AuthStore = types.model('AuthStore', {
    token: types.maybe(types.string),
    currentUser: types.maybe(UserModel)
})
.views((self) => ({
    get logged(): boolean {
        return Boolean(self.token);
    }
}))
.actions(self => {
    const apiService = getParent<typeof RootStore>(self).apiService;
    const login = flow(function* (username?: string, password?: string) {
        apiService.get('sanctum/csrf-cookie')
            .then(() => apiService.post('api/auth/login', { username, password }));
    });

    const register = flow(function* (username?: string, password?: string) {
        apiService.get('sanctum/csrf-cookie')
            .then(() => apiService.post('api/auth/register', { username, password }));
    });

    return {
        login,
        register
    };
});

export interface AuthStoreInterface extends Instance<typeof AuthStore> {};

export default AuthStore;