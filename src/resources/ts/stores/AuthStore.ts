import { types, flow, Instance, getParent, getParentOfType } from 'mobx-state-tree';
import { UserModel } from '@/models';
import RootStore from './RootStore';

const AuthStore = types.model('AuthStore', {
    errors: types.maybeNull(types.array(types.string)),
    redriectTo: types.maybeNull(types.string),
    token: types.maybeNull(types.string),
    user: types.maybeNull(UserModel),
})
.views((self) => ({
    get isLogged(): boolean {
        return Boolean(self.token);
    }
}))
.actions(self => {
    const apiService = getParent<typeof RootStore>(self).apiService;

    const clearErrors = () => {
        self.errors = null;
    };

    const signIn = flow(function* (username?: string, password?: string) {
        apiService.get('sanctum/csrf-cookie')
            .then(() => apiService.post('api/auth/login', { username, password }));
    });

    const signUp = flow(function* (username?: string, password?: string) {
        apiService.get('sanctum/csrf-cookie')
            .then(() => apiService.post('api/auth/register', { username, password }));
    });

    const logout = () => {
        self.errors = null;
        self.redriectTo = null;
        self.token = null;
        self.user = null;
    }

    return {
        clearErrors,
        signIn,
        signUp,
        logout
    };
});

export interface AuthStoreInterface extends Instance<typeof AuthStore> {};

export default AuthStore;