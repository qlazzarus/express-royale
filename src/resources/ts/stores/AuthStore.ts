import { ApiService } from "@/services";

/*
import { types, flow, Instance, getParent } from 'mobx-state-tree';
import { SignInFormData, SignUpFormData } from "@/forms";
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
    })
    .views((self) => ({
        get isLogged(): boolean {
            return Boolean(self.token);
        }
    }))
    .actions(self => {
        const apiService: ApiServiceInterface = getParent<typeof RootStore>(self).apiService;

        const signIn = flow(function* (data: SignInFormData) {
            try {
                yield apiService.get('sanctum/csrf-token');
                const response: SanctumToken = yield apiService.post('api/auth/login', data);
                self.token = response.token;
            } catch (error) {
                console.log(error);
            }
        });

        const signUp = flow(function* (data: SignUpFormData) {
            try {
                const response: SanctumToken = yield apiService.post('api/auth/register', data);
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
        }

        return {
            signIn,
            signUp,
            logout
        };
    });

export interface AuthStoreInterface extends Instance<typeof AuthStore> {}

export default AuthStore;
*/
class AuthStore {
    
    private connector: ApiService;

    constructor() {
        this.connector = new ApiService();
    }
}

export default new AuthStore();