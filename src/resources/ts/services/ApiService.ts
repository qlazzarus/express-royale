import { AxiosRequestConfig } from 'axios';
import { AppStoreInterface, AuthStoreInterface } from '@/stores';
import HttpService from './HttpService';

/* eslint-disable  @typescript-eslint/no-explicit-any */

export default class ApiService extends HttpService {

    private authStore: AuthStoreInterface;

    constructor(app: AppStoreInterface, auth: AuthStoreInterface) {
        super(app);
        this.authStore = auth;
    }

    private get config(): AxiosRequestConfig {
        return {
            headers: {
                'Authorization': this.authStore.token && `Bearer ${this.authStore.token}` || '',
                'Request-Id': this.appStore.id || ''
            }
        };
    }

    get(url: string): Promise<any> {
        return super.get(url, this.config);
    }

    delete(url: string): Promise<any> {
        return super.delete(url, this.config);
    }

    post(url: string, data?: Record<string, unknown>): Promise<any> {
        return super.post(url, data, this.config);
    }

    put(url: string, data?: Record<string, unknown>): Promise<any> {
        return super.put(url, data, this.config);
    }

    patch(url: string, data?: Record<string, unknown>): Promise<any> {
        return super.patch(url, data, this.config);
    }
}
