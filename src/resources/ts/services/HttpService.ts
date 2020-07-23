import axios, { AxiosResponse, AxiosRequestConfig, AxiosInstance } from 'axios';
import camelcaseKeysRecursive from 'camelcase-keys-recursive';
import querystring from 'querystring';
import snakeCaseKeys from 'snakecase-keys';
import { AppStoreInterface } from '@/stores';

export default class HttpService {

    protected appStore: AppStoreInterface;

    protected client: AxiosInstance;

    constructor(appStore: AppStoreInterface) {
        this.appStore = appStore;
        this.client = this.initClient();
    }

    protected initClient(): AxiosInstance {
        const client = axios.create({
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Accept': 'application/json'
            }
        });

        client.interceptors.response.use(
            (res: AxiosResponse<any>) => {
                res.data = res.data && camelcaseKeysRecursive(res.data) || {};
                return res;
            },
            (error: any) => {
                throw error;
            }
        );
        
        client.defaults.transformRequest = [data => data && querystring.stringify(snakeCaseKeys(data))];
        client.defaults.withCredentials = true;

        return client;
    }

    get(url: string, config?: AxiosRequestConfig): Promise<any> {
        this.appStore.setPending(true);

        return this.client.get(url, config)
            .finally(() => this.appStore.setPending(false));
    }

    delete(url: string, config?: AxiosRequestConfig): Promise<any> {
        this.appStore.setPending(true);

        return this.client.delete(url, config)
            .finally(() => this.appStore.setPending(false));
    }
    
    post(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        this.appStore.setPending(true);

        return this.client.post(url, data, config)
            .finally(() => this.appStore.setPending(false));        
    }

    put(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        this.appStore.setPending(true);

        return this.client.put(url, data, config)
            .finally(() => this.appStore.setPending(false));
    }

    patch(url: string, data?: any, config?: AxiosRequestConfig): Promise<any> {
        this.appStore.setPending(true);

        return this.client.patch(url, data, config)
            .finally(() => this.appStore.setPending(false));
    }
};