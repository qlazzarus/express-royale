import { types, flow, Instance, getParent, getParentOfType } from 'mobx-state-tree';
import { UserModel } from '@/models';
import RootStore from './RootStore';

const AuthStore = types.model('AuthStore', {
    token: types.maybe(types.string),
    currentUser: types.maybe(UserModel)
})
.views((self) => ({
    get logged(): boolean {
        if (!self.token || !self.currentUser) return false;
        return false;
    }
}))
.actions(self => {
    const apiService = getParent<typeof RootStore>(self).apiService;
    const login = flow(function* (username?: string, password?: string) {
        apiService.get('sanctum/csrf-cookie')
            .then(() => {

            });
    });

    return {
        login
    };
});
/*
    const login = flow(function*(email: string, password: string) {
        const userResponse: UserResponse = yield userClient.login(email, password);
  
        persistToken(userResponse.user.token);
  
        self.currentUser = userResponse.user;
    });
*/

export interface AuthStoreInterface extends Instance<typeof AuthStore> {};

export default AuthStore;