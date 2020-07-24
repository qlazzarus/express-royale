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
        const { connector, failedAfter, successAfter } = this;

        connector.get('sanctum/csrf-token')
            .then(() => connector.post('api/auth/login', data))
            .then(successAfter, failedAfter);
    }

    @action signUp(data: SignUpFormData): void {
        const { connector, failedAfter, successAfter } = this;

        connector.post('api/auth/register', data)
            .then(successAfter, failedAfter);
    }

    @action.bound successAfter(response: SanctumToken): void {
        this.setToken(response.token);
    }

    @action.bound failedAfter(error: any): void {
        const { response } = error;

        if (response) {
            const { errors, message } = response.data;

            AppStore.setMessage(message);
            //this.setErrors();
            console.log(errors);
        }
        /*
        if (error.response) {
            // 요청이 이루어졌으며 서버가 2xx의 범위를 벗어나는 상태 코드로 응답했습니다.
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
          }
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
        this.setErrors([]);
        this.setRedirectTo(null);
        this.setToken(null);
        /* self.user = null; */
    }
}

export default new AuthStore();

export type AuthStoreInterface = InstanceType<typeof AuthStore>;