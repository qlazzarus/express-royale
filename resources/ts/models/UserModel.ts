import { types } from 'mobx-state-tree';

const UserModel = types.model('UserModel', {
    id: types.identifier,
    name: types.string
});

export default UserModel;