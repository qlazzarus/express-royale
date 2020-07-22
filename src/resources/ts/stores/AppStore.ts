import { action, observable, reaction } from "mobx";
import { localStorage } from '@/helpers';
/*
import { ApiService, HttpService } from '@/services';
import AuthStore from "./AuthStore";

const RootStore = types.model('RootStore', {
    id: types.string,
    authStore: types.optional(AuthStore, {}),
    apiService: types.optional(ApiService, {}),
    httpService: types.optional(HttpService, {})
});

https://github.com/min44/rfa-web-manager-frontend/blob/d9d82e92b8e4c443ca3359c1955e720f2195ebfd/src/stores/authStore.ts
*/
class AppStore {
    @observable pending: boolean = false;

    @observable id: string = '';

    @action setId(id: string) {
        this.id = id;
    }

    @action setPending(pending: boolean) {
        this.pending = pending;
    }

    constructor() {
        reaction(
            () => this.id,
            (id: string) => {
                localStorage
            }
        );
    }
}

export default new AppStore();