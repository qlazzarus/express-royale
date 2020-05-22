import { types, Instance } from 'mobx-state-tree';
import { UserModel } from '@/models';

const AuthStore = types.model('AuthStore', {
    token: types.maybe(types.string),
    currentUser: types.maybe(UserModel)
})

export interface AuthStoreInterface extends Instance<typeof AuthStore> {};

export default AuthStore;