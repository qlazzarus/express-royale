import { types, flow, Instance, getParent, getParentOfType } from 'mobx-state-tree';
import { SignUpFormData } from "@/forms";
import { UserModel } from '@/models';
import RootStore from './RootStore';
import { ApiServiceInterface } from '@/services';

const AuthStore = types.model('AuthStore', {
        errors: types.maybeNull(types.array(types.string)),
        redirectTo: types.maybeNull(types.string),
        token: types.maybeNull(types.string),
        user: types.maybeNull(UserModel),
    })
    .views((self) => ({
        get isLogged(): boolean {
            return Boolean(self.token);
        }
    }))
    .actions(self => {
        const apiService: ApiServiceInterface = getParent<typeof RootStore>(self).apiService;

        const signIn = flow(function* (username?: string, password?: string) {
            apiService.get('sanctum/csrf-cookie')
                .then(() => apiService.post('api/auth/login', {username, password}));
        });

        const signUp = flow(function* (data: SignUpFormData) {
            return apiService.post('api/auth/register', data);
        });

        const logout = () => {
            self.errors = null;
            self.redirectTo = null;
            self.token = null;
            self.user = null;
        }

        return {
            signIn,
            signUp,
            logout
        };
    });

export interface AuthStoreInterface extends Instance<typeof AuthStore> {}

export default AuthStore;
