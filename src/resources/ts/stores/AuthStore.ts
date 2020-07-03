import { types, flow, Instance, getParent } from 'mobx-state-tree';
import { SignUpFormData } from "@/forms";
import { UserModel } from '@/models';
import RootStore from './RootStore';
import { ApiServiceInterface } from '@/services';

type SanctumToken = {
    token: string
}

const AuthStore = types.model('AuthStore', {
        errors: types.maybeNull(types.array(types.string)),
        redirectTo: types.maybeNull(types.string),
        token: types.maybeNull(types.string),
        user: types.maybeNull(UserModel),
        pending: types.boolean
    })
    .views((self) => ({
        get isLogged(): boolean {
            return Boolean(self.token);
        }
    }))
    .actions(self => {
        const apiService: ApiServiceInterface = getParent<typeof RootStore>(self).apiService;

        const signIn = flow(function* (username?: string, password?: string) {
            /*
            self.pending = true;

            apiService.get('sanctum/csrf-cookie')
                .then(() => apiService.post('api/auth/login', {username, password}))
                .finally(() => self.pending = false);
            */
        });

        const signUp = flow(function* (data: SignUpFormData) {
            self.pending = true;

            try {
                const response: SanctumToken = yield apiService.post('api/auth/register', data);
                self.pending = false;
                self.token = response.token;
            } catch (error) {
                console.log(error);
            }
        });

        const logout = () => {
            self.errors = null;
            self.redirectTo = null;
            self.token = null;
            self.user = null;
            self.pending = false;
        }

        return {
            signIn,
            signUp,
            logout
        };
    });

export interface AuthStoreInterface extends Instance<typeof AuthStore> {}

export default AuthStore;
