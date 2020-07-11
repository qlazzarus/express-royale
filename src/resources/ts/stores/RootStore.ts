import { types, Instance } from "mobx-state-tree";
import { ApiService, HttpService } from '@/services';
import AuthStore from "./AuthStore";

const RootStore = types.model('RootStore', {
    id: types.string,
    authStore: types.optional(AuthStore, {}),
    apiService: types.optional(ApiService, {}),
    httpService: types.optional(HttpService, {})
});

export interface RootStoreInterface extends Instance<typeof RootStore> {}

export default RootStore;
