import { action, computed, observable } from "mobx";
import { SignInFormData, SignUpFormData } from "@/forms";
import { ApiService } from "@/services";

/*
https://github.com/min44/rfa-web-manager-frontend/blob/d9d82e92b8e4c443ca3359c1955e720f2195ebfd/src/stores/authStore.ts
 */

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
        this.connector = new ApiService();
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
        const { connector, logout } = this;

        connector.get('sanctum/csrf-token')
            .then(() => connector.post('api/auth/login', data))
            .then((response: SanctumToken) => this.setToken(response.token))
            .finally(() => logout());
    }

    @action signUp(data: SignUpFormData): void {
        const { connector, logout } = this;

        connector.post('api/auth/register', data)
            .then((response: SanctumToken) => this.setToken(response.token))
            .finally(() => logout());
    }

    @action logout(): void {
        this.setErrors([]);
        this.setRedirectTo(null);
        this.setToken(null);
        /* self.user = null; */
    }
}

export default new AuthStore();
