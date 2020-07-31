import { action, autorun, computed, observable, reaction } from "mobx";
import { ApiService } from "@/services";
import { useLocalStorage } from '@/hooks';
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

export type UserInfo = {
    channels: UserChannel[],
    unique_identifer: string
};

export type UserChannel = {
    channel: 'name' | 'email',
    channelId: string
}

const [token, setToken] = useLocalStorage('token', '');

class AuthStore {

    private connector: ApiService;

    @observable redirectTo: string | null = null;

    @observable token: string = token;

    @observable user: UserInfo | null = null;

    constructor() {
        this.connector = new ApiService(AppStore, this);

        reaction(
            () => this.token,
            (token: string) => setToken(token)
        );

        this.token && this.me();
    }

    @computed get logged(): boolean {
        return Boolean(this.token) && null !== this.user;
    }

    @action setRedirectTo(redirectTo: string | null): void {
        this.redirectTo = redirectTo;
    }

    @action setToken(token: string): void {
        this.token = token;
    }

    @action setUser(info: UserInfo | null): void {
        this.user = info;
    }

    @action async signIn(data: SignInFormData) {
        const { connector, failedAfter, successAfter, me } = this;

        await connector.get('sanctum/csrf-token')
            .then(() => connector.post('api/auth/login', data))
            .then(successAfter)
            .catch(failedAfter);

        await me();
    }

    @action async signUp(data: SignUpFormData) {
        const { connector, failedAfter, successAfter, me } = this;

        await connector.post('api/auth/register', data)
            .then(successAfter)
            .catch(failedAfter);

        await me();
    }

    @action async me() {
        await this.connector.get('api/auth/me')
            .then((user: UserInfo) => this.setUser(user))
            .catch((error) => {
                console.log('logout', error);
                //this.logout();
            });
    }

    @action.bound successAfter(response: SanctumToken): void {
        this.setToken(response.token);
    }

    @action.bound failedAfter(error: any): void {
        const { response } = error;

        this.logout();

        if (response) {
            const { errors, message } = response.data;
            const type = 'alert';
            const closeIn = 3000;

            AppStore.setFlash({ type, message, closeIn });
            throw errors;
        } else {
            throw error;
        }

        /*
          else if (error.request) {
            // 요청이 이루어 졌으나 응답을 받지 못했습니다.
            console.log(error.request);
          }
          else {
            // 오류를 발생시킨 요청을 설정하는 중에 문제가 발생했습니다.
            console.log('Error', error.message);
          }
        */
    }

    @action logout(): void {
        this.setToken('');
        this.setUser(null);
    }
}

export default new AuthStore();

export type AuthStoreInterface = InstanceType<typeof AuthStore>;
