import { action, computed, observable } from "mobx";
import { SignInFormData, SignUpFormData } from "@/forms";
import { ApiService } from "@/services";
import AppStore from "./AppStore";

type SanctumToken = {
    token: string
}

class AuthStore {

    private connector: ApiService;

    @observable errors: string[] = [];

    @observable redirectTo: string | null = null;

    @observable token: string | null = null;

    /* user: types.maybeNull(UserModel) */

    constructor() {
        this.connector = new ApiService(AppStore, this);
    }

    @computed get isLogged(): boolean {
        return Boolean(this.token);
    }

    @action setErrors(errors: string[]): void {
        this.errors = errors;
    }

    @action setRedirectTo(redirectTo: string | null): void {
        this.redirectTo = redirectTo;
    }

    @action setToken(token: string | null): void {
        this.token = token;
    }

    @action signIn(data: SignInFormData): void {
        const { connector } = this;

        connector.get('sanctum/csrf-token')
            .then(() => connector.post('api/auth/login', data))
            .then((response: SanctumToken) => this.setToken(response.token))
            .catch(data => console.warn(data));
    }

    @action signUp(data: SignUpFormData): void {
        const { connector } = this;

        connector.post('api/auth/register', data)
            .then((response: SanctumToken) => this.setToken(response.token))
            .catch(data => console.warn(data));
    }

    @action logout(): void {
        this.setErrors([]);
        this.setRedirectTo(null);
        this.setToken(null);
        /* self.user = null; */
    }
}

export default new AuthStore();

export type AuthStoreInterface = InstanceType<typeof AuthStore>;