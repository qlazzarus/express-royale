import { types } from 'mobx-state-tree';
import { UserModel } from '@/models';

const AuthStore = types.model('AuthStore', {
    token: types.maybeNull(types.string),
    currentUser: types.maybeNull(UserModel)
})

export default AuthStore;
// https://github.com/airyboy/react-mobx-state-tree-typescript-realworld-example-app/blob/master/src/stores/AuthStore.ts
/*
TS2322: Type 'IModelType<{ 
    authStore: IOptionalIType<IModelType<{ 
        token: IMaybeNull<ISimpleType<string>>; 
        currentUser: IMaybe<IModelType<{ 
            id: ISimpleType<string>;
            name: ISimpleType<string>; 
        }, {}, _NotCustomized, _NotCustomized>>; }, {}, _NotCustomized, _NotCustomized>, [...]>; }, {}, _NotCustomized, _NotCustomized>' is not assignable to type '{ authStore: { token: string | null; currentUser: ({ id: string; name: string; } & NonEmptyObject & IStateTreeNode<IMaybe<IModelType<{ id: ISimpleType<string>; name: ISimpleType<string>; }, {}, _NotCustomized, _NotCustomized>>>) | undefined; } & NonEmptyObject & IStateTreeNode<...>; } & NonEmptyObject & IStateTreeNo...'.
  Property 'authStore' is missing in type 'IModelType<{ authStore: IOptionalIType<IModelType<{ token: IMaybeNull<ISimpleType<string>>; currentUser: IMaybe<IModelType<{ id: ISimpleType<string>; name: ISimpleType<string>; }, {}, _NotCustomized, _NotCustomized>>; }, {}, _NotCustomized, _NotCustomized>, [...]>; }, {}, _NotCustomized, _NotCustomized>' but required in type '{ authStore: { token: string | null; currentUser: ({ id: string; name: string; } & NonEmptyObject & IStateTreeNode<IMaybe<IModelType<{ id: ISimpleType<string>; name: ISimpleType<string>; }, {}, _NotCustomized, _NotCustomized>>>) | undefined; } & NonEmptyObject & IStateTreeNode<...>; }
*/