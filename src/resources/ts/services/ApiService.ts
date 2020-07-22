import { AxiosRequestConfig } from 'axios';
import { useStore } from '@/helpers';
import HttpService from './HttpService';

export default class ApiService extends HttpService {

    constructor() {
        super();
    }

    private get sessionToken(): string {
        // TODO
        //const authStore: AuthStoreInterface = getParentOfType(self, RootStore).authStore;
        //return authStore.token || '';
        return '';
    }

    private get uniqueId(): string {
        // TODO
        //const rootStore: RootStoreInterface = getParentOfType(self, RootStore);
        //return rootStore.id || '';
        return '';
    }

    private get config(): AxiosRequestConfig {
        // TODO

        return {
            headers: {
                'Authorization': this.sessionToken,
                'Request-Id': this.uniqueId
            }
        };
    }

    get(url: string): Promise<any> {
        return this.client.get(url, this.config);
    }

    delete(url: string): Promise<any> {
        return this.client.delete(url, this.config);
    }
    
    post(url: string, data?: any): Promise<any> {
        return this.client.post(url, data, this.config);
    }

    put(url: string, data?: any): Promise<any> {
        return this.client.put(url, data, this.config);
    }

    patch(url: string, data?: any): Promise<any> {
        return this.client.patch(url, data, this.config);
    }
}