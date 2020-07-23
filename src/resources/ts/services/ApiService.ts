import { AxiosRequestConfig } from 'axios';
import { AppStoreInterface, AuthStoreInterface } from '@/stores';
import HttpService from './HttpService';

export default class ApiService extends HttpService {

    private authStore: AuthStoreInterface;

    constructor(app: AppStoreInterface, auth: AuthStoreInterface) {
        super(app);
        this.authStore = auth;
    }

    private get sessionToken(): string {
        return this.authStore.token || '';
    }

    private get uniqueId(): string {
        return this.appStore.id || '';
    }

    private get config(): AxiosRequestConfig {
        return {
            headers: {
                'Authorization': this.sessionToken,
                'Request-Id': this.uniqueId
            }
        };
    }

    get(url: string): Promise<any> {
        return super.get(url, this.config);
    }

    delete(url: string): Promise<any> {
        return super.delete(url, this.config);
    }
    
    post(url: string, data?: any): Promise<any> {
        return super.post(url, data, this.config);
    }

    put(url: string, data?: any): Promise<any> {
        return super.put(url, data, this.config);
    }

    patch(url: string, data?: any): Promise<any> {
        return super.patch(url, data, this.config);
    }
}