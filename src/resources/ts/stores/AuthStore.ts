import { action, computed, observable } from "mobx";
import { ApiService } from "@/services";
import AppStore from "./AppStore";

type SanctumToken = {
    token: string
}

type SignInFormData = {
    username: string,
    password: string,
}

export type SignUpFormData = {
    username: string,
    email: string,
    password: string,
    passwordConfirm: string
}

class AuthStore {

    private connector: ApiService;

    @observable redirectTo: string | null = null;

    @observable token: string | null = null;

    /* user: types.maybeNull(UserModel) */

    constructor() {
        this.connector = new ApiService(AppStore, this);
    }

    @computed get isLogged(): boolean {
        return Boolean(this.token);
    }

    @action setRedirectTo(redirectTo: string | null): void {
        this.redirectTo = redirectTo;
    }

    @action setToken(token: string | null): void {
        this.token = token;
    }

    @action async signIn(data: SignInFormData) {
        const { connector, failedAfter, successAfter } = this;

        return await connector.get('sanctum/csrf-token')
            .then(() => connector.post('api/auth/login', data))
            .then(successAfter)
            .catch(failedAfter);
    }

    @action async signUp(data: SignUpFormData) {
        const { connector, failedAfter, successAfter } = this;

        return await connector.post('api/auth/register', data)
            .then(successAfter)
            .catch(failedAfter);
    }

    @action.bound successAfter(response: SanctumToken): void {
        this.setToken(response.token);
    }

    @action.bound failedAfter(error: any): void {
        const { response } = error;

        if (response) {
            const { errors, message } = response.data;
            const type = 'alert';
            const closeIn = 3000;

            AppStore.setFlash({ type, message, closeIn });

            return errors;
        }

        /*
          else if (error.request) {
            // 요청이 이루어 졌으나 응답을 받지 못했습니다.
            // `error.request`는 브라우저의 XMLHttpRequest 인스턴스 또는
            // Node.js의 http.ClientRequest 인스턴스입니다.
            console.log(error.request);
          }
          else {
            // 오류를 발생시킨 요청을 설정하는 중에 문제가 발생했습니다.
            console.log('Error', error.message);
          }
        */
    }

    @action logout(): void {
        this.setRedirectTo(null);
        this.setToken(null);
        /* self.user = null; */
    }
}

export default new AuthStore();

export type AuthStoreInterface = InstanceType<typeof AuthStore>;
